<?php

namespace  App\Http\Controllers\member\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\member;
use App\Models\orders;
use App\Models\member_pr;
use App\Models\fav_product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('checkdata');   // middleware for  /member/Dashboard Route  when user logout
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


       
@$member=auth::guard('member');

@$member_id=auth::guard('member')->user()->id;

$cart=member_pr::leftJoin
('fav_product' , 'member_pr.id' , '=', 'fav_product.PROD_ID')
->where('member_id', $member_id)->get();


$orders=orders::where('sender_id', $member_id)->where('recevier_id','0')->orwhere('sender_id','0')->where('recevier_id', $member_id)->get();


    if (!empty($cart)){

        $cart;

    }else{

        $cart=0;

    }


   

        return view('member.auth.dashboard',compact('member','cart','orders'));







    }
}
