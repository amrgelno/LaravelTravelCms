<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token"  content="{{csrf_token()}}"/>      {{--     ajax meta   --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
<link href="{{asset('Front/css/Uiframework.css') }}" rel="stylesheet"  type="text/css"  >

    <title>box</title>
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

/* resize table css */

 td  span{
  resize: both;
  overflow: auto;
  width: auto;
  height: auto;
  min-height: 20px;
  min-width: 20px;
}


td {
  padding: 0;
  margin: 0px;
  overflow: auto;
}


table {
  border-collapse: collapse;
  border-spacing: 0px;
  resize: both;
  overflow: auto;
}
td {
  padding: 0;
  margin: 0px;
  overflow: auto;
}

span {
  resize: both;
  overflow: auto;
  width: 120px;
  height: 120px;
  margin: 0px;
  padding: 0px;
  display:block;

}

td span {
  border: 0;
  width: auto;
  height: auto;
  min-height: 20px;
  min-width: 20px;
}

</style>

<body>

@if(isset($_GET['updateBox']) or isset($_GET['upcat']) or isset($_GET['updatecat']) or  isset($_GET['DELCATITEM']))

<B>  *current_page:{{$pagename}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   *page_id:{{$MainM_ID}}   </B>

<table width="500px" border="1">
	<tr class="trc">
    <td><span> sel  </span></td>
    <td><span> Num  </span></td>
    <td><span> categories  </span></td>
    <td><span> Box_style <span></td>
    <td> <span> update </span></td>
    <td> <span> select </span></td>
    <td><span><input type='submit' value='delete'  name='delete' class="delete" ><span></td>
    </tr>
    

    @php   $i=0;   @endphp

@foreach ($box as $boxitem)

@if(!empty($boxitem->cat_Name))

@csrf  
    @method('GET') 

<tr>


 <td> <span><INPUT TYPE='checkbox' name='checkboxes[]'  value='<?php echo $boxitem->ID; ?>'/> </span></td>
 <input type='hidden'  name='MainM_ID'   value='<?php echo $boxitem->Box_id; ?>' >  
 <input type='hidden'  name='cat_type'   value='<?php echo $boxitem->cat_type;?>' >   
   <!-- <td> <?php echo  $boxitem->ID?></td> -->
   <td> {{++$i}}</td>

   <form action="{{route('box.update',$boxitem->ID)}}" method="post">

<td> <span>
@csrf   
@method('PUT') 


EN:-<input type='text'  name='cat_type'    style='width: fit-content;'  title='<?php echo $boxitem->cat_Name;?>'  value='<?php echo $boxitem->cat_Name;?>' > 

AR:<input type='text'  name='Ar_cat_Name'    style='width: fit-content;'  title='<?php echo $boxitem->Ar_cat_Name;?>'  value='<?php echo $boxitem->Ar_cat_Name;?>' > 


<input type='hidden'  name='cat_typeprev'  value='<?php echo $boxitem->cat_type;?>' >  



<!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $boxitem->ID;?>'/> -->

@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$boxitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['MainM_ID'] =$boxitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$boxitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->relatedtopic_id;?>'/>
@endif

</span>
</td>


<td>
<span>
<select name='BOX_STYLE'> 
    @if(isset($boxitem->BOX_STYLE))
   <option  value="{{$boxitem->BOX_STYLE}}"   align='center'>  Select BOX_STYLE </option> 
   <option value="BOXModel1">   @if(($boxitem->BOX_STYLE)=='BOXModel1') <span title='active'>o</span>  cards (categories)    @else    cards (categories)  @endif </option> 
   <option value="BOXModel2"> @if(($boxitem->BOX_STYLE)=='BOXModel2')   <span title='active'>o </span> Brands        @else   Brands  @endif  </option> 
   <option value="BOXModel3"> @if(($boxitem->BOX_STYLE)=='BOXModel3')   <span title='active'>o </span>  Multislider        @else Multislider @endif  </option> 
   <option value="BOXModel4">   @if(($boxitem->BOX_STYLE)=='BOXModel4') <span title='active'>o</span>  icon     @else   icon  @endif </option> 
   <option value="BOXModel5"> @if(($boxitem->BOX_STYLE)=='BOXModel5')   <span title='active'>o </span>    Boxes    @else   cards   Boxes      @endif  </option> 

   @else
   <option   align='center'>  Select BOX_STYLE </option> 
   <option value="BOXModel1">  cards (categories)   </option> 
   <option value="BOXModel2">  BOXModel2  </option>
   <option value="BOXModel3">   Multislider </option> 
   <option value="BOXModel4">  Icon </option> 
   <option value="BOXModel5">   Boxes  </option> 


   @endif

  </select> 
</span></td>

<td> <span> 
<INPUT TYPE='submit' name='upcat'  value='update' class='update'/>
</span></td>

</form>

<td><span>
<form action="{{route('box.show',$boxitem->ID)}}" method="post">
@csrf  
       @method('GET') 
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->nav_id;?>'/>
<INPUT TYPE='hidden' name='cat_type'  value='<?php echo $boxitem->cat_type;?>'/>
@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$boxitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] = "box_id"   and  $_POST['MainM_ID'] =$boxitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$boxitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->relatedtopic_id;?>'/>
@endif

