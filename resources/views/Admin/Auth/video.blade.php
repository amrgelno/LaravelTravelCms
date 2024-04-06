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

    <title>video</title>
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

@if(isset($_GET['EDIT_Video']) or isset($_GET['upcat']) or isset($_GET['updatecat']) or  isset($_GET['DELCATITEM']))

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

@foreach ($video as $videoitem)

@if(!empty($videoitem->cat_Name))

@csrf  
    @method('GET') 

<tr>

<td> <INPUT TYPE='checkbox' name='checkstatic[]'  value='<?php echo $videoitem->id; ?>'/> </td>


 <!-- <td> <?php echo  $videoitem->id?></td> -->

 <td> {{++$i}}</td>

<td> 
<form action="{{route('video.update',$videoitem->id)}}" method="post">
@csrf   
@method('PUT') 


<input type='text'  name='cat_type'   value='<?php echo $videoitem->cat_Name;?>' >  </td>  
<td><input type='hidden'  name='cat_typeprev'  value='<?php echo $videoitem->cat_Name;?>' >   
<!-- <INPUT TYPE='hidden' name='id'  value='<?php echo $videoitem->id;?>'/> -->

@if( $_POST['page_id'] = "nav_id"  and  $_POST['FKvideo_ID'] =$videoitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['FKvideo_ID'] =$videoitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "relatedtopic_id"   and  $_POST['FKvideo_ID'] =$videoitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->relatedtopic_id;?>'/>
@endif

<INPUT TYPE='submit' name='upcat'  value='update' class='update'/>
</form></td>

<td>
<form action="{{route('video.show',$videoitem->id)}}" method="post">

@csrf  
       @method('GET') 

<INPUT TYPE='hidden' name='cat_type'  value='<?php echo $videoitem->cat_Name;?>'/>

@if( $_POST['page_id'] = "nav_id"  and  $_POST['FKvideo_ID'] =$videoitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] = "static_id"   and  $_POST['FKvideo_ID'] =$videoitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "relatedtopic_id"   and  $_POST['FKvideo_ID'] =$videoitem->relatedtopic_id )

<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->relatedtopic_id;?>'/>

@endif

<INPUT TYPE='submit' name='selectcate'  value='selectcate' class='insert'/>
</form></td>
</tr>

@endif


@endforeach


@elseif(isset($_POST['selectcate'])or  isset($_GET['page']))
<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit video   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

    <div class="table-responsive col-lg-7">
            
    <table  border="1"  class="table table-responsive ">
   
<tr class="trc">

<th scope="col">#</td>
<th scope="col">cod</td>
<th scope="col">categories</td>
<th scope="col"> update</td>
<th scope="col"> Image</td>
<th scope="col"> cat_type</td>
<th scope="col"><input type='submit' value='delete'  name='delete' class="delete" ></td>

</tr>
 
  @php   $i=0;   @endphp


  @foreach($video  as    $videoitem     )
  <tr>
  <!-- <td><?PHP echo $videoitem->id;?></td> -->
  <td> <INPUT TYPE='checkbox' name='checkstatic[]'  value='<?php echo $videoitem->id; ?>'/> </td>
   
  <td> {{++$i}}     </td>

   <td> {{ $videoitem -> title  }}  </td>


<td>
<form action="{{route('video.show',$videoitem->id)}}" method="post">

<!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $videoitem->id;?>'/>       -->

@csrf  
       @method('GET') 


<INPUT TYPE='submit' name='Editvideo'  style="margin: 5% 33%;
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

<img src="http://{{$Domain_site}}/Front/Video/<?php echo $videoitem->VIDOName?>" style="width:50px; height:50px;"/>

 </td> 
 <td> <?php echo $videoitem->cat_type ;?>     </td>
 
 <td>  <div align='center'>

<form action="{{route('video.destroy',$videoitem->id)}}" method="Post">

    @csrf
@method('DELETE')

<!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $videoitem->id;?>'/>       -->

@if($request['page_id']='nav_id')
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->nav_id;?>'/>
@elseif($request['page_id']='box_id')
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->box_id;?>'/>
@elseif($request['page_id']='relatedtopic_id')
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->relatedtopic_id;?>'/>
@endif
 <input type="SUBMIT" name="DELCATITEM" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
    </tr>

        @endforeach

</table>

@elseif(isset($_POST['Editvideo']))

@foreach($video  as    $videoitem     )

  <form action="{{route('video.update',$videoitem->id)}}" method="post" enctype="multipart/form-data">

  @csrf
     @method('PUT')
   <br/>
<h1>  update  categories   </h1>
<hr/>
     <div style='display:flex;'>     
<!-- <INPUT TYPE='hidden'  name='id'   value='<?php echo $videoitem->id;?>'> -->

<!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $videoitem->id;?>'/>       -->

<input type="text" name="vidotitle" placeholder="<?php echo $videoitem->title;?>" />
<input type="file"  name='vidoshow'  value="search for a file" />


@if( $_POST['page_id'] = "nav_id"  and  $_POST['FKvideo_ID'] =$videoitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['FKvideo_ID'] =$videoitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "relatedtopic_id"   and  $_POST['FKvideo_ID'] =$videoitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='FKvideo_ID'  value='<?php echo $videoitem->relatedtopic_id;?>'/>
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