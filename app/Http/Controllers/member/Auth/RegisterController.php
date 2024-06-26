<?php

namespace App\Http\Controllers\member\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\member;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
  //  protected $redirectTo = RouteServiceProvider::Dashboard;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\member
    //  *  @param  \Illuminate\Http\Request  $data
     *@return \Illuminate\Http\Response
     */
    protected function reg(Request $data)
    {

        $member=member::where('email', $data->email )->get();
       
        $Count_member= count($member);

        if( $Count_member==1){

            // echo"<script> alert ('your email in DB') </script>";
            // echo  '<meta http-equiv="refresh"  content="1,url=/member/Log_in " />';

            return redirect()->route('member.register')
            ->with('success ','your email in DB');        

        }else{   
        
        member::create([

            'username' => $data->name,
            'email'    => $data->email,
            'remember_token'    => base64_encode($data->password),
            'mobile'   => $data->Mobile,
            'Distantion' => $data->Distantion,
            'country' => $data->country,
            'password' => bcrypt($data->password),             
            //'password' => Hash::make($data->password),
        ]);


    //     return redirect()->route('member.Login')
    // ->with('success ','reg success');
    
    echo"<script> alert ('you have been reg') </script>";


    return redirect()->route('member.Login');


}
    }
    public function showRegistrationForm()
    {
        return view('member.Auth.register');
    }

    protected function guard()
    {
        return Auth::guard("member");
    }

}
