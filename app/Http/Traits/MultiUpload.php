<?php

namespace App\Http\Traits;

Trait MultiUpload
{
  

 function saveImage($path,$folder){

    //$path= $request -> IMG;  ->  $photo
          
    $filename= $path->getClientOriginalExtension();
    
    $FILENAME=time().'.'.$filename;
    
   // $dir='IMG/';  -> folder 

    $dir=$folder; 
    
    $path->move($dir,$FILENAME);

  return $FILENAME;

}


}



?>