<?php

namespace App\Http\Controllers;
use App\Models\cover ;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class cover_crud extends Controller
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



        $cover=cover::where ($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(1,['id','Cover_Name','cover_title',$page_id]);

        $countcover = count($cover);

    if( $countcover > 0){ 

        return view('Admin.Auth.cover',compact('cover'),[

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
     * @param  \App\Models\cover 
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

        @$href="MainM_ID=$MainM_ID&Edit_cover=Edit_cover&page_id=$page_id";
                            
            @$FILENAME= $this -> saveImage($request -> upload ,'Front/IMG/');
          
       
        if(!empty($MainM_ID)){

              echo  "<script>   alert('Data send success'); </script>";

            cover::create([
    
                'cover_title' =>$request->cover_title,

                $page_id =>  $request->MainM_ID,

                'Cover_Name'=>$FILENAME    
                
                ]);


return redirect()->route('cover.index',[$href])->with('success','update  sent  succefuly');

            }


    }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\cover 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,cover $coveritem)
    {
           
        @$cover_ID= $request->cover ;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        $coverD=cover::where ('id',$cover_ID)->where($page_id,$MainM_ID)->get();

        $countcover = count($coverD);

        if( $countcover > 0){ 
    
            return view('Admin.Auth.cover',compact('coverD'),[
             
                'coverID' =>  $MainM_ID   ,
                
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
     * @param  \App\Models\cover 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,cover $coveritem)
    {

        echo  "<script>   alert('Data updated success'); </script>";


        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_cover=Edit_cover&page_id=$page_id";

                    
          
            if(!empty($request -> upload)){

                @$FILENAME= $this -> saveImage($request -> upload ,'Front/IMG/');



                cover::where('id',$request->cover)->update([   
                    
                    'Cover_Name' =>  $FILENAME, 
       
                    'cover_title' =>$request->cover_title,
    
                    'cover_Desc' => $request->coverDesc,
    
                    'Ar_title'=>$request->Ar_title,  
    
    
                    'Ar_Desc'=>$request->Ar_Desc,  
    
     
                    $page_id =>  $request->MainM_ID,
    
                    
    
                    
                    
               ] );
    
             }else{
    
                cover::where('id',$request->cover)->update([    
       
                    'cover_title' =>$request->cover_title,
    
                    'cover_Desc' => $request->coverDesc,
    
                    'Ar_title'=>$request->Ar_title,  
    
    
                    'Ar_Desc'=>$request->Ar_Desc,  
    
     
                    $page_id =>  $request->MainM_ID,
    
                    
    
                    
                    
               ] );
    
    
                }


          


return redirect()->route('cover.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\cover 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,cover $coveritem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->cover;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_cover=Edit_cover&page_id=$page_id";

cover::where('ID',$ID)->Delete();

return redirect()->route('cover.index',[$href])->with('success','update  sent  succefuly');



    }
}
