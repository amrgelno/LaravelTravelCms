<?php

namespace App\Http\Controllers\member\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\member;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
//use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

   protected $redirectTo ;
// //     /**
// //      * Create a new controller instance.
// //      *
// //      * @return void
// //      */


  public function __construct()
   {

    $this->redirectTo =route('member.Dashboard');
// // // //        $this->redirectTo =route('u.dashboard');
// // // //      //   $this->redirectTo =route('member.index');   // dashboard  with   crud
      $this->middleware('guest')->except('logout');   // middleware for login
    }


   public function showLoginForm()
     {
         return view('member.Auth.login');
    }


     public function customLogin(Request $request)
     {

      $credentials = $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);

if (Auth::guard('member')->attempt($credentials)) {

     $request->session()->regenerate();

     return redirect()->route('member.Dashboard');


        }else{

return redirect("/member/Log_in")->withSuccess('Login details are not valid');
        }
  // return redirect()->route('member.Login')
  //  ->with('Success','The provided credentials do not match our records');    // false return to login */


     }


    
    protected function guard()
    {
        return Auth::guard('member');
    }



}
