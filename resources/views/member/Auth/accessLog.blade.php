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

    <title>access_Log</title>
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


<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Admin setting   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

    <div class="table-responsive col-lg-7">
            
    <table  border="1"  class="table table-responsive ">
   

    @php   
        
            $i=0;  
    

    @endphp

     <tr class="trc" align='center'>
    <th scope="col"> #</th>
    <th scope="col">username </th>
    <th scope="col"> email </th>
    <th scope="col"> password </th>
    <th scope="col"> User_Role </th>
    <th scope="col"> pic </th>
    <th scope="col"> Update </th>
    <th scope="col"><input type='submit' value='delete'  name='delete' class='delete'></th>

@foreach($Admin as  $Admins)   
</tr>
<td>   {{++$i}} </td>
<td> {{$Admins->username}}     </td>
<td>  {{$Admins->email}}    </td>
<td> 
<form action="{{route('accessLog.update',$Admins->id)}}" method="Post">
@csrf

@method('PUT')

<input type="hidden" name="ID"    VALUE="{{$Admins->id}}" >

<input type='text'  value='{{base64_decode($Admins->token)}}'  name='token' > </td>
<td> <select name='SelectRole'> 
    @if(isset($Admins->User_Role))
   <option  align='center'>  Select Role </option> 
   <option value="Admin">   @if(($Admins->User_Role)=='Admin') current role:- Admin @else  -> Admin  @endif </option> 
   <option value="supervisor"> @if(($Admins->User_Role)=='supervisor') current role:- supervisor @else  -> supervisor  @endif  </option> 
   @else
   <option   align='center'>  Select Role </option> 
   <option value="Admin"> -> Admin  </option> 
   <option value="supervisor">  -> supervisor  </option> 
   @endif

  </select>   </td>

<td> 

<img src="http://127.0.0.1:8000/Front/IMG/{{$Admins->pic}} " 
  style="width:50px; height:50px;"/>   </td>

  <td>   
   
    <input type="SUBMIT" name="update" VALUE="update"   class="btn btn-primary" style='background:BLUE'>
    </form>                      </td>

    
  <td>   <form action="{{route('accessLog.destroy',$Admins->id)}}" method="Post">

@csrf

@method('DELETE')

<input type="hidden" name="ID"    VALUE="{{$Admins->id}}" >

<input type="SUBMIT" name="DELETE"    VALUE="x"   class="btn btn-primary" style='background:red'>
    </form>                      </td>

   
<tr>
@endforeach
<td>    </td>
<td>    </td>
<td>    </td>
<td>    </td>




 
</tr>
</div >
</div >
</div >
</div >
</body>
<script src="{{asset('Front/JS/jquery.min.js')}}" type="text/javascript"  defer></script>

<!-- Bootstrap 4 -->
<script src="{{asset('Front/JS/bootstrap.bundle.min.js')}}" type="text/javascript"  defer></script>

</html>