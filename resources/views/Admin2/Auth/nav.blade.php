<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="{{asset('Front/css/Uiframework.css') }}" rel="stylesheet"  type="text/css"  >

    <title>Nav</title>
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

<div class="card-body"  style='background:white;'>
    <div class='card card-primary card-outline'>

<div class="card-header" style="text-align:center;">  
<strong><h1>  All page links & menu  </h1></strong>    </div>  
    
    <hr/> <br/>
     
<form action="{{route('nav.store')}}" method="post" enctype="multipart/form-data">

@csrf 

<div style='display:flex;'>

 &nbsp;   &nbsp; <input type="text" name="Maintitle"  class='form-control'   placeholder="اضافة قائمة" required> &nbsp;  &nbsp;

  <label for='upload'><img src="{{asset('Front/ICON/uploadfile.png')}}" width="20px" height="20px" title="upload Menu icon" class="camera" /></label>
  <input type="file"  name='IMG' id='upload'  value="search for a file" style='display:none;' />

@if(!empty($navID))
    <input    name='parent_id'  type='hidden' value="{{$navID}}" />
    <!-- <input    name='parent_id' type='hidden' value="0" /> -->
    @endif

@if(!empty($parent_id))

<input    name='SUBMENUID'  type='hidden'  value="{{$parent_id}}" />

@endif

    <br/><input type="SUBMIT" name="ADD" VALUE="ADD" class="Mainbt1   input-md"  >

</div>

    </form>
    
    <br/> <br/>
    <div class="table-responsive col-lg-7">
            <table  border="1"  class="table table-responsive ">
<tr class="trc"  align='center'>
<td scope="col">ID</td>
<td scope="col">MAIN MENU</td>
<td scope="col">LinkPosition</td>
<td scope="col">Menuico</td>
<td scope="col">UPDATE</td>
@if(@$BSModel != 'landing_page')
<td scope="col">ADDSUBMENU</td>
@endif

<td scope="col">content</td>
 <td scope="col">SEO Report</td> 
<td scope="col">DELETE</td>
<td scope="col">Customize PAGE Tool ->> </td>

  </tr>
  <tr>

  @php   $i=0;   @endphp


  @if(!empty($nav))
  @foreach(  $nav    as   $navitem     )
    <!-- <td><?PHP echo $navitem->id;?></td> -->
   
    <td> {{++$i}}     </td>

    <form action="{{route('nav.update',$navitem->id)}}" method="Post"  enctype="multipart/form-data">
           
@csrf
@method('PUT')


    <td>
   EN: <input type="text" name="SUBMENU" VALUE="<?PHP echo $navitem->sub1menu;?>" id="sub1menu">  <br/>
   <br>AR: <input type="text" name="Ar_sub1menu" VALUE="<?PHP echo $navitem->Ar_sub1menu;?>" id="sub1menu">
   </td>

<td>
 
<select  name='LinkPosition'  require>


    @if(isset($navitem->Active))
   <option  value="{{$navitem->Active}}"  align='center'>  Select LinkPosition </option> 
   <option value="nav">   @if(($navitem->Active)=='nav') o nav @else  nav  @endif </option> 
   <option value="footer"> @if(($navitem->Active)=='footer') o footer  @else   footer  @endif  </option> 

   @else
   <option  align='center'> Select LinkPosition </option> 
   <option value="nav"> nav  </option> 
   <option value="footer">  footer  </option>
 
   @endif

  </select>


</td>

   
    <td>
       <img src="http://{{$Domain_site}}/Front/IMG/{{$navitem->submenuico}}" style="width:40px; height:40px;"/>
       

@if(empty($navitem->submenuico))

       <input  type="file"  name='IMG'   value="search for a file"  style="width:85px;"  class='input-sm'  />

       @else
    <input type="SUBMIT" name="DEL_ICON" VALUE="RemoveICON"  class="btn btn-primary" style='background:red'>

