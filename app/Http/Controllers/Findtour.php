<?php

namespace App\Http\Controllers;
use App\Models\box;
use Illuminate\Http\Request;

class Findtour extends Controller
{

function Reterivetours(Request $request){

$filter=$request->filter;

$colsel=$request->colsel;

$ID=$request->ID;

$lang=$request->lang;


  if(empty($colsel)){      //sortfilter for the box


 if($filter== 'price_desc'){

                $colsel='price';

                 $box=box::where('nav_id',$ID)->orderBy($colsel,'desc')->get();


            //echo $filter ;


            }elseif($filter== 'price_asc'){


                $colsel='price';


                $box=box::where('nav_id',$ID)->orderBy($colsel,'asc')->get();


            //echo $filter ;


                }elseif($filter== 'dur_desc'){

                    $colsel='Duration';

                    $box=box::where('nav_id',$ID)->orderBy($colsel,'desc')->get();


                //    echo $filter ;

                }else{

                    $colsel='Duration';


                 $box=box::where('nav_id',$ID)->orderBy($colsel,'asc')->get();

                   // echo $filter ;



                }



            }elseif($colsel=='price'){      //left_filter_all   price filter

$boxMin=box::where('nav_id',1)->where('class','filteroption1')->whereRaw("price = (select Min(price)from boxes where cat_type='Price')")->get();


foreach($boxMin as  $boxMinitem ){

$Minbox=$boxMinitem->price;


}

$boxMax=box::where('nav_id',1)->where('class','filteroption1')->whereRaw("price = (select Max(price)from boxes where cat_type='Price')")->get();


foreach($boxMax as  $boxMaxitem ){

$Maxbox=$boxMaxitem->price;



}

if ($filter == $Minbox ){



$box=box::where('price','<',$Minbox)->where('nav_id',$ID)->get();



}elseif($filter == $Maxbox ){



$box=box::where('price','>',$Maxbox)->where('nav_id',$ID)->get();



}else{    //  left_filter_all    for all Ajax cases


$box=box::where('price','>',$Minbox)-> where('price','<',$Maxbox)->where('nav_id',$ID)->get();


}


}else{



if(isset($ID)){


$box=box::where($colsel,$filter)->where('nav_id',$ID)->get();


}else{


$box=box::where($colsel,$filter)->get();     // Destinations Filter


}

}

$countbox=count($box);


if($countbox>0){


for ($i = 1; $i<=1; $i++)    {


foreach($box as  $boxitem ){

?>



 <div class="card col-lg-3"
style="background-image: url(./Front/IMG/<?php echo $boxitem ->ImageName ?>); background-size: cover;"
data-src="Front/IMG/<?php echo $boxitem ->ImageName ?>">


    <div class="content">
      <h2 class="title">

      <?php if( empty ($lang) ) {


echo $boxitem -> title  ;

}
elseif($lang =='ar'){

echo $boxitem ->  Ar_title   ;

} ?>
                   </h2>

      <p class="copy">


<?php if( empty ($lang) ) {


echo  $boxitem -> Desc ;

}
elseif($lang =='ar'){

echo    $boxitem -> Ar_Desc ;

} ?>

                  </p>

                  <div class="programBox_days">
    <?php echo $boxitem -> 	DayTime ?> </div>




                             <button class="btn"><a href="index.php?box_ID=173&amp;lang=">
                   <a href="index.php?box_ID=<?php echo $boxitem ->ID ?>">
                  View tours </a> </button>



  </div>

</div>


<?php



}





}
}else{


echo'No data found ';
}

























}
























}
