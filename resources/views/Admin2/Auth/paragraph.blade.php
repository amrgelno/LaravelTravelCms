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

    <title>paragraph</title>
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


@if(isset($_GET['Editparagraph'])  or isset($_GET['page'])  )  

<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit paragraph   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

    <FORM  name='Main'  action="{{route('Del_Bulkparagraph')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">

    <B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>
               

    <table   id="data-table"   border="1"  class="table table-responsive ">

   <tr  class='filter-select' data-placeholder='select a name'  data-value='اختار' 
    class="trc" align='center'> 
    <th  scope="col"> <span align='center'>  # </span></th>
    <th scope="col">title_Num</th>
    <th scope="col">title </th>
    <th scope="col"> Editor </th>
    <th scope="col"> 
    <input type="hidden"  name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
        <input type="submit" value="Bulk-delete or delete"  name="delete" class="delete"> </th>
 
  </tr> 
 
  <tr>
  <!-- @php   $i=0;   @endphp -->

  @foreach($paragraph  as    $paragraphitem     )

  <!-- <td><?PHP echo $paragraphitem->id;?></td> -->

   <!-- <td> {{++$i}}     </td> -->

  <td> <INPUT TYPE="checkbox" name="checkbox[{{$paragraphitem->id}}]"  value="{{$paragraphitem->id}}" required/> </td>  

 
     
      @csrf
@method('POST')
</FORM>

   <td> {{$loop->iteration}}    </td>
         
  <td> {!! $paragraphitem -> Paragraph  !!}  </td>


 <td>
 <div align='center'> 

 <form  action="{{route('paragraph.show',$paragraphitem->id)}}"  method="GET"/>

    @csrf  
             @method('GET')  
    
 
@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$paragraphitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "box_id"   and  $_POST['MainM_ID'] =$paragraphitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$paragraphitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="SELECTParagraph" style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/R.png')}});" title='Editstatic' value>

   
 </form>  </div>
    </td>
    
     <td>
   <div align='center'> 
<form action="{{route('paragraph.destroy',$paragraphitem->id)}}" method="POST"/>
@csrf
@method('DELETE')


@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$paragraphitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "box_id"   and  $_POST['MainM_ID'] =$paragraphitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$paragraphitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="DELETE_Item" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form>

</div>
    </td>

</tr>
        @endforeach
      
</table>


{{$paragraph->appends(['MainM_ID'=>$MainM_ID,'page_id' =>$page_id])->render('Admin.Auth.paginate')}}


@elseif(isset($_GET['SELECTParagraph']) )


@foreach($paragraphD  as    $paragraphitem     )

<form action="{{route('paragraph.update',$paragraphitem->id)}}" method="POST" />


@csrf
@method('PUT')

   <!-- <INPUT TYPE='hidden'  name='paragraphID'   value='{{ $paragraphitem-> id}}'> -->
  
   <INPUT TYPE='hidden'  name='MainM_ID'   value='{{ $paragraphID }}'>

   @if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$paragraphitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['MainM_ID'] =$paragraphitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$paragraphitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $paragraphitem->relatedtopic_id;?>'/>
@endif


&nbsp; &nbsp; <p><B>*Default content_lang: </B></p>

<textarea   name='updateparagraph' >{{ $paragraphitem-> Paragraph }}</textarea>



&nbsp; &nbsp; <p><B>*second content_lang: </B></p>

&nbsp; &nbsp;<textarea   name='Ar_paragraph' >{{ $paragraphitem-> Ar_paragraph }}</textarea>


	<input type='submit' value='updata'  name='Edit'>
    </form>

@endforeach


@else


<h1>  لايوجد محتوي حتى الأن</h1>

@endif




</div >
</div >

</body>
<script src="{{asset('Front/JS/jquery.min.js')}}" type="text/javascript"  defer></script>

<!-- Bootstrap 4 -->
<script src="{{asset('Front/JS/bootstrap.bundle.min.js')}}" type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/auto-tables.js') }}" type="text/javascript"  defer></script>

</html>