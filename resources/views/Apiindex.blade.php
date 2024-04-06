<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('Front/css/Uiframework.css') }}" rel="stylesheet"  type="text/css"  >

    <title>ApiIndex</title>

</head>

<style>

.trc{
background: #000;
color:white;
}


.odd{
    background-color:#930;
}
body {
background:rgb(240 242 246);
overflow:unset;
}

tr:nth-child(even){
background:#09C;
color:white;
}


.inputNum{

width:42px;
}

tr:nth-child(even){
background: #21465254;
color:red;
/* box-shadow: inset -1px 1px 20px 0px #000;*/
}

td:nth-child(odd) {
background: #1eff0014;
border-bottom: 2px solid #eceffa;
}

td {
border: 1px solid #ffffff;

}


tr {
border: 2px solid rgb(255, 255, 255);

}


th{
text-align:center;
font-size: 18px;
font-weight: bolder;
height: 50px;
color: #ffc107;
box-shadow: inset -20px 0px 20px 20px #00000078;

}

input[type="text"] {
width: 100px;

}


.input-sm {

border:2px solid #0CF;
}



</style>





<body>
    

<strong><h1>  All page links with Api   </h1></strong>    </div>  

<div class="card-body"  style='background:white;'>
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
    
    <hr/> <br/>



    <div class="table-responsive col-lg-7">


            <table  border="1"  class="table table-responsive ">

            <tr scope="col">  <td row='10'>  linK Type   </td>  <td row='80'>  Nav linK    </td>  </tr>

<tr class="trc"  align='center'>
<td scope="col">ID</td>
<td scope="col">Links</td>
<td scope="col">Api</td>
<!--<td scope="col">Relation</td>-->

  </tr>

  @php   $i=0;   @endphp


  @foreach(  $nav    as   $navitem     )


  <tr>


<td scope="col">{{++$i}} </td>
<td scope="col">     <a  href="http://{{$Domain_site}}/index.php?MainM_ID=<?php echo $navitem->id;?>" target='_blank'>
{{$navitem->sub1menu}}</a></td>
<td scope="col"> <a    href="http://{{$Domain_site}}/jasonlayoutfx?MainM_ID=<?php echo $navitem->id;?>" target='_blank'>jasoncode</a></td>


</tr>


@endforeach


</div>
<div>









<div class="card-header" style="text-align:center;">      
    <hr/> <br/>


    @php   $i=0;   @endphp

    <div class="table-responsive col-lg-7">


            <table  border="1"  class="table table-responsive ">

            <tr scope="col">  <td row='10'>  linK Type   </td>  <td row='80'>  Box linK    </td>  </tr>

<tr class="trc"  align='center'>
<td scope="col">ID</td>
<td scope="col">Links</td>
<td scope="col">Api</td>
<!--<td scope="col">Relation</td>-->

  </tr>



  @foreach(  $box    as   $boxitem     )

  <tr>


<td scope="col">{{++$i}} </td>
<td scope="col">     <a    href="http://{{$Domain_site}}/index.php?box_ID=<?php echo $boxitem->ID;?>" target='_blank'>
{{$boxitem->title}}</a></td>
<td scope="col"> <a    href="http://{{$Domain_site}}/jasonlayoutfx?box_ID=<?php echo $boxitem->ID;?>" target='_blank'>jasoncode</a></td>


</tr>



@endforeach


</div>
<div>








<div class="card-header" style="text-align:center;">      
    <hr/> <br/>


    @php   $i=0;   @endphp

    <div class="table-responsive col-lg-7">
            <table  border="1"  class="table table-responsive ">
            <tr scope="col">  <td row='10'>  linK Type   </td>  <td row='80'>  Topic linK    </td>  </tr>

<tr class="trc"  align='center'>
<td scope="col">ID</td>
<td scope="col">Links</td>
<td scope="col">Api</td>
<!--<td scope="col">Relation</td>-->

  </tr>



  @foreach(  $topic    as   $topicitem     )

  <tr>


<td scope="col">{{++$i}} </td>
<td scope="col">     <a    href="http://{{$Domain_site}}/index.php?Topic_ID=<?php echo $topicitem->id;?>" target='_blank'>
{{$topicitem->subject}}</a></td>
<td scope="col"> <a    href="http://{{$Domain_site}}/jasonlayoutfx?Topic_ID=<?php echo $topicitem->id;?>" target='_blank'>jasoncode</a></td>


</tr>


@endforeach


</div>
<div>


</body>
</html>