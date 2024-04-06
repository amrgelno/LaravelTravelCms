<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;
use App\Http\Traits\UploadImg;


class orders_crud extends Controller{
   

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
          
      $sender_id= $request->sender_id;


        orders::create([    
   
            'username'=>$request->username,
                  
            'profile_IMG'    => $request->profile_IMG,

            'sender_id' =>$sender_id, 

            'recevier_id' =>$request->recevier_id,

            'bg_color' => $request->bg_color,
            
            'DIR' => $request->DIR,

            'massage' => $request->orders,

            'Time' =>now(),
         
       ] );

if( $sender_id==0){

    return redirect()->route('Client_orders')->with('success','your orders  sent  succefuly');
}else{
return redirect()->route('member.Dashboard')->with('success','your orders  sent  succefuly');
}

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
