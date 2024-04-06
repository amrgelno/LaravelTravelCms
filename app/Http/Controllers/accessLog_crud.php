<?php

namespace App\Http\Controllers;
use App\Http\Traits\UploadImg;
use App\Models\Admin;
use App\Models\seo ;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Crypt;

class accessLog_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * 
     */
    public function index()
    {



        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){
    
            $Domain_site = $SEOitem-> Domain_site ; 
       
           }

       
       $Admin=Admin::all();   
    

        $countAdmin = count($Admin);

        if( $countAdmin > 0){ 
    

                            
             return view('Admin.Auth.accessLog',compact('Admin'),[
             
                'Domain_site' => $Domain_site

             ]);

             //->with('Admin',$Admin) = compact ('Admin')

        }else{
    
    
           echo'لايوجد بيانات مسجلة';
    
    
    
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
















    }

   /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\Admin 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {
    


        $profilepic=$request->profilepic;

        if(!empty($profilepic)){
       
            @$FILENAME=$this ->saveImage($profilepic ,'Front/IMG/');
        
        }else{
        
            @$FILENAME=' ';
        
        }


        Admin::where( 'id', $request->ID )->update([
           
 
             'pic'=>$FILENAME,


             'token' =>base64_encode($request->token),
 
 
             'password' => bcrypt($request->token)
 
 
           ]);
 
 return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');
       

         

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    USE UploadImg;   //  use Traits

    
    public function edit($id)
    {







    }

    /**
     * Update the specified resource in storage.
     *@param \App\Models\Admin
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Admin $Admins)
    {


 Admin::where( 'id', $request->ID )->update([
           
           'User_Role' =>$request->SelectRole,

            'token' =>base64_encode($request->token),


            'password' => bcrypt($request->token)


          ]);

return redirect()->route('accessLog.index')->with('success','update  sent  succefuly');

    }

     /**
     * Remove the specified resource from storage.
     * @param  
     * @param  \App\Models\Admin 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function destroy(Request $request,Admin $Admins)    {


                

        
        Admin::where( 'id', $request->ID )->Delete();


        return redirect()->route('accessLog.index')->with('success','Delete succefuly');


       }



}