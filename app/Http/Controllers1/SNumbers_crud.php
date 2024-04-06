<?php

namespace App\Http\Controllers;
use App\Models\SNumbers;
use App\Models\nav ;
use App\Models\box ;
use App\Models\topic ;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class SNumbers_crud extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $FKStatic_ID=$request->FKStatic_ID;
        $page_id=$request->page_id;


        if(isset($FKStatic_ID)){
      
$static=SNumbers::where ($page_id,$FKStatic_ID)->orderBy('id')->get();
       
        $countstatic = count($static);

        if($page_id=='nav_id'){

            @$table='nav';
          
            $navs=nav::where('id',$FKStatic_ID)->get();
          
            foreach ($navs as $nav ) {
                  
              $pagename=$nav -> sub1menu;
              
              }
          
                  }elseif($page_id=='box_id'){
          
                   @$table='box';
          
                   $boxes=box::where('id',$FKStatic_ID)->get();
          
                   foreach ($boxes as $box ) {
                  
                      $pagename=$box -> title;
                      
                      }
          
                  }elseif($page_id=='relatedtopic_id'){
          
             @$table='topic';
          
             $topics=topic::where('id',$FKStatic_ID)->get();
          
             foreach ($topics as $topic ) {
                  
              $pagename=$topic -> subject;
              
              }
           
              }


    if( $countstatic > 0){ 


        return view('Admin.Auth.static',compact('static'),[

            'MainM_ID'=>$FKStatic_ID,
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
     * @param  \App\Models\SNumbers 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */                                              //update cat 
    public function create(Request $request,SNumbers $SNumbersitem)
    {
                
        





    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\SNumbers 
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

@$statictitle=$request['statictitle'][$i];
@$staticNum=$request['staticNum'][$i];
@$staticsymbol=$request['staticsymbol'][$i];
@$FKStatic_ID=$request['FKStatic_ID'];
@$page_id=$request['page_id'];
@$cat=$request['staticcat'];         // cat_Name

$staticshow=$request['staticshow'];

if(!empty($staticshow)){
       
    @$FILENAME=$this ->saveImage($staticshow[$i] ,'Front/IMG/');

}else{

    @$FILENAME=' ';

}

                               
 if(!empty($FKStatic_ID)){

              echo  "<script>   alert('Data send success'); </script>";

              SNumbers::create([
                
                'title' =>$statictitle,
                     
                'ImageName' =>$FILENAME , 

                'SNumber_type'=>$cat,

                'SNumber_Num' =>$staticNum,  

                'static'=>$request->static,

                'symbol' =>$staticsymbol,
                      
                $page_id =>$FKStatic_ID
                
                
                ]);


                SNumbers::whereRaw("ID = (select Min(id) from s_numbers Where  SNumber_type='$cat' And  $page_id='$FKStatic_ID')")->update([    
       
                    'SNumber_Name'=> $cat,
                    
               ] );
                


            }

        }

            return view('Admin.Auth.newtopic',[
             
                'navID' => $request->FKStatic_ID ,        
                'Domain_site' => $Domain_site

             ]); 


   }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\SNumbers
     * @param  \App\Models\seo  
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,SNumbers $SNumbersitem)
    {

        
        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){

            $Domain_site = $SEOitem-> Domain_site ; 
       
           }

        if(isset($_POST['selectcate']) or  isset($_GET['page'])) {

        $cat_type= $request->cat_type ;

        $FKStatic_ID = $request->FKStatic_ID ;

        $page_id=$request->page_id;

                
$static=SNumbers::where ('SNumber_type',$cat_type)
->where($page_id,$FKStatic_ID)
->orderBy('id')
->paginate(2);

        $countstatic = count($static);

        if( $countstatic > 0){ 
    
            return view('Admin.Auth.static',compact('static'), [

                'FKStatic_ID'=>$FKStatic_ID,
                'page_id' =>$page_id,
                'cat_type' => $cat_type,
                'Domain_site' => $Domain_site


            ]);

        }else{

            echo'No data found';
        }

    }elseif(isset($_POST['update'])){

            $ID=$request->ID;

            $static=SNumbers::where('ID',$ID)->get();
            
            $countstatic = count($static);
            
            if($countstatic > 0){ 
            
                return view('Admin.Auth.static',compact('static'));
            
            }else {

                echo 'No data found' ;
                
            }


        }



    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\SNumbers 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request,SNumbers $SNumbersitem)
    {
        


    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SNumbers 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,SNumbers $SNumbersitem)
    {

        if(isset($_POST['upcat'])){

            $cat_typeprev =$request -> cat_typeprev;
            $cat_type= $request ->cat_type  ;
            $static_id=$request -> static;
            $FKStatic_ID=$request -> FKStatic_ID;
            $page_id=$request ->page_id;
            
            $href="FKStatic_ID=$FKStatic_ID&upcat=$request ->upcat&page_id=$page_id";

            SNumbers::where($page_id, $FKStatic_ID)-> where('SNumber_type', $cat_typeprev)->update([    
       
            'SNumber_type'=> $cat_type,
            
       ] );

      
       SNumbers::whereRaw("ID = (select Min(id) from s_numbers Where SNumber_Name='$cat_typeprev' And   $page_id='$FKStatic_ID')")->update([    
       
        'SNumber_Name'=> $cat_type,
    
]);


 
return redirect()->route('SNumbers.index',[$href])->with('success','update  sent  succefuly');


}elseif(isset($_POST['updatecat'])){


    $FKStatic_ID = $request->FKStatic_ID ;

    $page_id=$request->page_id;

    $href="FKStatic_ID=$FKStatic_ID&updatecat=$request ->updatecat&page_id=$page_id";

        echo  "<script>   alert('Data updated success'); </script>";

                    
        if(!empty($request -> staticshow)){

            @$FILENAME= $this -> saveImage($request -> staticshow ,'Front/IMG/');

            SNumbers::where('ID',$request->ID)->update([    
       
                'ImageName'=> $FILENAME,
                'SNumber_Num' =>$request->staticNum,
                'title'=> $request->statictitle,
                'Ar_title'=>$request->Ar_title,
                'symbol' =>$request->staticsymbol
                
           ] );

         }else{

            SNumbers::where('ID',$request->ID)->update([    
       
                'SNumber_Num' =>$request->staticNum,
                'title'=> $request->statictitle,
                'Ar_title'=>$request->Ar_title,
                'symbol' =>$request->staticsymbol
                
           ] );


            }
          
            
            


    return redirect()->route('SNumbers.index',[$href])->with('success','update  sent  succefuly');

           

        }

    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\SNumbers 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,SNumbers $SNumbersitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";
        
        if(isset($_POST['DELCATITEM'])){

 $ID=$request->ID;

$FKStatic_ID = $request->FKStatic_ID ;

$page_id=$request->page_id;

$href="FKStatic_ID=$FKStatic_ID&DELCATITEM=$request->DELCATITEM&page_id=$page_id";
        
SNumbers::where('ID',$ID)->Delete();

return redirect()->route('SNumbers.index',[$href])->with('success','update  sent  succefuly');

    }

    
}


/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\SNumbers 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


public function  Del_Bulk(Request $request,SNumbers $SNumbersitem)
    {

#for($i=0;$i<=$counter;$i++){
 
    //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

    @$FKStatic_ID = $request->FKStatic_ID ;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
     SNumbers::whereIn('ID' ,$_SET)->Delete();
 
    @$href="FKStatic_ID=$FKStatic_ID&DELCATITEM=$request->DELCATITEM&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
       //     #print_r($request->checkbox);
       // #	 }	

     return redirect()->route('SNumbers.index',[$href])->with('success','update  sent  succefuly');


    }


}