@if(@$_GET['cat_Name'] == $boxitem->cat_type)
<INPUT TYPE='submit' name='selectcate'  value='selected_categories' class='insert' style='background:red; color:white;'/>

@else

<INPUT TYPE='submit' name='selectcate'  value='selectcategories' class='insert' />


@endif
</form><span></td>
</tr>

@endif


@endforeach


@elseif(isset($_POST['selectcate']) or  isset($_GET['page']) )


<div class="card-body">
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  Edit categeories   </h1></strong>    </div>  
    
    <hr/> <br/>     
    <br/> <br/>

    <B> cat_type: {{$cat_type}}  </B>

 <FORM  name='Main'  action="{{route('Del_Bulkbox')}}" method="POST" enctype='multipart/form-data'>

    <div class="table-responsive col-lg-7">
           
    <table   id="data-table"    border="1"  class="table table-responsive ">

    
    

<tr class="trc">
<thead>

<th scope="col">#</th>
<th scope="col">Num</th>
<th scope="col">categories</th>
<th scope="col"> Edit</th>
<th scope="col"> select</th>
<th scope="col"> Image</th>
<th scope="col"> Image Name</th>
<!-- <th scope="col"> cat_type</th> -->
<th scope="col">Seo Report</th>
<th scope="col">     
<input type="hidden" name="page_id"   value="{{$page_id}}"/>
<iNPUT TYPE="hidden" name="MainM_ID"  value="{{$MainM_ID}}"/>      
<input type="submit" value="delete"  name="delete" class="delete"> 
</th>
</thead>

</tr>


 
  @php   $i=0;   @endphp


  @foreach($boxD  as    $boxitem     )
  <tr>

  <td> <INPUT TYPE="checkbox" name="checkbox[{{$boxitem->ID}}]"  value="{{$boxitem->ID}}" /> </td>


  @csrf
@method('POST')

</FORM>

   <td> {{++$i}}     </td>

   <td>  <a href="http://{{$Domain_site}}/index.php?box_ID=<?php echo $boxitem->ID;?>" target='_blank'>{{ $boxitem -> title  }} </a> </td>
<td>

<form action="{{route('box.show',$boxitem->ID)}}" method="post">
@csrf  
       @method('GET')
        
<INPUT TYPE='submit' name='selecttoupdate'   class='update'  style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/R.png')}});" title='Editbox' value/>
</form></td>

<td><form action="{{route('cms')}}" method="post">
@csrf  
             @method('GET')
<!-- <INPUT TYPE='hidden' name='box_ID'  value='<?php echo $boxitem->ID;?>'/> -->

<INPUT TYPE='hidden' name='box_ID'  value='<?php echo $boxitem->ID;?>'/>


<INPUT TYPE='submit' name='instopic'   title='boxfeatures' class='insert'  
style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/description.png')}});" value/>
</form>     </td>
<td>      

<img src="http://{{$Domain_site}}/Front/IMG/<?php echo $boxitem->ImageName?>" style="width:50px; height:50px;"/>

 </td> 


 <td> <?php echo $boxitem->ImageName ;?> </td>

 <td>
<a href="https://freetools.seobility.net/en/seocheck/{{$Domain_site}}" target='_blank'>SEO Report</a>
    </td>
 
 <!-- <td> <?php /*echo $boxitem->cat_type ;*/?>     </td> -->
 <td>  <div align='center'>

    <form action="{{route('box.destroy',$boxitem->ID)}}" method="Post">
@csrf
@method('DELETE')

<INPUT TYPE='hidden' name='cat_type'  value='<?php echo $boxitem->cat_type;?>'/>

@if($request['page_id']='nav_id')
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->nav_id;?>'/>
@elseif($request['page_id']='box_id')
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->box_id;?>'/>
@elseif($request['page_id']='topic_id')
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->relatedtopic_id;?>'/>
@endif
 <input type="SUBMIT" name="DELCATITEM" VALUE="x"   class="btn btn-primary" style='background:red'>
    </form></div>
    </td>
    </tr>

        @endforeach

</table>


{{$boxD->appends(['MainM_ID'=>$MainM_ID ,'page_id' =>$page_id ,'cat_type' =>$cat_type ])->render('Admin.Auth.paginate')}}



@elseif(isset($_POST['selecttoupdate']))

