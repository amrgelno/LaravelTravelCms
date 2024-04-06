<?php

namespace App\Http\Controllers;
use App\Models\topic ;
use App\Models\nav ;
use App\Models\box ;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class box_crud extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $MainM_ID=$request->MainM_ID;
        $page_id=$request->page_id;

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
              

        if(isset($MainM_ID)){
      
            
             $box=box::where('class','!=','filteroption1')->where ($page_id,$MainM_ID)->orwhere('class',null)->where ($page_id,$MainM_ID)->orderBy('id')->get();

        
        $countbox = count($box);

    if( $countbox > 0){ 


        return view('Admin.Auth.box',compact('box'),[

            'MainM_ID'=>$MainM_ID,
            'page_id' =>$page_id,
            'pagename' => $pagename, 

        ]);

    }else{


       echo'لايوجد محتوى الأن';

    }
        }

    }

   /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\box 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */                                              //update cat 
    public function create(Request $request,box $boxitem)
    {
                
        





    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\box 
      * @param  \App\Models\seo ;
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {       
       
        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 


        foreach ($SEO as $SEOitem){
    
            $Domain_site = $SEOitem-> Domain_site ; 
       
           }


        @$counter2=$request['counter'];  //2  ->   2 > $i++ [0 1]  

        for ($i = 0; $i<$counter2 ; $i++)    {

@$Boxtitle=$request['boxtitle'][$i];
@$BoxDesc=$request['boxDesc'][$i];
@$price=$request['price'][$i];
@$DayTime=$request['DayTime'][$i];
@$MainM_ID=$request['MainM_ID'];
@$page_id=$request['page_id'];
@$cat=$request['cat'];         // cat_Name


$cat_type=box::where('cat_type',$cat)->get();     //  check the cat_Name was found or not with  cat_type


if(!empty($cat_type)){

foreach ($cat_type as $catitem){
    
    $BOX_STYLE = $catitem-> BOX_STYLE ; 

   }
}else{


    $BOX_STYLE ='Null';


}

$boxshow=$request['boxshow'];

if(!empty($boxshow)){
       
    @$FILENAME=$this ->saveImage($boxshow[$i] ,'Front/IMG/');

}else{

    @$FILENAME=' ';

}


                               
 if(!empty($MainM_ID)){

              echo  "<script>   alert('Data send success'); </script>";

            box::create([
                
                'title' =>$Boxtitle,

                'Desc' =>$BoxDesc,
                     
                'ImageName' =>$FILENAME , 


                'cat_type'=>$cat,

                'box'=>$request->box,


                'price'=>$price,

                
                'DayTime'=>$DayTime,

               'Run' =>'Null',
               'TripStyles'=>'Null',
               'GroupSize'=> 'Null',
               'Duration'=>'Null',
               'Country'=>'Null',
               'visibility'=>'Null',
               'BOX_STYLE'=>$BOX_STYLE,
                    
                $page_id =>$MainM_ID
                
                
                ]);


box::whereRaw("ID = (select Min(id) from boxes Where cat_type='$cat' And  $page_id='$MainM_ID')")->update([    
       
                    'cat_Name'=> $cat,

                   
                    
               ] );
                


            }

        }

            return view('Admin.Auth.newtopic',[
             
                'navID' => $request->MainM_ID ,        
                'Domain_site' => $Domain_site

             ]); 


   }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\box 
     * @param  \App\Models\seo ;
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,box $boxitem)
    {
        
        if(isset($_POST['selectcate'])  or  isset($_GET['page'])) {

        $cat_type= $request->cat_type ;

        $MainM_ID =$request->MainM_ID ;

        $page_id=$request->page_id;
        
        
        $boxD=box::where ('cat_type',$cat_type)
        ->where($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(3);

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){
    
         $Domain_site = $SEOitem-> Domain_site ; 
    
        }


        $countbox = count($boxD);

        if( $countbox > 0){ 
    
            return view('Admin.Auth.box',compact('boxD'),

                [

                    'MainM_ID'=>$MainM_ID,
                    'page_id' =>$page_id,
                    'cat_type' => $cat_type,
                    'Domain_site' => $Domain_site
                ]

            );
            
        }else{

            echo'No data found';
        }

    }elseif(isset($_POST['selecttoupdate'])){

            $MainM_ID=$request->box;

            $boxupdate=box::where('ID',$MainM_ID)->get();
            
            $countbox = count($boxupdate);
            
            if($countbox > 0){ 
            
                return view('Admin.Auth.box',compact('boxupdate'));
            
            }


        }



    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\box 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request,box $boxitem)
    {
        


    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\box 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,box $boxitem)
    {

          if(isset($_POST['upcat'])){
            $cat_typeprev =$request -> cat_typeprev;
            $cat_type= $request ->cat_type  ;
            $box_id=$request -> box;
            $MainM_ID=$request -> MainM_ID;
            $page_id=$request ->page_id;
            $BOX_STYLE=$request ->BOX_STYLE;
            
            $href="MainM_ID=$MainM_ID&upcat=$request ->upcat&page_id=$page_id";
			
			$boxCatType = $box->cat_type;
			
			box::whereRaw("ID = (select MIN(ID) from boxes where cat_type = '$boxCatType' AND $page_id='$MainM_ID')")->update([
				'cat_Name'=> $cat_type,
				'Ar_cat_Name' =>$request->Ar_cat_Name,
			]);
			
			box::where($page_id, $MainM_ID)->where('cat_type', $boxCatType)->update([
				'cat_type'=> $cat_type,
				'BOX_STYLE'=> $BOX_STYLE,
			]);
			
			return redirect()->route('box.index',[$href])->with('success','update  sent  succefuly');

}elseif(isset($_POST['updatecat'])){


    $cat_type= $request->cat_type ;

    $MainM_ID = $request->MainM_ID ;

    $page_id=$request->page_id;



if(!empty($request ->viewhome)){

$viewhome=$request ->viewhome;


}else{


$viewhome='DisActive';


}

    $href="MainM_ID=$MainM_ID&updatecat=$request ->updatecat&page_id=$page_id";

        echo  "<script>   alert('Data updated success'); </script>";
          
        



            if(!empty($request -> boxshow)){

                @$FILENAME= $this -> saveImage($request -> boxshow ,'Front/IMG/');
    

  if(!empty($request -> filtersel)){

           
                    box::where('ID',$request->box)->update([    
       
                        'ImageName'=> $FILENAME,
                        'title'=> $request->boxtitle,
                        'Desc' => $request->boxDesc,
                        'Ar_title'=>$request -> Ar_boxtitle,
                        'Ar_Desc'=>$request -> Ar_boxDesc,
                        'visibility' =>$viewhome,
                        'price'=>$request ->price,
                        'DayTime'=>$request ->DayTime,
                        $request ->filtersel=>$request ->filteropt

                        
                   ]);
    
         }else{



   box::where('ID',$request->box)->update([    
       
                        'ImageName'=> $FILENAME,
                        'title'=> $request->boxtitle,
                        'Desc' => $request->boxDesc,
                        'Ar_title'=>$request -> Ar_boxtitle,
                        'Ar_Desc'=>$request -> Ar_boxDesc,
                        'visibility' =>$viewhome,
                        'price'=>$request ->price,
                        'DayTime'=>$request ->DayTime,
                        
                   ]);




}           
    
             }else{



if(!empty($request -> filtersel)){

    
                box::where('ID',$request->box)->update([    
       


                    'title'=> $request->boxtitle,
                    'Desc' => $request->boxDesc,
                    'Ar_title'=>$request -> Ar_boxtitle,
                    'Ar_Desc'=>$request -> Ar_boxDesc,
                    'visibility' =>$viewhome,
                    'price'=>$request ->price,
                    'DayTime'=>$request ->DayTime,
                 
                     $request ->filtersel=>$request ->filteropt



                    
               ]);
    
}else{


  box::where('ID',$request->box)->update([    
       


                    'title'=> $request->boxtitle,
                    'Desc' => $request->boxDesc,
                    'Ar_title'=>$request -> Ar_boxtitle,
                    'Ar_Desc'=>$request -> Ar_boxDesc,
                    'visibility' =>$viewhome,
                    'price'=>$request ->price,
                    'DayTime'=>$request ->DayTime,
                 
                  


                    
               ]);









}    
                }




    return redirect()->route('box.index',[$href])->with('success','update  sent  succefuly');

           

        }

    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\box 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,box $boxitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";
        
        if(isset($_POST['DELCATITEM'])){

$ID=$request->box;

$cat_type= $request->cat_type ;

$MainM_ID = $request->MainM_ID ;

$page_id=$request->page_id;

$href="MainM_ID=$MainM_ID&DELCATITEM=$request->DELCATITEM&page_id=$page_id";
        
box::where('ID',$ID)->Delete();

return redirect()->route('box.index',[$href])->with('success','update  sent  succefuly');

    }

    
}


 /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\box 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,box $boxitem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
box::whereIn('ID' ,$_SET)->Delete();
 
    @$href="MainM_ID=$MainM_ID&DELCATITEM=$request->DELCATITEM&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
       //     #print_r($request->checkbox);
       // #	 }	

     return redirect()->route('box.index',[$href])->with('success','update  sent  succefuly');


    }



}
