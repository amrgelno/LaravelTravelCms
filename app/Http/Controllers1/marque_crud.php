<?php

namespace App\Http\Controllers;
use App\Models\marque ;
use App\Models\nav ;
use App\Models\box ;
use App\Models\topic ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class marque_crud extends Controller
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


        $marque=marque::where ($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(3,['id','NEWS',$page_id]);


        $countmarque = count($marque);

    if( $countmarque > 0){ 

        return view('Admin.Auth.marque',compact('marque'),[

            'MainM_ID'=>$MainM_ID,
            'page_id' =>$page_id,
            'pagename' =>$pagename
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
     * @param  \App\Models\marque 
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


@$href="MainM_ID=$MainM_ID&Edit_marque=Edit_marque&page_id=$page_id";
                            
//  @$FILENAME= $this -> saveImage($request -> upload ,'front/IMG/');
          
       
        if(!empty($MainM_ID)){

              echo  "<script>   alert('Data send success'); </script>";

            marque::create([
    
                'NEWS' =>$request->NewsMarque,

                $page_id =>  $request->MainM_ID

                
                ]);


return redirect()->route('marque.index',[$href])->with('success','update  sent  succefuly');

            }


    }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\marque 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,marque $marqueitem)
    {
           
        @$marque_ID= $request->marque ;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        $marque=marque::where ('id',$marque_ID)->where($page_id,$MainM_ID)->get();

        $countmarque = count($marque);

        if( $countmarque > 0){ 
    
            return view('Admin.Auth.marque',compact('marque'),[
             
                'marqueID' =>  $MainM_ID   ,
                
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
     * @param  \App\Models\marque 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,marque $marqueitem)
    {

        echo  "<script>   alert('Data updated success'); </script>";

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_marque=Edit_marque&page_id=$page_id";

                    
            // @$FILENAME= $this -> saveImage($request -> upload ,'front/IMG/');
          
      

            marque::where('id',$request->marque)->update([    
       
                'NEWS' =>$request->NewsMarque,

                $page_id =>  $request->MainM_ID
              
           ] );


return redirect()->route('marque.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\marque 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,marque $marqueitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->marque;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_marque=Edit_marque&page_id=$page_id ";

marque::where('ID',$ID)->Delete();

return redirect()->route('marque.index',[$href])->with('success','update  sent  succefuly');



    }


/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\marque 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,marque $marqueitem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
     marque::whereIn('ID' ,$_SET)->Delete();
 
    @$href="MainM_ID=$MainM_ID&Edit_marque=Edit_marque&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
       //     #print_r($request->checkbox);
       // #	 }	

     return redirect()->route('marque.index',[$href])->with('success','update  sent  succefuly');


    }



}
