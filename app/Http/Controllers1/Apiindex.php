<?php



namespace App\Http\Controllers;


use App\Models\nav;

use App\Models\topic;

use App\Models\box;

use App\Models\seo ;


class Apiindex extends Controller{


function index(){


$nav=nav::get();


$topic=topic::get();


$box=box::get();



$SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

    foreach ($SEO as $SEOitem){

     $Domain_site = $SEOitem-> Domain_site ; 
   

    }






return view('/Apiindex'
 ,compact('nav','topic','box'),[


    'Domain_site'=> $Domain_site




 ]);


}



}

?>