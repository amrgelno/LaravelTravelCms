<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="{{asset('Front/JS/jquery-1.11.0.min.js') }}"  type="text/javascript"  defer></script>
<meta name="csrf-token"  content="{{csrf_token()}}"/>      {{--     ajax meta   --}}
<title>card_LIST</title>
</head>
<body>
<div class="card-list">
<style>
.card-list {
    background: lavender;
    width: 1000px;
    font-weight: bolder;
}


tr:nth-child(even){
background:#09C;
color:white;
}

</style>
<table width="200" border="1">
  <tr style="background:#FF0">
    <td >product_Name<br/>اسم الصنف</td>
    <td >Image_product<br/>صوره الصنف </td>
    <td>price<br/>السعر</td>
    <td>Quantaty<br/>   الكمية</td>
    <td>Subtotal<br/>السعر الاجمالي </td>
    <td>Add/update<br/>أضافه/تعديل </td>
     <td>Delete<br/>حذف </td>
     <td>BUY<br/>شراء الصنف </td>
  </tr> 


  <tr col='10'> <td col='10'>subtotal<td>
<td>            </td>
<td> Sum    </td>

 <td><!--<input type='text' name='price'   id='subtotal' 
      style='width:100px;' disabled="disabled"   /> -->
 <div id='total'> {{$totalfav_product}} </div>
 <script>

var total=document.getElementById("total").innerHTML;
document.getElementById("subtotal").value=total;

    </script> 


      </td>
</tr>

  @foreach($cart as $cartitem)
  
  <tr>
    
    <input  type='hidden' id='product_id<?php echo $cartitem->id?>'  style=' border:hidden; 
        width:fit-content; background:none;' value='<?php echo $cartitem->id?>'  onfocus="faluts<?php echo $cartitem->id?>();"  disabled/>
        
    <td><!--<span id='product_ver<?php /*echo $cartitem->id']*/ ?>'><?php /*echo $cartitem->product_ver']*/ ?> </span>--> 
    
    <input  type='text' id='product_ver<?php echo $cartitem->id?>'  style=' border:hidden; 
        width:fit-content; background:none;'   value='<?php echo $cartitem->product_Model?>'     
         onfocus="faluts<?php echo $cartitem->id?>();"  disabled/>
     
    </td>
    
    <td> 
        
    <img src='../Front/IMG/{{$cartitem -> Image1}}' width='120px'  height='120px'/>    </td>
    
    <td><span id='price<?php /*echo $cartitem->id']*/ ?>' ><?php /*echo $cartitem->product_price']*/ ?></span>
    
    <input  type='text' id='price<?php echo $cartitem->id?>'  style=' border:hidden; 
        width:fit-content; background:none;' value='<?php echo $cartitem->product_price?>' value='<?php echo $cartitem->id?>'  onfocus="faluts<?php echo $cartitem->id?>();"  disabled/> 
    
    </td>
        
    <td>
     
    <input type='number'   id='quantity<?php echo $cartitem->id?>'  value="<?php echo $cartitem ->QU; ?>"   onchange='calclute{{$cartitem->id}}();' />

    </td>  
    
     
    <td>
        <Label>total:_ </Label><input  id='results<?php echo $cartitem->id?>'  style=' border:hidden; width:fit-content; background:none;'   value="<?php echo $cartitem ->total; ?>"  onfocus="faluts<?php echo $cartitem->id?>();"  disabled />
        <div id='total'>         </div>

    </td>
   
    <td>       
    <input  name="button" type="button"  value="Add"  id="Add<?php  echo $cartitem->id?>" 
 onclick="AdVal<?php  echo $cartitem->id?>();"/> 
    
      </td>
   
   
   
    <td class="card-list"> 
   
      
     <input type='button' name='payment<?php echo $cartitem->id?>'   
     id='pay<?php echo $cartitem->id?>' value='Delete' 
    onclick='Delete<?php  echo $cartitem->id?>();'  style='width:100px;'  /> 
    
     
    </td>
    
    
    
 <td> 
 
    paypal

  </td>   
    
  </tr>

        <script>    

    function calclute{{$cartitem->id}}() {

      //  alert(<?php echo $cartitem->product_price?>)
					 	
    var quantity{{$cartitem->id}}= $('#quantity{{$cartitem->id}}').val();
    
    //document.getElementById("quantity{{$cartitem->id}}").value;
	 
    var  price{{$cartitem->id}}={{$cartitem->product_price}};

    document.getElementById("results{{$cartitem->id}}").value=quantity{{$cartitem->id}}*price{{$cartitem->id}};

    var member_id={{$cartitem->member_id}};

    var product_id={{$cartitem->PROD_ID}};

    $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});

 $('#total').load('{{route('QUtoal')}}',{	 
    quantity:quantity<?php echo $cartitem->id ?>,
    total:quantity<?php echo $cartitem->id ?>*price<?php echo $cartitem->id?>,
    member_id: member_id,
    product_id:product_id,
    token:"{{csrf_token()}}",
    Method:"POST"});
	}
		  	
    </script>           



  @endforeach
  

<!-- <tr col='10'> <td col='10'>subtotal<td>
<td>            </td>
<td> Sum    </td>

<td><input type='text' name='price'   id='subtotal' value='{{$totalfav_product}}' 
      style='width:100px;' disabled="disabled"   />
      
      </td>
     
<td> <!-- <input type='BUTTON' name='payment'   id='pay' value='Checkout'    onclick='payDB();'  style='width:100px;'  /> 
 
                                         
                                           </td>
 <tr/> -->


</table>

<div class='pay'>  </div>
<div class='pan'>  </div>

</body>

</html>






 