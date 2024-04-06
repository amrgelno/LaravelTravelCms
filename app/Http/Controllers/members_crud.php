<?php

namespace App\Http\Controllers;

use App\Models\member;      //->members_crud
use App\Models\orders;     //->members_crud
use App\Models\fav_product;
use Illuminate\Http\Request;
use App\Http\Traits\UploadImg;


class members_crud extends Controller{
   


    public function index(Request $request, member $member)
    {

        $memberorders=member::leftJoin
        ('orders' , 'members.id' , '=', 'orders.sender_id')->where('orders.username','!=',Null)->get();

        return view('Admin.Auth.clientorders',compact('memberorders'));

    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function update(Request $request, member $member)
    {
        
        @$FILENAME= $this -> saveImage($request ->prof_pic,'front/IMG/');
          
      
        member::where('ID',$request->prof_id)->update([    
   
            'username'=>$request->username,
                  
            'remember_token'    => base64_encode($request->password),

            'password' => bcrypt($request->password), 

            'mobile' =>$request->mobile,

            'Distantion' => $request->Distantion,
            
            'country' => $request->country,

            'mobile' => $request->mobile,

            'prof_pic' => $FILENAME,

            //'cover_pic' =>$request->cover_pic,

            'facebook' => $request->facebook,


            'instgram' => $request->instgram,


            'olx' => $request->olx,


            'visa' => $request->visa
            
       ] );


return redirect()->route('member.Dashboard')->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,member $member)
    {
        
        member::where('ID',$request->prof_id)->Delete();
        return redirect()->route('member.Dashboard')->with('success','Deleted  succefuly');

    }
}
