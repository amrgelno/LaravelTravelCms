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

    <title>faqs</title>
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

@if(isset($_GET['EDIT_faqs']) or  isset($_GET['page']) )

<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit faqs   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

    <FORM  name='Main'  action="{{route('Del_Bulkfaqs')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">


    <B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>

            
    <table  border="1"  class="table table-responsive ">
   
     <tr class="trc" align='center'>
  <th scope="col"><span align='center'> # </span></th>
  <th scope="col">N</th>
  <th scope="col">subject</th>
  <th scope="col">content(textarea)</th>
  <th scope="col">editfaqs</th>
  <th scope="col">

  <input type="hidden"  name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> 

</th>

  </tr>
 
  <tr>

  @php   $i=0;   @endphp

  @foreach($faqs  as    $faqitem   )

  <!-- <td><?PHP echo $faqitem->ID;?></td> -->

  <td> <INPUT TYPE="checkbox" name="checkbox[{{$faqitem->id}}]"  value="{{$faqitem->id}}" required/> </td>  
     
      @csrf
@method('POST')


</FORM>

<td> {{++$i}}     </td>
         
<td> {{ $faqitem -> Question  }}  </td>

<td> {!! $faqitem ->  Answer !!}  </td>

     
   <td> <form  action="{{route('faq.show',$faqitem->id)}}"  method="get">
@csrf  
    @method('GET')  
    

<input type="hidden"  name="faq_ID"   value="{{ $faqitem->id }}"/>


@if($_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$faqitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->nav_id;?>'/>
@endif

@if($_POST['page_id'] ="box_id"   and  $_POST['MainM_ID'] =$faqitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->box_id;?>'/>
@endif

@if($_POST['page_id'] ="topic_id"   and  $_POST['MainM_ID'] =$faqitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="SELECTfaqs"  style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/R.png')}});" title='Editfaqs' value>

    </form>

    </td>


    
     <td>
   <div align='center'> 
<form action="{{route('faq.destroy',$faqitem->id)}}" method="Post">
@csrf
@method('DELETE')

<input type="hidden"  name="faq_ID"   value="{{ $faqitem->id }}"/>


@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$faqitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->nav_id;?>'/>
@endif

@if($_POST['page_id'] =  "box_id"   and  $_POST['MainM_ID'] =$faqitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->box_id;?>'/>
@endif

@if($_POST['page_id'] ="topic_id"   and  $_POST['MainM_ID'] =$faqitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
</tr>
        @endforeach
</table>


{{$faqs->appends(['MainM_ID'=>$MainM_ID,'page_id' =>$page_id])->render('Admin.Auth.paginate')}}


@elseif(isset($_GET['SELECTfaqs']) )

<h1> Edit faqs <h1>

@foreach($faqsD  as    $faqitem     )

<form action="{{route('faq.update',$faqitem->id)}}" method="post"    enctype="multipart/form-data" >

@csrf
 @method('PUT')
 <br/> <br/> 
<br/> 

&nbsp; &nbsp; <p><B>*Default content_lang: </B></p>

&nbsp; &nbsp; <input type="text" class='faqs-input' name="subject"  style='width:750px;' placeholder="newsubject"  value='{{ $faqitem->Question }}'/>
<br/> <br/> 
<br/> 
 
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <p><textarea  cols='60' row='30'  name='content'  >{{ $faqitem-> Answer }}</textarea>
</p>



<hr/ style='color:black;'>


&nbsp; &nbsp;<p><B>*second content_lang: </B> </p>

&nbsp; &nbsp; <input type="text"   value="{{ $faqitem->Ar_Question }}"   class='faqs-input'  style='width:750px;' name="Ar_subject"  placeholder="newsubject"  />
<br/> <br/> 
<br/> 
 
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <p><textarea  cols='60' row='30'   name='Ar_content'  > {{ $faqitem->Ar_Answer }} </textarea>

</p>

@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$faqitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['MainM_ID'] =$faqitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->box_id;?>'/>
@endif

@if($_POST['page_id'] ="topic_id"   and  $_POST['MainM_ID'] =$faqitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="faqs_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $faqitem->relatedfaqs_id;?>'/>
@endif

<!--<input type="file"  name='upload'   value="search for a file" />


 <select name='faqs_STYLE'> 
    @if(isset($faqitem->faqs_style))
   <option   value="{{$faqitem->faqs_style}}"   align='center'>  Select faqs_STYLE </option> 
   <option value="faqs_Model1">   @if(($faqitem->faqs_style)=='faqs_Model1') current style:- faqs_Model1 @else  faqs_Model1  @endif </option> 
   <option value="faqs_Model2"> @if(($faqitem->faqs_style)=='faqs_Model2') current style:- faqs_Model2 @else   faqs_Model2  @endif  </option> 
   <option value="faqs_Model3"> @if(($faqitem->faqs_style)=='faqs_Model3') current style:- faqs_Model3 @else  faqs_Model3 @endif  </option> 

   @else
   <option   align='center'>  Select faqs_STYLE </option> 
   <option value="faqs_Model1"> faqs_Model1  </option> 
   <option value="faqs_Model2">  faqs_Model2  </option>
   <option value="faqs_Model3">  faqs_Model3 </option> 
 
   @endif

  </select>  -->





<BR/> <BR/>
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