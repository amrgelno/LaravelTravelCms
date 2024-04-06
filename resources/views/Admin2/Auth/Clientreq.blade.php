<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://{{$Domain_site}}/Front/CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
   <link href="http://{{$Domain_site}}/Front/CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
   <link href="http://{{$Domain_site}}/Front/CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
   <link href="http://{{$Domain_site}}/Front/CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
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
<td> Nationality  </td>
<td> Mobile  </td>
<td> Email  </td>

<td>  FromTo   </td>
<td>  inqueryfor   </td>
<td> Adults  </td>
<td>  Children   </td>
<td> Infants  </td>
<td> flight  </td>
<td> Budget  </td>
<td> Client_POST  </td>

</tr>

@php   $i=0;   @endphp

@foreach($clients  as  $client)

<tr>
<td> {{++$i}}     </td>
<td> {{$client->username}}  </td>
<td> {{$client->Nationality}}  </td>
<td> {{$client->Mobile  }}  </td>
<td> <a href="{{$client->email}}">  {{$client->email}}    </a>  </td>
<td> {{$client->FromTo}}  </td>
<td> {{$client->inqueryfor}}  </td>
<td> {{$client->Adults}}  </td>
<td> {{$client->Children}}  </td>
<td> {{$client->Infants}}  </td>
<td> {{$client->flight}}  </td>
<td> {{$client->Budget}}  </td>
<td>  {{$client->Client_POST}}   </td>

</tr>

@endforeach
</div>
</div>

</div>
</table>


</body>
</html>



