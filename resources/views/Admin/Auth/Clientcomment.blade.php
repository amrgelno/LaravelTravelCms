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
    <title>Client_Request</title>
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
<h1> * all client request Report from contact form   </h1>

<div id="Box-Anyltics" >

<div class="card-body">
    <div class='card card-primary card-outline'>

    <div class="table-responsive col-lg-7">
    <table  border="1"  cl1ass="table table-responsive ">

    <tr>

<td>  #   </td>
<td> username  </td>
<td>  email   </td>
<td> Client_POST  </td>
<td> status  </td>




</tr>

@php   $i=0;   @endphp

@foreach($clientscomment  as  $clientcomment)

<tr>
<td> {{++$i}}     </td>
<td> {{$clientcomment->username}}  </td>
<td> <a href='mailto:{{$clientcomment->email}}'>{{$clientcomment->email}}</a>  </td>
<td>  {{$clientcomment->Client_POST}}   </td>
<td>  
  <form action="{{route('updatecommentstatus')}}"   method='POST'>  
      
  @CSRF

<input type='hidden'  value='{{$clientcomment->ID}}'  name='ID'>


<select name='status'> 

    @if(isset($clientcomment->status))
   <option  align='center'>  Select status </option> 
   <option value="Active">   @if(($clientcomment->status)=='Active') current style:- Active @else   Active  @endif </option> 
   <option value="DisActive"> @if(($clientcomment->status)=='DisActive') current style:- DisActive @else   DisActive  @endif  </option> 

   @else
   <option   align='center'>  Select BOX_STYLE </option> 
   <option value="Active"> Active  </option> 
   <option value="DisActive">  DisActive  </option>
 
   @endif

  </select> 

  <INPUT TYPE='submit' name='upcat'  value='update' class='update'/>

</form>

  </td>


</tr>

@endforeach
</div>
</div>

</div>
</table>

{{$clientscomment->render('Admin.Auth.paginate')}}

</body>
</html>



