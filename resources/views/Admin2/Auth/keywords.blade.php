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

    <title>Keyword</title>
</head>

<style>

.trc{
background: #000;
color:white;
}

li{
    list-style: none;
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

@if(isset($_GET['EditKeyword']) )

<B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>

<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit Keyword   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

    <FORM  name='Main'  action="{{route('Del_Bulkmarque')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">
            
    <table  border="1"  class="table table-responsive ">
   
     <tr class="trc" align='center'>

<th scope="col"> #</th>
<th scope="col"> Num</th>
<th scope="col">title </th>
<th scope="col">  description    </th>
<th scope="col">  Keyword    </th>
<th scope="col">  author    </th>
<th scope="col"> update </th>
<th scope="col"><input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> </th>

  </tr>
 
  <tr>
  @php   $i=0;   @endphp

  @foreach($keywords  as    $keywordsitem     )


  <td> <INPUT TYPE="checkbox" name="checkbox[{{$keywordsitem->id}}]"  value="{{$keywordsitem->id}}" /> </td>


@csrf
@method('POST')

</FORM>

  <!-- <td><?PHP echo $keywordsitem->ID;?></td> -->

   <td> {{++$i}}     </td>
         
  <td> {{ $keywordsitem -> title  }}  </td>
  <td> {{ $keywordsitem -> description  }}  </td>
  <td> {{ $keywordsitem -> Keyword  }}  </td>
  <td> {{  $keywordsitem -> author}}  </td>
 <td><form  action="{{route('keywords.show',$keywordsitem->title)}}"  method="get">
     
 @csrf  
             @method('GET')  


 <input type="hidden"  name="ID"   value="{{$keywordsitem->ID}}"/>

    
@if($_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$keywordsitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->nav_id;?>'/>
@endif

@if($_POST['page_id'] ="box_id"   and  $_POST['MainM_ID'] =$keywordsitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->box_id;?>'/>
@endif

@if($_POST['page_id'] ="topic_id"   and  $_POST['MainM_ID'] =$keywordsitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="SELECT_Keyword" style="margin: 5% 33%;
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
<form action="{{route('keywords.destroy',$keywordsitem->title)}}" method="Post">
@csrf
@method('DELETE')


<input type="hidden"  name="ID"   value="{{$keywordsitem->ID}}"/>

@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$keywordsitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "box_id"   and  $_POST['MainM_ID'] =$keywordsitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$keywordsitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->relatedtopic_id;?>'/>
@endif

<input type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
</tr>
        @endforeach
</table>
{{$keywords->render()}}

@elseif(isset($_GET['SELECT_Keyword']) )

@foreach($keywords as    $keywordsitem     )

<form action="{{route('keywords.update',$keywordsitem->title)}}" method="post" >

@csrf
@method('PUT')

<input type="hidden"  name="ID"   value="{{$keywordsitem->ID}}"/>

   <!-- <INPUT TYPE='hidden'  name='KeywordID'   value='{{ $keywordsitem-> id}}'> -->
  
   <!-- <INPUT TYPE='hidden'  name='MainM_ID'   value='$KeywordID '> -->

@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$keywordsitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['MainM_ID'] =$keywordsitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$keywordsitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $keywordsitem->relatedtopic_id;?>'/>
@endif

<input type="text" placeholder="{{ $keywordsitem-> Keyword }}"    name="keyword"  size="50px"  placeholder="KEYWORD  كلمات المفتاحية" /><br/> <br/>
<input type="text"  placeholder="{{ $keywordsitem-> description }}"   name="description"  size="80px"  placeholder="descriptionوصف الصفحة " />
<input type="text"   placeholder="{{ $keywordsitem-> author }}"  name="title"  size="50px"  placeholder="titleعنوان الصفحة " /> 
<input type="text"   placeholder="{{ $keywordsitem-> title }}"  name="author"  size="50px"  placeholder="authorأسم مؤلف" /> 



<input type="submit"  name="SEO"  value="send"  class="send"/>


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