@endif

    </td> 
    
     <td>   
    <div align="center">

 
    <!-- <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $navitem->id;?>"  > -->
    <input type="SUBMIT" name="UPDATE"  VALUE="UPDATE"   class="btn btn-primary" style='background:blue'  >
    </form>

    </div>
        </td>

        @if(@$BSModel != 'landing_page')

    <td> 
    

    @if(empty($parent_id)&&($navitem->Active) == 'nav')

 

    <form  action="{{route('nav.show',$navitem->id)}}"  method="POST">
            
        @csrf  
             @method('GET')

             @if(!empty($navID))
    <input    name='parent_id'  type='hidden' value="{{$navID}}" />
    <!-- <input    name='parent_id' type='hidden' value="0" /> -->
     @endif

    <!-- <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $navitem->id;?>"> -->
    <input type="SUBMIT" name="SELECT" value="" style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/add-to-database.png')}});">

    </form>
    @endif
    </td>
    @endif
	
	

     <td>
     @if(empty($navitem->footer))
<a    href="http://{{$Domain_site}}/index.php?MainM_ID=<?php echo $navitem->id;?>" target='_blank'> 
	 <input type="submit"  style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/seen.png')}});" title="VIEWPAGE" value=""></a>	@endif

    </td>

    <td>
	
	
	     @if(empty($navitem->footer))

     <a    href="https://freetools.seobility.net/en/seocheck/{{$Domain_site}}" target='_blank'>
    
    
     <input type="submit" name="selecttoupdate" class="update" style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/page_speed_2__.png')}});" title="VIEW SEO REport" value="">
    
    </a> @endif
    </td>

     <td>
   <div align='center'> <form action="{{route('nav.destroy',$navitem->id)}}" method="Post">
@csrf
@method('DELETE')
    <!-- <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $navitem->id?>"  > -->
    
@if(!empty($navID))
    <input    name='parent_id'  type='hidden' value="{{$navID}}" />
    <!-- <input    name='parent_id' type='hidden' value="0" /> -->
    @endif


@if(!empty($parent_id))

<input    name='SUBMENUID'  type='hidden'  value="{{$parent_id}}" />

@endif

    <input type="SUBMIT" name="DELETE"  value=""   style="margin: 5% 33%;

    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
   background-color: unset; 
    background-position: center;
    background-image: url({{asset('Front/ICON/KREST.png')}});">
    </form></div>
    </td>
    
    @if(@$BSModel != 'landing_page')
    <td>
    <div align='center'>     
	
	     @if(empty($navitem->footer))

    <form action="{{route('cms')}}" method="post">
  
    @csrf
@method('GET')    
            
             <!-- @if (Route::has('nav.index')) -->
    <input type="hidden" name="MainM_ID" VALUE="{{$navitem->id}}">
<!-- @endif -->
     
    <input type="SUBMIT" name="INSERT" VALUE="<HTML>"  class="btn btn-primary" style='background:orange' ></div>
    </form>  @ENDIF
    </td>

    @else

    @if($navitem->id==1)

    <td>
    <div align='center'>     
    <form action="{{route('cms')}}" method="post">
  
    @csrf
@method('GET')    
            
             <!-- @if (Route::has('nav.index')) -->
    <input type="hidden" name="MainM_ID" VALUE="1">
<!-- @endif -->
     
    <input type="SUBMIT" name="INSERT" VALUE="->>"  class="btn btn-primary" style='background:orange' ></div>
    </form>
    </td>



@endif



@endif    

        </tr> 
        </td>

        @endforeach
        @endif
</table>
</div >
</div >
</div >
</div >
</div >
</body>
<script src="{{asset('Front/JS/jquery.min.js')}}" type="text/javascript"  defer></script>

<!-- Bootstrap 4 -->
<script src="{{asset('Front/JS/bootstrap.bundle.min.js')}}" type="text/javascript"  defer></script>

</html>