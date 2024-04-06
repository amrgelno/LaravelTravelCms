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
   <meta name="csrf-token"  content="{{csrf_token()}}"/>      {{--     ajax meta   --}}
   <script src="{{asset('Front/JS/jquery-1.11.0.min.js') }}"  type="text/javascript"  defer></script>

    <title>static_Anaylsis</title>
</head>
<style>

.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
    background:white;
}

.pagination > li {
    display: inline;
    padding: 10px 20px 5px 20px;
    border:1px dotted #000;
}

.pagination > li:active {
   color:black;
}



li{

    list-style: none;
}
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

<body onload='loadpg();'>

<h1> *  General Analysis </h1>

<div id="Box-Anyltics" >

<div class="Box-Anyltics" style="background-color:#FF0;" align='center'> 
<img src="http://{{$Domain_site}}/Front/ICON/Add-Male-User.png" width="25px" height="20px" />USERS: <span class="Number_static">
 {{$users}}</span></div>


<div class="Box-Anyltics" style="background-color:#99F;" align='center'>
 <img src="http://{{$Domain_site}}/Front/ICON/add_link-128.png" width="25px" height="20px" /> Indexed_Link:<span class="Number_static">
{{$nav}} </span></div>


<div class="Box-Anyltics" style="background-color:#0FF;" align='center'>
 <img src="http://{{$Domain_site}}/Front/ICON/add_link-128.png" width="25px" height="20px" />External_Link:<span class="Number_static">
{{$sociallink}} </span></div>

<div class="Box-Anyltics" style="background-color:#93C;" align='center'> <img src="http://{{$Domain_site}}/Front/ICON/kontact.png" width="25px" height="20px" />categories:<span class="Number_static">
{{$box}} </span></div>

<div class="Box-Anyltics" style="background-color:#06C;" align='center'> <img src="http://{{$Domain_site}}/Front/ICON/seo2-91-128.png" width="25px" height="20px" />Keywords:<span class="Number_static">
{{$Keyword}} </span></div>

</div>




<br>
<br>

<h1> * Web Visitor / Client Analysis </h1>


<div id="Box-Anyltics" >

<div class="Box-Anyltics" style="background-color:#FF0;" align='center'> 
<img src="http://{{$Domain_site}}/Front/ICON/Add-Male-User.png" width="25px" height="20px" />Visitor: <span class="Number_static">
 {{$countvisitor}}</span></div>


<div class="Box-Anyltics" style="background-color:#99F;" align='center'>
 <img src="http://{{$Domain_site}}/Front/ICON/add_link-128.png" width="25px" height="20px" /> visitedlink:<span class="Number_static">
{{$countvlink}} </span></div>


<div class="Box-Anyltics" style="background-color:#0FF;" align='center'>
 <img src="http://{{$Domain_site}}/Front/ICON/add_link-128.png" width="25px" height="20px" />Client:<span class="Number_static">
{{$client}} </span></div>

<div class="Box-Anyltics" style="background-color:#93C;" align='center'> <img src="http://{{$Domain_site}}/Front/ICON/kontact.png" width="25px" height="20px" />clientrequest:<span class="Number_static">
{{$client_req}} </span></div>

<div class="Box-Anyltics" style="background-color:#06C;" align='center'> <img src="http://{{$Domain_site}}/Front/ICON/seo2-91-128.png" width="25px" height="20px" />member:<span class="Number_static">
{{ $countmember}} </span></div>

</div>





<h1> * Web Visitor Report  </h1>

<div class="card-body">
    <div class='card card-primary card-outline'>

    <div class="table-responsive col-lg-7">
    <table  border="1"  class="table table-responsive "  style='background:#000000b8;'>

    <tr>
<td> ID  </td>
<td>  vlinktype   </td>
<td> IP_Address  </td>
<td>  vlink   </td>
<td> country  </td>
<td> Devices  </td>
<td> time       </td>
</tr>




@foreach(  $visitors  as  $visitor)

<tr>
<td>   {{$visitor->id}}  </td>    
<td> {{$visitor->vlinktype}}   </td>
<td> {{$visitor->IP_Address}}  </td>
<td> <a href='{{$visitor->vlink}}' style='color:white'> {{$visitor->vlink}} </a></td>
<td> {{$visitor->country}}    </td>
<td> {{$visitor->Devices}}          </td>
<td> {{$visitor->time}}          </td>
</tr>

@endforeach





</div>
</div>

</div>

</table>
{{$visitors->render('Admin.Auth.paginate')}}



<h1> *  leads search Queries    </h1>

<div class="card-body">
    <div class='card card-primary card-outline'>

    <div class="table-responsive col-lg-7">
    <table  border="1"  class="table table-responsive "  style='background:#000000b8;'>

    <tr>
<td> ID  </td>
<td> KEYWORDS  </td>
<td> KW-Results       </td>
</tr>


@foreach(  $search  as  $searchitem)

<tr>
<td>   {{$loop->iteration}}  </td>    
<td id='TargetedKeyword{{$loop->iteration}}'> {{$searchitem->TargetedKeyword}}  </td>
<td id='countRes'> {{$searchitem->where('TargetedKeyword',$searchitem->TargetedKeyword)->count('TargetedKeyword')}}   </td>
</tr>

@endforeach


</div>
</div>

</div>

</table>
{{$search->render('Admin.Auth.paginate')}}


</body>
</html>




