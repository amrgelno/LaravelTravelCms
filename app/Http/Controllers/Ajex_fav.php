<?php

namespace App\Http\Controllers;
use App\Models\fav_product;
use Illuminate\Http\Request;

class Ajex_fav extends Controller
{

function ADD_fav(Request $request){

$Off_id=$request->Off_id;
$IDf=$request->IDf;

$fetchfav=fav_product::where('PROD_ID',$Off_id)->where('member_id',$IDf)->get();

$countfav=count($fetchfav);

if($countfav==null){


fav_product::create([
   
    'PROD_ID' =>$Off_id,
    'member_id' => $IDf,
    'QU' => 0,
    'total' => 0

   ]);

   $fetchmemberfav=fav_product::where('member_id',$IDf)->get();
   $countmemberfav=count( $fetchmemberfav);
   
   echo $countmemberfav;

}

}


function Delfav(Request $request){

    $Off_id=$request->Off_id;
    
    $IDf=$request->IDf;
 
    
    fav_product::where('PROD_ID',$Off_id)->where('member_id',$IDf)->Delete();

    $fetchmemberfav=fav_product::where('member_id',$IDf)->get();
    $countmemberfav=count( $fetchmemberfav);
    
    echo $countmemberfav;
}



function QUtoal(Request $request){

    $quantity=$request->quantity;
    
    $total=$request->total;

    $member_id=$request->member_id;

    $product_id=$request->product_id;
   
fav_product::where('PROD_ID',$product_id)->where('member_id',$member_id)->update([    
       
        'QU'=>$quantity,

        'total'=>$total,
        
   ] );

    $fetchmemberfav=fav_product::where('member_id',$member_id)->get();
    $totalfav_product =$fetchmemberfav->sum('total');     
    
    echo $totalfav_product;
}



}