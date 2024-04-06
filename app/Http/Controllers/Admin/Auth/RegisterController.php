<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;
use App\Models\company;
use App\Models\seo;
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Admin
    //  *  @param  \Illuminate\Http\Request  $data
     *@return \Illuminate\Http\Response
     */
    protected function reg(Request $data)
    {

$company=company::whereRaw("ID = (select Max(id) from companies )")->get(); 



        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){
    
            $Domain_site = $SEOitem-> Domain_site ; 
       
           }


        $admin=Admin::where('email', $data->email )->get();
       
        $Count_admin= count($admin);

        if( $Count_admin==1){

            // echo"<script> alert ('your email in DB') </script>";
            // echo  '<meta http-equiv="refresh"  content="1,url=/admin/Log_in " />';

            return redirect()->route('Admin.register')
            ->with('success ','your email in DB');        

        }else{   
        
        Admin::create([
            'username' => $data->name,
            'email' => $data->email,
            'token' => base64_encode($data->password),
            'password' => bcrypt($data->password),             
            //'password' => Hash::make($data->password),
        ]);



          Admin::where( 'id' ,'>', '1')->where('User_Role',Null)->update([
           
            'User_Role' => 'supervisor'


          ]); 


          Admin::where( 'id', '1')->update([
           
            'User_Role' => 'Admin'


          ]);    


    //     return redirect()->route('Admin.Login')
    // ->with('success ','reg success');
    
    echo"<script> alert ('you have been reg & check your inbox to login by QR Number') </script>";


    ?>

 <meta http-equiv='refresh'  content='2,url="https://<?php echo $Domain_site ?>/admin/AcivteLog_in?QR=<?php echo base64_encode($data->email) ?>" ' />

<?php


}
    }
    public function showRegistrationForm()
    {
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


         return view('Admin.Auth.register',compact('admin','company'),[


          'Domain_site'=>$Domain_site ,
          'admin'=>$admin

         ]);
    }

    protected function guard()
    {
        return Auth::guard("admin");
    }

}
