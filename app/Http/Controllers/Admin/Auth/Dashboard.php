<?php


namespace  App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\view;
use App\Models\company;
use App\Models\seo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('checkdata');   // middleware for  /admin/Dashboard Route  when user logout
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        //method 1


        // return view('Admin.auth.dashboard');

        //method 2



        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){
    
            $Domain_site = $SEOitem-> Domain_site ; 
       
           }



        $company=company::whereRaw("ID = (select Max(id) from companies )")->get();    

        $countcompany = count($company);

        if( $countcompany > 0){ 
    

            foreach ($company as $companies ) { 

                $comp_Na = $companies->Comp_Name;
                $Business_Type= $companies->Business ;
                $Email= $companies->Email ;
                $streetAddress=$companies->Address;
                $Tax_register= $companies->Tax_register ;
                $Tele_Number= $companies->Tele_Number ;
                $postalCode=$companies->postalCode;
                $fax=$companies->fax ;
                $country=$companies->country ;
                $city=$companies->city;
                $WBDescription=$companies->WBDescription;
                $path_pic=$companies->path_pic;
                
            }
        }




        $view=view::whereRaw("ID = (select Max(id) from view )")->get();
        foreach ($view as $viewitem){
        
            $BusinessModel = $viewitem->BusinessModel ; 
        
           }


        @$Admin=auth::guard('admin');

         return view('Admin.Auth.dashboard',compact('Admin'),[


            'company_name'=> $comp_Na  ,            // return   var->{{$company_name}}
            'Business_Type' => $Business_Type,
            'streetAddress' => $streetAddress,
            'Email'=>$Email,
            'Tax_register'=>$Tax_register,
            'Tele_Number'=>$Tele_Number,
            'fax'=>$fax,
            'country'=>$country,
            'city'=>$city,
            'WBDescription'=>$WBDescription,
            'postalCode'=>$postalCode,
            'path_pic'=> $path_pic,
            'started' => '27/9/2023',

            'Domain_site' => $Domain_site,



            'BSModel'=>$BusinessModel
            

         ]);



    }
}
