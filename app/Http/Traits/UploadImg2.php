<?php

namespace App\Http\Traits;

Trait UploadImg2
{
  

 function saveImage2($path,$folder){

    //$path= $request -> IMG;  ->  $photo
          
    $filename= $path->getClientOriginalExtension();
    
    $FILENAME=time().'.'.$filename;
    
   // $dir='IMG/';  -> folder 

    $dir=$folder; 
    
    $path->move($dir,$FILENAME2);

  return $FILENAME;

}


}



?>