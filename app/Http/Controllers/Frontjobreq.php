<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\jobreq;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class Frontjobreq extends Controller{
   
   /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    protected function validator(array $data)
    {
    return Validator::make($data, [
        'username' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'subject' => ['required', 'string', 'max:500'],
        'comment'=>['required', 'string', 'max:500']
    ]);
}



USE UploadImg;   //  use Traits

    public function client_req(request $request){


        if(!empty($request -> uploadcv)){
       
            @$FILENAME= $this -> saveImage($request -> uploadcv ,'Front/cv/');
        
        }else{
        
            @$FILENAME='Null';
        
        }


        jobreq::create([
   
            'username' =>$request['volunteer-name'],
            'email' => $request['volunteer-email'],
            'subject' =>$request['volunteer-subject'],
            'cv' =>$FILENAME,
            'comment' =>$request['volunteer-message']
           ]);


           return redirect()->route('index');

    }





    public function index(){

        $jobreqs=jobreq::paginate(5,['ID','username','email','subject','cv','comment']);

        $countjobreq = count($jobreqs);

    if( $countjobreq > 0){ 

        return view('Admin.Auth.jobreq',compact('jobreqs'));

    }else{

       echo'لايوجد محتوى حتى الان';


    }

    }


}
