<?php

namespace App\Http\Traits;

Trait UploadImg3
{
  

 function saveImage3($path,$folder){

    //$path= $request -> IMG;  ->  $photo
          
    $filename= $path->getClientOriginalExtension();
    
    $FILENAME=time().'.'.$filename;
    
   // $dir='IMG/';  -> folder 

    $dir=$folder; 
    
    $path->move($dir,$FILENAME3);

  return $FILENAME;

}


}



?>