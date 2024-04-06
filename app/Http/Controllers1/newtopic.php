<?php

namespace App\Http\Controllers;
use App\Models\nav ;
use App\Models\view ;
use App\Models\seo ;
use Illuminate\Http\Request;

class newtopic extends Controller
{
    
    public function index(Request $request)
    {

        $page_id=$request->MainM_ID;
        $box_id=$request->box_ID;
        $Topic_id=$request->Topic_ID;


        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 



    foreach ($SEO as $SEOitem){

     $Domain_site = $SEOitem-> Domain_site ; 

    }

if(isset($page_id)){


return view('Admin.Auth.newtopic',[
         
    'navID' => $page_id ,
    'Domain_site' => $Domain_site        
    
 ]);


}elseif(isset($box_id)){

    $view=view::whereRaw("ID = (select Max(id) from view )")->get();

    foreach ($view as $viewitem){

      $BusinessModel = $viewitem->BusinessModel ; 
    
     }




    return view('Admin.Auth.newtopic',[
         
        'box_ID' => $box_id ,  
        'BusinessModel' => $BusinessModel ,  //  for Ecommerce product
        'Domain_site' => $Domain_site        
      
        
     ]);


}else{

    return view('Admin.Auth.newtopic',[
         
        'Topic_ID' => $Topic_id ,  
        'Domain_site' => $Domain_site        
      
        
     ]);



}

    


    }
}
