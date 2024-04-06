<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;
use App\Models\company;
use App\Models\seo;
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

    $this->redirectTo =route('user.Dashboard');
// // // //        $this->redirectTo =route('u.dashboard');
// // // //      //   $this->redirectTo =route('Admin.index');   // dashboard  with   crud
      $this->middleware('guest')->except('logout');   // middleware for login
    }

   public function showLoginForm(request $request)
     {


$userreg=Admin::where('email',base64_decode($request->QR))->get();


if(count($userreg)==1){

        $admin=Admin::where( 'User_Role' , 'Admin')->get();

        $Count_admin= count($admin);

        if( $Count_admin==1){


          $admin='true';


        }

    $company=company::whereRaw("ID = (select Max(id) from companies )")->get(); 



        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){
    
            $Domain_site = $SEOitem-> Domain_site ; 
       
           }


         return view('Admin.Auth.login',compact('admin','company'),[


          'Domain_site'=>$Domain_site ,
          'admin'=>$admin

         ]);


        }else{



          echo"No Access To  Iframe_Log_in for You";


        }


    }




     public function customLogin(Request $request)
     {

      $credentials = $request->validate([
    'email' => 'required',
         'password' => 'required',
      ]);

if (Auth::guard('admin')->attempt($credentials)) {

     $request->session()->regenerate();

     return redirect()->route('user.Dashboard');


        }

return redirect("/admin/Log_in")->withSuccess('Login details are not valid');

  return redirect()->route('Admin.Login')
   ->with('Success','The provided credentials do not match our records');    // false return to login */


     }


    

//       public function login(Request $request)
//     {

//         $emailhint=$request->email;

//         // $passhint= $request->password;

//         $passhint= Hash::make ($request->password);

//     //    $us/*  */er=Admin::where('email', '=' , $emailhint)->first();


//         $Admins=Admin::where([['email', $emailhint],['password',$passhint]])->get();
//        $countadmins = count($Admins);


//        if(  $countadmins ==  1 ){




//             return view('/link',compact('Admins'));





//          }

//       return back()
//         ->with('fail ','username or password dont match our records');

// // // // return redirect()->route('nav')
// // //     //  ->with('success','loading   Dashboard   succefuly');

//     }

    protected function guard()
    {
        return Auth::guard('admin');
    }



}
