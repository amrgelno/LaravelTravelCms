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

    <title>static</title>
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
/* static-shadow: inset -1px 1px 20px 0px #000;*/
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
static-shadow: inset -20px 0px 20px 20px #00000078;

}

input[type="text"] {
width: 100px;

}


.input-sm {

border:2px solid #0CF;
}

</style>

<body>

@if(isset($_GET['EDIT_static']) or isset($_GET['upcat']) or isset($_GET['updatecat']) or  isset($_GET['DELCATITEM']))

<B> *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>

<table width="500px" border="1">
<tr class="trc">
<td>sel</td>
<td>cod</td>
<td>categories</td>
<td> select</td>
<td> update</td>
<td><input type='submit' value='delete'  name='delete' class="delete" ></td>
    </tr>

    @php   $i=0;   @endphp

@foreach ($static as $SNumbersitem)

@if(!empty($SNumbersitem->SNumber_Name))

@csrf  
    @method('GET') 

<tr>

<td> <INPUT TYPE='checkbox' name='checkstatic[]'  value='<?php echo $SNumbersitem->id; ?>'/> </td>


 <!-- <td> <?php echo  $SNumbersitem->id?></td> -->

 <td> {{++$i}}</td>

<td> 
<form action="{{route('SNumbers.update',$SNumbersitem->id)}}" method="post">
@csrf   
@method('PUT') 

<input type='text'  name='cat_type'   value='<?php echo $SNumbersitem->SNumber_Name;?>' >  </td>  
<td><input type='hidden'  name='cat_typeprev'  value='<?php echo $SNumbersitem->SNumber_Name;?>' >   
<!-- <INPUT TYPE='hidden' name='id'  value='<?php echo $SNumbersitem->id;?>'/> -->

@if( $_POST['page_id'] = "nav_id"  and  $_POST['FKStatic_ID'] =$SNumbersitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['FKStatic_ID'] =$SNumbersitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['FKStatic_ID'] =$SNumbersitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->relatedtopic_id;?>'/>
@endif

<INPUT TYPE='submit' name='upcat'  value='update' class='update'/>
</form></td>

<td>
<form action="{{route('SNumbers.show',$SNumbersitem->id)}}" method="post">

@csrf  
       @method('GET') 

<INPUT TYPE='hidden' name='cat_type'  value='<?php echo $SNumbersitem->SNumber_Name;?>'/>

@if( $_POST['page_id'] = "nav_id"  and  $_POST['FKStatic_ID'] =$SNumbersitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] = "static_id"   and  $_POST['FKStatic_ID'] =$SNumbersitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['FKStatic_ID'] =$SNumbersitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->relatedtopic_id;?>'/>
@endif

<INPUT TYPE='submit' name='selectcate'  value='selectcate' class='insert'/>
</form></td>
</tr>

@endif


@endforeach


@elseif(isset($_POST['selectcate']) or  isset($_GET['page']) )
<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit static   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>


    <B> cat_type: {{$cat_type}}  </B>

<FORM  name='Main'  action="{{route('Del_BulkSNumbers')}}" method="POST" enctype='multipart/form-data'>


    <div class="table-responsive col-lg-7">
            
    <table  border="1"  class="table table-responsive ">
   
<tr class="trc">

<th scope="col">#</th>
<th scope="col">cod</th>
<th scope="col">categories</th>
<th scope="col">Numbers</th>
<th scope="col"> Editor</th>
<th scope="col"> Image</th>
<th scope="col"> Image Name</th>
<th scope="col"> cat_type</th>
<th scope="col">     
<input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="FKStatic_ID"  value="{{$FKStatic_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> 
</th>
</tr>
 
  @php   $i=0;   @endphp


  @foreach($static  as    $SNumbersitem     )
  <tr>
  <!-- <td><?PHP echo $SNumbersitem->id;?></td> -->
  <td> <INPUT TYPE='checkbox' name='checkbox[{{$SNumbersitem->id}}]'  value='{{$SNumbersitem->id}}'/> </td>

  @csrf
@method('POST')

</FORM>

  <td> {{++$i}}     </td>

   <td> {{ $SNumbersitem -> title  }}  </td>
   <td> {{ $SNumbersitem -> SNumber_Num  }}  </td>

<td>
<form action="{{route('SNumbers.show',$SNumbersitem->id)}}" method="post">

<INPUT TYPE='hidden' name='ID'  value='<?php echo $SNumbersitem->id;?>'/>      

@csrf  
       @method('GET') 


<INPUT TYPE='submit' name='update'  style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/R.png);" title='Editstatic' value/>
</form></td>

<td>      

<img src="http://{{$Domain_site}}/Front/IMG/<?php echo $SNumbersitem->ImageName?>" style="width:50px; height:50px;"/>

 </td> 
 <td> <?php echo $SNumbersitem->ImageName ;?> </td>
 <td> <?php echo $SNumbersitem->SNumber_type ;?>     </td>
 
 <td>  <div align='center'>

<form action="{{route('SNumbers.destroy',$SNumbersitem->id)}}" method="Post">

    @csrf
@method('DELETE')

<INPUT TYPE='hidden' name='ID'  value='<?php echo $SNumbersitem->id;?>'/>      

@if($request['page_id']='nav_id')
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->nav_id;?>'/>
@elseif($request['page_id']='box_id')
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->box_id;?>'/>
@elseif($request['page_id']='topic_id')
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->relatedtopic_id;?>'/>
@endif
 <input type="SUBMIT" name="DELCATITEM" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
    </tr>

        @endforeach

</table>

{{$static->appends(['FKStatic_ID'=>$FKStatic_ID ,'page_id' =>$page_id ,'cat_type' =>$cat_type ])->render('Admin.Auth.paginate')}}


@elseif(isset($_POST['update']))

@foreach($static  as    $SNumbersitem     )

  <form action="{{route('SNumbers.update',$SNumbersitem->id)}}" method="post" enctype="multipart/form-data">

  @csrf
     @method('PUT')
   <br/>
<h1>  update  categories   </h1>
<hr/>
     <div style='display:flex;'>     
<!-- <INPUT TYPE='hidden'  name='id'   value='<?php echo $SNumbersitem->id;?>'> -->

<INPUT TYPE='hidden' name='ID'  value='<?php echo $SNumbersitem->id;?>'/>   

<input type="text" name="statictitle"  placeholder='Defaultlang' value="<?php echo $SNumbersitem->title;?>" />

<input type="text" name="Ar_title"    placeholder='secondlang'   value="<?php echo $SNumbersitem->Ar_title;?>" />

<input type='text'  name='staticNum'  placeholder='static_num'    value="<?php echo $SNumbersitem->SNumber_Num;?>" />

<input type='text'  name='staticsymbol'  placeholder='staticsymbol eg:$,%,LE'    value="<?php echo $SNumbersitem->symbol;?>" />

<input type="file"  name='staticshow'  value="search for a file" />

@if( $_POST['page_id'] = "nav_id"  and  $_POST['FKStatic_ID'] =$SNumbersitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['FKStatic_ID'] =$SNumbersitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['FKStatic_ID'] =$SNumbersitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKStatic_ID'  value='<?php echo $SNumbersitem->relatedtopic_id;?>'/>
@endif

<input type='submit' value='update'  name='updatecat'  >
    </div>
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