@foreach($boxupdate  as    $boxitem     )

  <form action="{{route('box.update',$boxitem->ID)}}" method="post" enctype="multipart/form-data">

  @csrf
     @method('PUT')
   <br/>
<h1>  update  categories   </h1>
<hr/>
<!-- <INPUT TYPE='hidden'  name='ID'   value='<?php echo $boxitem->ID;?>'> -->
&nbsp; &nbsp; <p><B>*Default box_lang: </B></p>
<input type="text" name="boxtitle"  style='width:350px;'  value="<?php echo $boxitem->title;?>" />  <br>   <br>
<textarea cols='60' row='30' name="boxDesc">  <?php echo $boxitem->Desc;?>     </textarea>

&nbsp; &nbsp;<p><B>*second box_lang: </B> </p>

<input type="text"   placeholder='Ar_title' name="Ar_boxtitle"  style='width:350px;' value="<?php echo $boxitem->Ar_title;?>" />   <br>  <br>

<textarea cols='60' row='30'   placeholder='Ar_Desc'   name="Ar_boxDesc">  <?php echo $boxitem->Ar_Desc;?>     </textarea>

&nbsp; &nbsp; <input type="file"  name='boxshow'  value="search for a file" />

<INPUT TYPE='hidden' name='cat_type'  value='<?php echo $boxitem->cat_type;?>'/>

@if( $_POST['page_id'] = "nav_id"  and  $_POST['MainM_ID'] =$boxitem->nav_id  )
<input type="hidden"  name="page_id"   value="nav_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->nav_id;?>'/>
@endif

@if(   $_POST['page_id'] =   "box_id"   and  $_POST['MainM_ID'] =$boxitem->box_id )
<input type="hidden"  name="page_id"   value="box_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->box_id;?>'/>
@endif

@if(   $_POST['page_id'] =  "topic_id"   and  $_POST['MainM_ID'] =$boxitem->relatedtopic_id )
<input type="hidden"  name="page_id"   value="topic_id"/>
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $boxitem->relatedtopic_id;?>'/>
@endif
<br> <br>


@if($boxitem->BOX_STYLE=='BOXModel1')

price:-
<INPUT TYPE='text' name='price'    value='<?php echo $boxitem->price ?>'  >

<br> <br>
Daytime:-

<INPUT TYPE='text' name='DayTime'     value='<?php echo $boxitem->DayTime ?>'   style='width:250px;'>


<br> <br>
visibility ON Home :-

<select  name='viewhome'  require>
    @if(isset($boxitem->visibility))
   <option  value="{{$boxitem->visibility}}" align='center'>  Select visibility </option> 
   <option value="Active">   @if(($boxitem->visibility)=='Active') o Active @else   Active  @endif </option> 
   <option value="DisActive"> @if(($boxitem->visibility)=='DisActive') o DisActive  @else   DisActive  @endif  </option> 

   @else
   <option    align='center'> Select visibility </option> 
   <option value="BOXModel1"> DisActive  </option> 
   <option value="BOXModel2">  Active  </option>
 
   @endif

  </select>




  <br/>

<label for="customize your tour"> Customize Y Tour</label>
<select   name='filtersel'   id='filtersel'   onChange='filter();'>

   <option   value=" " align='center' >   filter customizer </option> 
   <option  value="Country">  Destinations:     @if(!empty($boxitem->Country))   o {{$boxitem->Country}}       @else   Notfound      @endif  </option> 
   <option value="Special Offers">  Special Offers:  @if(!empty($boxitem->SpecialOffers))    o {{$boxitem->SpecialOffers}}    @else   Notfound      @endif    </option>
   <option value="TripType">  Trip Type     @if(!empty($boxitem->TripType))     o {{$boxitem->TripType}}     @else   Notfound      @endif </option>
   <option value="TripStyles">  Styles     @if(!empty($boxitem->TripStyles))    o {{$boxitem->TripStyles}}      @else   Notfound      @endif </option>
   <option value="Duration">  Duration      @if(!empty($boxitem->Duration))     o {{$boxitem->Duration}}   @else   Notfound      @endif </option>
   <option value="GroupSize">  Group Size     @if(!empty($boxitem->GroupSize))    o {{$boxitem->GroupSize}}    @else   Notfound      @endif  </option>

</select>


<select   name='filteropt' id="filteropt" > 
  
  





</select>








<script>
    
    function filter() {
  

      var filtersel = $('#filtersel').val();






     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});



 $('#filteropt').load('{{route('Filteriz')}}',{	 

    colsel:filtersel,
    token:"{{csrf_token()}}",
    Method:"POST"});

	}
	
    </script>

@endif


<input type='submit' value='update'  name='updatecat'  >
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
<script src="{{asset('Front/JS/auto-tables.js')}}"></script>

</html>