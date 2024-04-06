<?php

namespace App\Http\Traits;

Trait Navset
{
  

    function retnav($pagename){
        
        $navs=nav::where('ID',$MainM_ID)->get();
            
            
            foreach ($navs as $nav ) {
            
            $pagename=$nav -> sub1menu;
            
            }
            
                }


}



?>