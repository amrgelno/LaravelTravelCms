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

    <title>slider</title>
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

@if(isset($_GET['Edit_slider']) )


<B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>


<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit slider   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>


    <FORM  name='Main'  action="{{route('Del_Bulkslider')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">
            
    <table  border="1"  class="table table-responsive ">
   
     <tr class="trc" align='center'>

    <th scope="col"> #</th>
    <th scope="col"> title </th>
    <th scope="col">slider_Img </th>
    <th scope="col"> update </th>
    <th scope="col">
<input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> 
</th>

  </tr>
 
  <tr>
  @php   $i=0;   @endphp

  @foreach($slider  as    $slideritem     )

  <!-- <td><?PHP echo $slideritem->id ;?></td> -->

  <td> <INPUT TYPE="checkbox" name="checkbox[{{$slideritem->id}}]"  value="{{$slideritem->id}}" /> </td>


@csrf
@method('POST')

</FORM>


   <td> {{++$i}}     </td>


   <td> <?PHP echo $slideritem->title ;?>    </td>
         

   <td><img src="http://{{$Domain_site}}/Front/IMG/<?php echo $slideritem ->ImageName?>" 
  style="width:50px; height:50px;"/>  </td>


 <td>

    <form  action="{{route('slider.show',$slideritem->id )}}"  method="get">

    @csrf  
             @method('GET')  
    
@if($_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$slideritem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->nav_id;?>'/>
@endif

@if($_POST['page_id'] ="box_id"   and  $_POST['MainM_ID'] =$slideritem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->box_id;?>'/>
@endif

@if($_POST['page_id'] ="topic_id"   and  $_POST['MainM_ID'] =$slideritem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="SELECTslider" VALUE="SELECTslider"   class="btn btn-primary" style='background:yellow'>

    </form>

    </td>
    
     <td>
   <div align='center'> 
<form action="{{route('slider.destroy',$slideritem->id )}}" method="Post">

@csrf
@method('DELETE')

@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$slideritem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "box_id"   and  $_POST['MainM_ID'] =$slideritem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$slideritem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
</tr>
        @endforeach
</table>


@elseif(isset($_GET['SELECTslider']) )

@foreach($sliderD  as    $slideritem     )

<form action="{{route('slider.update',$slideritem->id)}}" method="post"  enctype="multipart/form-data" >

@csrf
@method('PUT')

   <!-- <INPUT TYPE='hidden'  name='sliderID'   value='{{ $slideritem-> id}}'> -->
  
   <INPUT TYPE='hidden'  name='MainM_ID'   value='{{ $sliderID }}'>

   @if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$slideritem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['MainM_ID'] =$slideritem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$slideritem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $slideritem->relatedtopic_id;?>'/>
@endif

<input type='text' name='slidetitle'   placeholder='slideshow caption'/>
<input name="upload" type="file"  value="uploadfile"  />


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