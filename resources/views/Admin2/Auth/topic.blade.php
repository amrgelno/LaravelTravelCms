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

    <title>topic</title>
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

@if(isset($_GET['EDIT_TOPIC']) or  isset($_GET['page']) )

<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit topic   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

    <FORM  name='Main'  action="{{route('Del_Bulktopic')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">


    <B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>

            
    <table  border="1"  class="table table-responsive ">
   
     <tr class="trc" align='center'>
  <th scope="col"><span align='center'> # </span></th>
  <th scope="col">N</th>
  <th scope="col">subject</th>
  <th scope="col">content(textarea)</th>
  <th scope="col">Image</th>
  <th scope="col">edittopic</th>
  <th scope="col">insert </th>
  <th scope="col">

  <input type="hidden"  name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> 

</th>

  </tr>
 
  <tr>

  @php   $i=0;   @endphp

  @foreach($topic  as    $topicitem   )

  <!-- <td><?PHP echo $topicitem->id;?></td> -->

  <td> <INPUT TYPE="checkbox" name="checkbox[{{$topicitem->id}}]"  value="{{$topicitem->id}}" required/> </td>  
     
      @csrf
@method('POST')
</FORM>

<td> {{++$i}}     </td>
         
<td> {{ $topicitem -> subject  }}  </td>

<td> {!! $topicitem -> content  !!}  </td>

<td><img src="http://{{$Domain_site}}/Front/IMG/<?php echo $topicitem->ImageName?>" 
  style="width:50px; height:50px;"/>  </td>
     
   <td> <form  action="{{route('topic.show',$topicitem->id)}}"  method="get">
@csrf  
    @method('GET')  
    
@if($_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$topicitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->nav_id;?>'/>
@endif

@if($_POST['page_id'] ="box_id"   and  $_POST['MainM_ID'] =$topicitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->box_id;?>'/>
@endif

@if($_POST['page_id'] ="topic_id"   and  $_POST['MainM_ID'] =$topicitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="SELECTTopic"  style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/R.png')}});" title='Edittopic' value>

    </form>

    </td>


 <td><form action="{{route('cms')}}" method="post">
@csrf  
@method('GET')

<!-- <INPUT TYPE='hidden' name='box_ID'  value='<?php echo $topicitem->ID;?>'/> -->

<INPUT TYPE='hidden' name='Topic_ID'  value='<?php echo $topicitem->id;?>'/>

<INPUT TYPE='submit' name='instopic'  value='->' class='insert'/>
</form>     </td>

    
     <td>
   <div align='center'> 
<form action="{{route('topic.destroy',$topicitem->id)}}" method="Post">
@csrf
@method('DELETE')

@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$topicitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "box_id"   and  $_POST['MainM_ID'] =$topicitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$topicitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
</tr>
        @endforeach
</table>


{{$topic->appends(['MainM_ID'=>$MainM_ID,'page_id' =>$page_id])->render('Admin.Auth.paginate')}}


@elseif(isset($_GET['SELECTTopic']) )

@foreach($topicD  as    $topicitem     )

<form action="{{route('topic.update',$topicitem->id)}}" method="post"    enctype="multipart/form-data" >

@csrf
 @method('PUT')
 <br/> <br/> 
<br/> 

&nbsp; &nbsp; <p><B>*Default content_lang: </B></p>

&nbsp; &nbsp; <input type="text" class='topic-input' name="subject"  style='width:750px;' placeholder="newsubject"  value='{{ $topicitem->subject }}'/>
<br/> <br/> 
<br/> 
 
&nbsp; &nbsp; <textarea   cols='60' row='30' name='content'  >{{ $topicitem-> content }}</textarea>


<hr/ style='color:black;'>


&nbsp; &nbsp;<p><B>*second content_lang: </B> </p>

&nbsp; &nbsp; <input type="text"   value="{{ $topicitem->Ar_subject }}"  style='width:750px;'  class='topic-input' name="Ar_subject"  placeholder="newsubject"  />
<br/> <br/> 
<br/> 
 
&nbsp; &nbsp; <textarea   cols='60' row='30'   name='Ar_content'  > {{ $topicitem->Ar_content }} </textarea>



@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$topicitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['MainM_ID'] =$topicitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$topicitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $topicitem->relatedtopic_id;?>'/>
@endif

<input type="file"  name='upload'   value="search for a file" />


<select name='Topic_STYLE'> 

    @if(isset($topicitem->Topic_style))

   <option   value="{{$topicitem->Topic_style}}"   align='center'>  Select TOPIC_STYLE </option> 

   <option value="Article">   @if(($topicitem->Topic_style)=='Article')   o Article  @else  Article  @endif </option> 

   <option value="AccordionPanel"> @if(($topicitem->Topic_style)=='AccordionPanel') o AccordionPanel @else   AccordionPanel  @endif  </option> 

   <option value="CollapseAccordionPanel"> @if(($topicitem->Topic_style)=='CollapseAccordionPanel') o AccordionPanel(Collapse_effect)   @else   AccordionPanel(Collapse_effect)  @endif  </option> 


   @else

   <option  align='center'>  Select TOPIC_STYLE </option> 

   <option value="Article"> Article  </option> 

   <option value="AccordionPanel">  AccordionPanel  </option>


   <option value="AccordionPanel">  AccordionPanel  </option>

   <option value="CollapseAccordionPanel">  AccordionPanel(Collapse_effect)  </option>
 
   @endif

  </select> 





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