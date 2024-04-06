<?php

namespace App\Http\Controllers;
use App\Http\Traits\UploadImg;
use App\Models\view;
use App\Models\seo;
use App\Models\widget;
use Illuminate\Http\Request;

class customize_crud extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

       $view=view::whereRaw("ID = (select Max(id) from view )")->get();  
       
       $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 
       
       $widget=widget::whereRaw("ID = (select Max(id) from widget )")->get(); 

        $countview = count($view);

        if( $countview > 0){ 
    
                
             return view('Admin.Auth.Customize',compact('view','SEO','widget'));



        }else{
    
    
           echo'No data found';
    
    
    
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
     * @param  \App\Models\view
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {
    


if(@$_REQUEST['CustomizeAppearance']){


        echo  "<script>   alert('Data send success'); </script>";

        //@$FILENAME=$this ->saveImage($request->logo ,'front/IMG/');

        // company::create($request->all());


        if(!empty($request -> bgImage)){
       
            @$FILENAME= $this -> saveImage($request -> bgImage ,'front/IMG/');
        
        }else{
        
            @$FILENAME=Null;
        
        }


        view::create([

                'FontType'      =>$request->Fonttype,
                'Fontsize'      =>$request->Fontsize,
                'Fontstyle'     =>$request->Fontstyle,
                'ulcolor'       =>$request->ulcolor,
                'Fontcolor'     =>$request->Fontcolor,
                'width'         =>$request->width,
                'height'        =>$request->height,
                'sub1color'     =>$request->subcolor,
                'sub2color'     =>$request->Dropmenu,
                'font_id'       =>  '1',
                'bgcolor'       =>$request->bgcolor,
                'bg_Image'      =>$FILENAME,
                'headline'      =>$request->headlinefont,
                'container'     =>$request->container,
                'lang'          =>$request->lang,
                'BusinessModel' =>$request->BusinessModel
                ]);

                return redirect()->route('customize.index');   

  
}elseif(@$_REQUEST['SEOCustomize']){


    seo::create([

        'Domain_site'  =>$request->Domainsite,
        'KEYWORDS'     =>$request->KEYWORDS,
        'Breadcrumbs'  =>$request->Breadcrumbs,
        'FAQS'         =>$request->FAQS,
        'schema'       =>$request->schema,
        'Microformats' =>$request->Microformats,
        'Footersitemap'=>$request->Footersitemap,
        'inspect'      =>$request->INSPECT,
        'contentpage'  =>$request->contentpage,
        ]);

        return redirect()->route('customize.index'); 


}elseif(@$_REQUEST['WidgetCustomize']){

    widget::create([

        'socialMediapanel'  =>$request->SocialMedia,
        'share panel'       =>$request->shareMedia,
        'clock'             =>$request->clock,
        'photo Gallery'     =>$request->photoGallery,
        'chatBot'           =>$request->chatBot,
        'Map'               =>$request->Map,
        'contactus'         =>$request->contactus,
        'logo'              =>$request->logo,
        'BrandIcon'        =>$request->BrandIcon,
        'SearchBar'         =>$request->SearchBar,
        'langsection'       => $request->langsection
        

    ]);

    return redirect()->route('customize.index'); 

}
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
