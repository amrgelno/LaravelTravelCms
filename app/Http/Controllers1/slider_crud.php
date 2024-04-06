<?php

namespace App\Http\Controllers;
use App\Models\slider ;
use App\Models\nav ;
use App\Models\box ;
use App\Models\topic ;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class slider_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        @$MainM_ID=$request->MainM_ID;
        @$page_id=$request->page_id;

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){

            $Domain_site = $SEOitem-> Domain_site ; 
       
           }

    
        if($page_id=='nav_id'){

            @$table='nav';
          
            $navs=nav::where('id',$MainM_ID)->get();
          
            foreach ($navs as $nav ) {
                  
              $pagename=$nav -> sub1menu;
              
              }
          
                  }elseif($page_id=='box_id'){
          
                   @$table='box';
          
                   $boxes=box::where('id',$MainM_ID)->get();
          
                   foreach ($boxes as $box ) {
                  
                      $pagename=$box -> title;
                      
                      }
          
                  }elseif($page_id=='relatedtopic_id'){
          
             @$table='topic';
          
             $topics=topic::where('id',$MainM_ID)->get();
          
             foreach ($topics as $topic ) {
                  
              $pagename=$topic -> subject;
              
              }
           
              }


        $slider=slider::where ($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(3,['id','title','ImageName',$page_id]);


        $countslider = count($slider);

    if( $countslider > 0){ 

        return view('Admin.Auth.slider',compact('slider'),[

            'MainM_ID'=>$MainM_ID,
            'page_id' =>$page_id,
            'pagename' =>$pagename,
            'Domain_site' => $Domain_site
        ]);

    }else{


       echo'لايوجد محتوى حتى الان';


    }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\slider 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {       
        @$MainM_ID=$request->MainM_ID;
        @$box_id=$request->box_ID;
        @$Topic_id=$request->Topic_ID;
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_slider=Edit_slider&page_id=$page_id";
                            
        @$counter2=$request['countnum'];  //2  ->   2 > $i++ [0 1]  

        for ($i = 0; $i<$counter2 ; $i++)    {


            @$FILENAME= $this -> saveImage($request -> uploadslide[$i] ,'Front/IMG/');
          
       
              echo  "<script>   alert('Data send success'); </script>";

            slider::create([
    
                'title' =>$request->slidetitle[$i],

                 'slide style' => 'defaultslider',

                $page_id =>  $request->MainM_ID,

                'ImageName'=>$FILENAME    
                
                ]);

            }
return redirect()->route('slider.index',[$href])->with('success','update  sent  succefuly');

            
    }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\slider 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,slider $slideritem)
    {
           
        @$slider_ID= $request->slider ;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        $sliderD=slider::where ('id',$slider_ID)->where($page_id,$MainM_ID)->get();

        $countslider = count($sliderD);

        if( $countslider > 0){ 
    
            return view('Admin.Auth.slider',compact('sliderD'),[
             
                'sliderID' =>  $MainM_ID   ,
                
             ]);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        



    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,slider $slideritem)
    {

        echo  "<script>   alert('Data updated success'); </script>";


        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_slider=Edit_slider&page_id=$page_id";
    

            if(!empty($request -> upload)){

                @$FILENAME= $this -> saveImage($request -> upload ,'Front/IMG/');

            slider::where('id',$request->slider)->update([    
       
                'title' =>$request->slidetitle,

                 'slide style' => 'defaultslider',

                $page_id =>  $request->MainM_ID,

                'ImageName'=>$FILENAME   
                
                
           ] );

            }else{

                slider::where('id',$request->slider)->update([    
       
                    'title' =>$request->slidetitle,
                    'slide style' => 'defaultslider',

    
                    $page_id =>  $request->MainM_ID,
        
                                        
               ] );



            }

return redirect()->route('slider.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\slider 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,slider $slideritem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->slider;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_slider=Edit_slider&page_id=$page_id";

slider::where('ID',$ID)->Delete();

return redirect()->route('slider.index',[$href])->with('success','update  sent  succefuly');



    }



    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\slider 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,slider $slideritem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
   slider::whereIn('ID' ,$_SET)->Delete();
 
    @$href="MainM_ID=$MainM_ID&Edit_slider=Edit_slider&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
       //     #print_r($request->checkbox);
       // #	 }	

     return redirect()->route('slider.index',[$href])->with('success','update  sent  succefuly');


    }


}
