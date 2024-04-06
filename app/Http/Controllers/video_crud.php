<?php

namespace App\Http\Controllers;
use App\Models\video;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class video_crud extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $FKvideo_ID=$request->FKvideo_ID;
        $page_id=$request->page_id;


        if(isset($FKvideo_ID)){
      
$video=video::where ($page_id,$FKvideo_ID)->orderBy('id')->get();
        
        $countvideo = count($video);

    if( $countvideo > 0){ 


        return view('Admin.Auth.video',compact('video'));

    }else{


       echo'لايوجد محتوى الأن';



    }
        }

    }

   /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\video 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */                                              //update cat 
    public function create(Request $request,video $videoitem)
    {
                
        





    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\video 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {       

        



        @$counter=$request['counter'];  //2  ->   2 > $i++ [0 1]  

        for ($i = 0; $i<$counter ; $i++)    {

@$videotitle=$request['vidotitle'][$i];
@$FKvideo_ID=$request['FKvideo_ID'];
@$page_id=$request['page_id'];
@$cat=$request['videocat'];         // cat_Name

$videoshow=$request['vidoshow'];


if(!empty($videoshow)){
       
    @$FILENAME=$this ->saveImage($videoshow[$i] ,'Front/Video/');

}else{

    @$FILENAME=' ';

}

                               
 if(!empty($FKvideo_ID)){

              echo  "<script>   alert('Data send success'); </script>";

              video::create([
                
                'title' =>$videotitle,
                     
                'VIDOName' =>$FILENAME , 

                'cat_type'=>$cat,
                      
                $page_id =>$FKvideo_ID
                
                
                ]);


video::whereRaw("ID = (select Min(id) from videos Where  cat_type='$cat' And  $page_id='$FKvideo_ID')")->update([    
       
                    'cat_Name'=> $cat,
                    
               ] );
                


            }

        }

            return view('Admin.Auth.newtopic',[
             
                'navID' => $request->FKvideo_ID ,        
                
             ]); 


   }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\video 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,video $videoitem)
    {

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){

            $Domain_site = $SEOitem-> Domain_site ; 
       
           }
        
        if(isset($_POST['selectcate'])or  isset($_GET['page'])) {

        $cat_type= $request->cat_type ;

        $FKvideo_ID = $request->FKvideo_ID ;

        $page_id=$request->page_id;

                
$video=video::where ('cat_type',$cat_type)->where($page_id,$FKvideo_ID)->get();

        $countvideo = count($video);

        if( $countvideo > 0){ 
    
            return view('Admin.Auth.video',compact('video'),[

                'Domain_site' => $Domain_site
            ]);
        }else{

            echo'No data found';
        }

    }elseif(isset($_POST['Editvideo'])){

            // $ID=$request->ID;

            $video=video::where('ID',$request->video)->get();
            
            $countvideo = count($video);
            
            if($countvideo > 0){ 
            
                return view('Admin.Auth.video',compact('video'));
            
            }else {

                echo 'No data found' ;
                
            }


        }



    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\video 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request,video $videoitem)
    {
        


    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\video 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,video $videoitem)
    {

        if(isset($_POST['upcat'])){

            $cat_typeprev =$request -> cat_typeprev;
            $cat_type= $request ->cat_type  ;
            $video_id=$request -> video;
            $FKvideo_ID=$request -> FKvideo_ID;
            $page_id=$request ->page_id;
            
            $href="FKvideo_ID=$FKvideo_ID&upcat=$request ->upcat&page_id=$page_id";

            video::where($page_id, $FKvideo_ID)-> where('cat_type', $cat_typeprev)->update([    
       
            'cat_type'=> $cat_type,
            
       ] );

      
       video::whereRaw("ID = (select Min(id) from videos Where cat_Name='$cat_typeprev' And   $page_id='$FKvideo_ID')")->update([    
       
        'cat_Name'=> $cat_type,
    
]);


 
return redirect()->route('video.index',[$href])->with('success','update  sent  succefuly');


}elseif(isset($_POST['updatecat'])){


    $FKvideo_ID = $request->FKvideo_ID ;

    $page_id=$request->page_id;

    $href="FKvideo_ID=$FKvideo_ID&updatecat=$request ->updatecat&page_id=$page_id";

        echo  "<script>   alert('Data updated success'); </script>";

                  
        

        if(!empty($request -> vidoshow)){
            @$FILENAME= $this -> saveImage($request -> vidoshow ,'Front/Video/');
          
            // $ID=$request->ID;
            
            video::where('ID',$request ->video)->update([    
       
                'VIDOName'=> $FILENAME,
                'title'=> $request->vidotitle

                
           ] );
            }else{

                video::where('ID',$request ->video)->update([    
       
                    'title'=> $request->vidotitle
    
                    
               ] );




            }

    return redirect()->route('video.index',[$href])->with('success','update  sent  succefuly');

           

        }

    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\video 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,video $videoitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";
        
        if(isset($_POST['DELCATITEM'])){

//  $ID=$request->ID;

$FKvideo_ID = $request->FKvideo_ID ;

$page_id=$request->page_id;

$href="FKvideo_ID=$FKvideo_ID&DELCATITEM=$request->DELCATITEM&page_id=$page_id";
        
video::where('ID',$request ->video)->Delete();

return redirect()->route('video.index',[$href])->with('success','update  sent  succefuly');

    }

    
}
}
