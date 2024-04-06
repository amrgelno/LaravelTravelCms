<?php

namespace App\Http\Controllers;

use App\Models\cover;
use App\Models\paragraph ;
use App\Models\social ;
use App\Models\topic ;
use App\Models\forms ;
use App\Models\Keyword ;
use App\Models\company;
use App\Models\video ;
use App\Models\box;
use App\Models\SNumbers ;
use App\Models\nav ;
use App\Models\marque;
use App\Models\slider;

use Illuminate\Http\Request;

class fx extends Controller
{

    public function index(Request $request){

    $page_id=$request['MainM_ID'];
    $box_id=$request['box_ID'];
    $Topic_id=$request['Topic_ID'];

   if(empty($page_id)  & empty($box_id) & empty($Topic_id) or ($page_id=='1')){

    $cover=cover::where('nav_id',1)->get();

    $box=box::where('nav_id',1)->get();

   $marque=marque::where('nav_id',1)->get();

    $static=SNumbers::where ('nav_id',1)->get();

    $paragraph=paragraph::where ('nav_id',1)->get();

    $Keywords=Keyword::where ('nav_id',1)->get();

   // $company=company::where ('nav_id',1)->get();

    $box=box::where ('nav_id',1)->get();

    $topic=topic::where ('nav_id',1)->get();

  
     $social=social::get();

     //$Maxcompany_id=company::Max('id')->get();

     $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

     $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->get();

     $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->get();

     $slider=slider::where ('nav_id',1)->get();

     $navNullfooter=nav::where('footer',NULL)->get();

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

    $countadmins = count($nav);

   if( $countadmins > 0){

 return view('/index'
 ,compact('nav','nav_sub','nav_subm','cover','Keywords','social','Maxcompanyid','navNullfooter','marque','paragraph','topic','box','sliderMin','sliderMax','slider','static'));


   }

   }elseif($request['MainM_ID']){

    $cover=cover::where('nav_id',$page_id)->get();

    $box=box::where('nav_id',$page_id)->get();

   $marque=marque::where('nav_id',$page_id)->get();

    $static=SNumbers::where ('nav_id',$page_id)->get();

    $paragraph=paragraph::where ('nav_id',$page_id)->get();

   $Keywords=Keyword::where ('nav_id',$page_id)->get();

   // $company=company::where ('nav_id',1)->get();

    $box=box::where ('nav_id',$page_id)->get();

    $topic=topic::where ('nav_id',$page_id)->get();

     $social=social::get();

     $Maxcompany_id=company::Max('id')->get();

      $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

      $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->get();

      $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->get();

      $slider=slider::where ('nav_id',1)->get();

      // $slider=slider::where ('nav_id',$page_id)->get();


     $navNullfooter=nav::where('footer',NULL)->get();

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

    $countadmins = count($nav);

   if( $countadmins > 0){

 return view('/index'
 ,compact('nav','nav_sub','nav_subm','cover','social','Keywords','Maxcompanyid','navNullfooter','marque','paragraph','topic','box','sliderMin','sliderMax','slider','static'));


   }


   }elseif($request['box_ID']){

    $cover=cover::where('box_id',$box_id)->get();

    $box=box::where('box_id',$box_id)->get();

  //  $marque=marque::where('box_id',$box_id)->get();

    $static=SNumbers::where ('box_id',$box_id)->get();

    $paragraph=paragraph::where ('box_id',$box_id)->get();

   $Keywords=Keyword::where ('box_id',$box_id)->get();

   // $company=company::where ('nav_id',1)->get();

    $box=box::where ('box_id',$box_id)->get();

    $topic=topic::where ('box_id',$box_id)->get();

     $social=social::get();

     $Maxcompany_id=company::Max('id')->get();

      $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

      $slider=slider::where('box_id',$box_id)->get();

      $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')-> where('box_id',$box_id) ->get();

      $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')-> where('box_id',$box_id)->get();

     $navNullfooter=nav::where('footer',NULL)->get();

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

    $countadmins = count($nav);

   if( $countadmins > 0){

 return view('/index'
 ,compact('nav','nav_sub','nav_subm','cover','social','Keywords','Maxcompanyid','navNullfooter','paragraph','topic','box','sliderMin','sliderMax','slider','static'));


 
   }




   }elseif($request['Topic_ID']){

    $cover=cover::where('nav_id',$page_id)->get();

    $box=box::where('nav_id',$page_id)->get();

   $marque=marque::where('nav_id',$page_id)->get();

   // $static=SNumbers::where ('nav_id',1)->get();

    $paragraph=paragraph::where ('nav_id',$page_id)->get();

   // $Keyword=Keyword::where ('nav_id',1)->get();

   // $company=company::where ('nav_id',1)->get();

    $box=box::where ('nav_id',$page_id)->get();

    $topic=topic::where ('nav_id',$page_id)->get();

     $social=social::get();


     $Maxcompany_id=company::Max('id')->get();

      $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

      $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->get();

      $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->get();

      $slider=slider::where ('nav_id',1)->get();

     $navNullfooter=nav::where('footer',NULL)->get();

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

    $countadmins = count($nav);

   if( $countadmins > 0){

 return view('/index'
 ,compact('nav','nav_sub','nav_subm','cover','social','Keyword','Maxcompanyid','navNullfooter','marque','paragraph','topic','box','sliderMin','sliderMax','slider'));


   }
   }
}
}
