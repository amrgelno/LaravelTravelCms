<?php

namespace App\Http\Controllers;
use App\Models\box;
use Illuminate\Http\Request;

class filterboxoption extends Controller
{

    function Reteriveoption(Request $request){


        $colsel=$request->colsel;

$box=box::where('cat_type',$colsel)->get();
        
        $countbox=count($box);
        

        if($countbox>0){
        
        
for ($i = 1; $i<=1; $i++)    {

 
    foreach($box as  $boxitem ){
      
        ?>



   <option   value='<?php echo  $boxitem->title    ?>'>   <?php echo  $boxitem->title     ?> </option> 
   
    
    <?php
    


    }




    
}
        }else{


echo'No data found ';
    }



    }



}