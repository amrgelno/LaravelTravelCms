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

    <title>product</title>
</head>

<style>

.trc{
background: #000;
color:white;
}

li{
    list-style:none;
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

@if(isset($_GET['Edit_product'])  or  isset($_GET['page'])  )


<B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>


<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit product   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>


    <FORM  name='Main'  action="{{route('Del_Bulkproduct')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">
            
    <table  border="1"  class="table table-responsive ">
   
     <tr class="trc" align='center'>

    <th scope="col"> #</th>
    <th scope="col"> Num </th>
    <th scope="col"> prod_Model </th>   
    <th scope="col">prod_ver </th>
    <th scope="col"> prod_info </th>
    <th scope="col"> supplier </th>
    <th scope="col"> product_IMG </th>
    <th scope="col"> update </th>
    <th scope="col"> Delete </th>
    <th scope="col">
<input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> 
</th>

  </tr>
 
  <tr>
  @php   $i=0;   @endphp

  @foreach($member_pr  as    $member_pritem     )

  <!-- <td><?PHP echo $member_pritem->id ;?></td> -->

  <td> <INPUT TYPE="checkbox" name="checkbox[{{$member_pritem->id}}]"  value="{{$member_pritem->id}}" /> </td>


@csrf
@method('POST')

</FORM>


   <td> {{++$i}}     </td>


   <td> <?PHP echo $member_pritem->product_Model ;?>    </td>


   <td> <?PHP echo $member_pritem->product_ver ;?>    </td>


<td> 
   product_cost:-<?PHP echo $member_pritem->product_cost ;?>
   product_price:-<?PHP echo $member_pritem->product_price ;?>
   Discount:-<?PHP echo $member_pritem->Discount ;?><br/>
   QR:-<?PHP echo $member_pritem->QR ;?>
   product_Description:-<?PHP echo $member_pritem->product_Des ;?>
</td>         


<th scope="col"> {{$member_pritem->supplier}}  </th>

   <td>

  pic1:-<img src="http://{{$Domain_site}}/Front/IMG/<?php echo $member_pritem ->Image1?>" 
  style="width:50px; height:50px;"/>

  pic2:-<img src="http://{{$Domain_site}}/Front/IMG/<?php echo $member_pritem ->Image2?>" 
  style="width:50px; height:50px;"/>

  pic3:-<img src="http://{{$Domain_site}}/Front/IMG/<?php echo $member_pritem ->Image3?>" 
  style="width:50px; height:50px;"/>

</td>



 <td>

    <form  action="{{route('product.show',$member_pritem->id )}}"  method="get">

    @csrf  
             @method('GET')  
    
<input type="hidden" name="product"   value="{{$member_pritem->id}}"/>

 <input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>  


<input type="SUBMIT" name="SELECTproduct" VALUE="SELECTproduct"   class="btn btn-primary" style='background:yellow'>

    </form>

    </td>
    
     <td>
   <div align='center'> 
<form action="{{route('product.destroy',$member_pritem->id )}}" method="Post">

@csrf
@method('DELETE')

<input type="hidden" name="product"   value="{{$member_pritem->id}}"/>  

<input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>  

<input type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
</tr>
        @endforeach
</table>



{{$member_pr->appends(['MainM_ID'=>$MainM_ID ,'page_id' =>$page_id])->render('Admin.Auth.paginate')}}



@elseif(isset($_GET['SELECTproduct']) )

@foreach($member_prD  as    $member_pritem     )

<form action="{{route('product.update',$member_pritem->id)}}" method="post"  enctype="multipart/form-data" >

@csrf
@method('PUT')

   <!-- <INPUT TYPE='hidden'  name='productID'   value='{{ $member_pritem-> id}}'> -->
  

   <input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/> 

<input type="hidden" name="product"   value="{{$member_pritem->id}}"/>  

<label for='product_Model'>product_Model:-</label><input type='text' name='prodModel'    value='{{$member_pritem->product_Model}}' placeholder='product_Model caption'/>  <br/>
<label for='product_ver'>product_ver:-</label><input type='text' name='prodver'       value='{{$member_pritem->product_ver}}'   placeholder='product_ver caption'/>   <br/>
<label for='product_cost'>product_cost:-</label><input type='text' name='prodcost'      value='{{$member_pritem->product_cost}}'   placeholder='product_cost caption'/>   <br/>
<label for='product_price'>product_price:-</label><input type='text' name='prodprice'      value='{{$member_pritem->product_price}}'   placeholder='product_price caption'/>  <br/>
<Label for='Discount'>Discount:-</</label><input type='text' name='prodsupplier'  value='{{$member_pritem->supplier}}'  placeholder='supplier'/>  <br/>
<label for='QR'> QR  </label>QR:-<input type='text' name='prodQR'  value='{{$member_pritem->QR}}'  placeholder='QR'/>  <br/>
<label for='product_Description'>product_Description:-</label><br/><textarea type='text' name='proddisc'   placeholder='product_Description'/>{{$member_pritem->product_Des}} </textarea>  <br/>
<hr/>
<label for='uploadimg'> uploadimg:-  </label><input type='file'  name='uploadimage1'  value='search for a file' required/>  <br/>
<input type='file'  name='uploadimage2'  value='search for a file'  required/>  <br/>
<input type='file'  name='uploadimage3'  value='search for a file'  required />  <br/>


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