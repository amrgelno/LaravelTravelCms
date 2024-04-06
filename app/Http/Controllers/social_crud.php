<?php

namespace App\Http\Controllers;
use App\Models\social ;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class social_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $socials=social::orderBy('id')->paginate(4,['id','social_icon','links']);
        $countsocial = count($socials);

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){

            $Domain_site = $SEOitem-> Domain_site ; 
       
           }

    if( $countsocial > 0){ 

        return view('Admin.Auth.social',compact('socials'),[

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
     * @param  \App\Models\social 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {       


 @$href="Edit_social=Edit_social";
                            
 @$FILENAME= $this -> saveImage($request -> socialicon ,'Front/IMG/');
          
       
              echo  "<script>   alert('Data send success'); </script>";

            social::create([

                'social_icon'=>$FILENAME,
                 'links'=>  $request->url

                
                ]);


return redirect()->route('social.index',[$href])->with('success','update  sent  succefuly');

            }



    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\social 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,social $socialsitem)
    {
             
        $socials=social::where ('id',$request->social)->get();

        $countsocial = count($socials);

        if( $countsocial > 0){ 
    
            return view('Admin.Auth.social',compact('socials'));
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
     * @param  \App\Models\social 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,social $socialsitem)
    {

        echo  "<script>   alert('Data updated success'); </script>";

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="Edit_social=Edit_social";

                    

        if(!empty($request -> socialicon)){


       @$FILENAME= $this -> saveImage($request -> socialicon ,'Front/IMG/');

       social::where('id',$request->social)->update([    
       
        'social_icon'=>$FILENAME,
        'links'=>  $request->url,
   
   ] );
          
    }else{


        social::where('id',$request->social)->update([    
       
            'links'=>  $request->url,
                 
    
       ] );


    }




return redirect()->route('social.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\social 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,social $socialsitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        @$href="Edit_social=Edit_social";

social::where('ID',$request->social)->Delete();

return redirect()->route('social.index',[$href])->with('success','update  sent  succefuly');



    }
}
