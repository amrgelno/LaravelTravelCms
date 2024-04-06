<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Front/CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
   <link href="../Front/CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
   <link href="../Front/CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
   <link href="../Front/CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
    <title>Job_Request</title>
</head>
<style>

   #Box-Anyltics{ 
   display:flex;
    flex:2; 
    flex-flow: row;
   }
    .Box-Anyltics {
    width:30%;
    margin-left: 18px;
    padding: 20px;
    /* padding-top: 10px; */
    border: 3px double #006;
    border-radius: 5px;
    color: #F90;
    font-weight: bolder;
   
}

</style>

<body>
<h1> * all job request Report from job form   </h1>

<div id="Box-Anyltics" >

<div class="card-body">
    <div class='card card-primary card-outline'>

    <div class="table-responsive col-lg-7">
    <table  border="1"  class="table table-responsive ">

    <tr>

<td>  #   </td>
<td> username  </td>
<td>  email   </td>
<td> subject  </td>
<td>cv</td>
<td>comment</td>



</tr>

@php   $i=0;   @endphp

@foreach($jobreqs  as  $jobreq)

<tr>
<td> {{++$i}}     </td>
<td> {{$jobreq->username}}  </td>
<td> <a href='mailto:{{$jobreq->email}}'> {{$jobreq->email}}  </a> </td>
<td> {{$jobreq->subject}}   </td>
<td> <a href='../Front/cv/{{$jobreq->cv}}'> <img src='../Front/cv/{{$jobreq->cv}}' width='150px' height='50px'>  </a> </td>
<td> {{$jobreq->comment}}   </td>


</tr>

@endforeach
</div>
</div>

</div>
</table>

{{$jobreqs->render('Admin.Auth.paginate')}}


</body>
</html>



