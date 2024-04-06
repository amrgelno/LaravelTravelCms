<?php

namespace App\Http\Controllers;
use App\Models\view;
use App\Models\seo;
use Illuminate\Http\Request;

class QuikEditstyle extends Controller
{
   

    public function updateview(Request $request)
    {

    $view=view::whereRaw("ID = (select Max(id) from view )")->get();  


foreach($view as  $viewitem){

  $ID=$viewitem->ID;
}


$SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

    foreach ($SEO as $SEOitem){

     $Domain_site = $SEOitem-> Domain_site ; 
    

    }


    if(isset($request['ulcolor'])){

    view::where('ID', $ID)->update([    
       
        'ulcolor'=> $request->ulcolor,
  
        
   ]);

    }elseif(isset($request['Fontcolor'])){

        view::where('ID', $ID)->update([    
       
           
            'Fontcolor' => $request->Fontcolor,
            
            
       ]);



}elseif(isset($request['sub1color'])){


    view::where('ID', $ID)->update([    
       
        
        'sub1color'=>$request ->sub1color,
        'sub2color'=>$request ->sub1color,
        
   ]);


    }elseif(isset($request['Footercolor'])){


        view::where('ID', $ID)->update([    
           
            
            'Footercolor'=>$request ->Footercolor,
            
       ]);

    }

}
}