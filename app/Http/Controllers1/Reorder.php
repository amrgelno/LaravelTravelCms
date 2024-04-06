<?php

namespace App\Http\Controllers;

use App\Models\company ;
use App\Models\orders;
use Illuminate\Http\Request;
use App\Http\Traits\UploadImg;


class Reorder extends Controller{


    public function index(Request $request)
    {


        $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

    foreach ($Maxcompanyid as $companyitem){

      $logo = $companyitem->path_pic ; 
     
     }

        $member_id=$request->member_id;


        $orders=orders::where('sender_id', $member_id)
        ->where('recevier_id','0')->orwhere('sender_id','0')->where('recevier_id', $member_id)->get();


        return view('Admin.Auth.Reorders',compact('orders'),[


        'member_id' =>   $member_id,
        'logo' => $logo,



        ]);

    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $order
     * @return \Illuminate\Http\Response
     */

   // USE UploadImg;   //  use Traits

    public function create(Request $request, orders $orders)
    {
        
       // @$FILENAME= $this -> saveImage($request ->prof_pic,'front/IMG/');
          
      
        orders::create([    
   
            'username'=>$request->username,
                  
            'profile_IMG'    => $request->profile_IMG,

            'sender_id' =>$request->sender_id, 

            'recevier_id' =>$request->recevier_id,

            'bg_color' => $request->bg_color,
            
            'DIR' => $request->DIR,

            'massage' => $request->orders,

            'Time' =>now(),
         
       ] );


return redirect()->route('member.Dashboard')->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,order $order)
    {
        
        order::where('ID',$request->prof_id)->Delete();
        return redirect()->route('member.Dashboard')->with('success','Deleted  succefuly');

    }
}
