<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\client_req;
use Illuminate\Http\Request;

class Frontclientreq extends Controller{
   
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
        'nationality' => ['required', 'string', 'email', 'max:255'],
        'UserPhone' => ['required', 'string', 'Mobile', 'max:255'],
        'Client_POST' => ['required', 'string', 'max:500'],
    ]);
}


    public function client_req(request $request){



        $phone_ext =$request['phone_ext'];
        $UserPhone =$request['UserPhone'];
        $arrival=$request['arrival'];
        $departure=$request['departure'];




if($request->budget){


    $budget=$request['budget'];


}else{



    $budget=Null;


}





if($request->product_item){


    $inqueryfor=$request['product_item'];


}else{



    $inqueryfor=Null;


}


  


        client_req::create([


            'username' =>$request['title'].$request['username'],
            'email' => $request['UserEmail'],
            'Nationality' =>$request['nationality'],
            'Mobile' => $phone_ext.$UserPhone,
            'FromTo' => 'arrival'.$arrival.'departure'.$departure,
            'inqueryfor'=>$inqueryfor,
            'Adults' =>$request['adults'],
            'Children' =>$request['children'],
            'Infants' =>$request['infants'],
            'flight' =>$request['departure_airport'],
            'Budget' =>$budget,
            'Client_POST' =>$request['comment'],
        
           ]);


           return redirect()->route('index');

    }








}
