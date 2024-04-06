<?php

namespace App\Http\Controllers;

use App\Models\box;

use Illuminate\Http\Request;

class webmap extends Controller{
    
    public function site(Request $request){

$box=box::where('nav_id',1)->get();


            return view('/layouts.Front.SEO Markups.site_map',compact('box'));
           
           

    }


}

?>



