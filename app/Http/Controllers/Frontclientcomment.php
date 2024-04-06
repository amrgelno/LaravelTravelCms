<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\client_comment;
use Illuminate\Http\Request;

class Frontclientcomment extends Controller{
   
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
        'Client_POST' => ['required', 'string', 'max:500'],
    ]);
}


    public function client_req(request $request){

        client_comment::create([
   
            'username' =>$request['Yourname'],
            'email' => $request['email'],
            'Client_POST' =>$request['comment'],
            'status'=>'DisActive'
        
           ]);


           return redirect()->route('index');

    }




    public function index(){

        $clientscomment=client_comment::paginate(5,['ID','avatar','username','email','Client_POST','status']);

        $countclient_commentsreq = count($clientscomment);

    if( $countclient_commentsreq  > 0){ 

        return view('Admin.Auth.Clientcomment',compact('clientscomment'));

    }else{

       echo'لايوجد محتوى حتى الان';


    }

    }

    
    public function updatecommentstatus(request $request){


        client_comment::where('ID',$request->ID)->update([    
       
            'status'=>$request->status,
            
            
    
            
       ] );



       return redirect()->route('client_comment');



    }



}
