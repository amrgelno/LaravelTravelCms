<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
<link href="{{asset('Front/css/Uiframework.css') }}" rel="stylesheet"  type="text/css"  >

    <title>Marque</title>
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


li{
    list-style: none;
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

@if(isset($_GET['Edit_marque']) )


<B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>

<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit Marque   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

<FORM  name='Main'  action="{{route('Del_Bulkmarque')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">
            
    <table  border="1"  class="table table-responsive ">
   
     <tr class="trc" align='center'>

    <th scope="col"> #</th>
    <th scope="col">ID</th>
    <th scope="col"> Marquetitle </th>
    <th scope="col"> update </th>
    <th scope="col"><input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> </th>
  </tr>
 
  <tr>
  @php   $i=0;   @endphp

  @foreach($marque  as    $marquehitem     )

  <!-- <td><?PHP echo $marquehitem->id;?></td> -->


  <td> <INPUT TYPE="checkbox" name="checkbox[{{$marquehitem->id}}]"  value="{{$marquehitem->id}}" /> </td>


@csrf
@method('POST')

</FORM>

   <td> {{++$i}}     </td>
         
  <td> {!! $marquehitem -> NEWS  !!}  </td>


 <td><form  action="{{route('marque.show',$marquehitem->id)}}"  method="get">

    @csrf  
             @method('GET')  
    
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $marquehitem->nav_id;?>'/>



<input type="SUBMIT" name="SELECTMarque"  style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/R.png);" title='Editmarque' value>

    </form>

    </td>
    
     <td>
   <div align='center'> 
<form action="{{route('marque.destroy',$marquehitem->id)}}" method="Post">
@csrf
@method('DELETE')

<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $marquehitem->nav_id;?>'/>


<input type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
</tr>
        @endforeach
</table>
{{$marque->render()}}

@elseif(isset($_GET['SELECTMarque']) )

@foreach($marque  as    $marquehitem     )

<form action="{{route('marque.update',$marquehitem->id)}}" method="post" >

@csrf
@method('PUT')

   <!-- <INPUT TYPE='hidden'  name='marqueID'   value='{{ $marquehitem-> id}}'> -->
  

<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $marquehitem->nav_id;?>'/>


<INPUT TYPE='text' name='NewsMarque'  value='{{ $marquehitem-> NEWS }}'/>

	<input type='submit' value='updata'  name='Edit'>
  </form>
  
@endforeach
  

@else


<h1>         لايوجد محتوي حتى الأن </h1>

@endif
</div >
</div >
</div >
</div >
</body>
<script src="{{asset('Front/JS/jquery.min.js')}}" type="text/javascript"  defer></script>

<!-- Bootstrap 4 -->
<script src="{{asset('Front/JS/bootstrap.bundle.min.js')}}" type="text/javascript"  defer></script>

</html>