<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, ">
<script src="{{asset('Front/JS/jquery.min.js')}}" type="text/javascript"  defer></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Front/JS/bootstrap.bundle.min.js')}}" type="text/javascript"  defer></script>

<!-- <link href="{{asset('Front/CMSCSS/CMSLg.css') }}" rel="stylesheet"  type="text/css"  > -->
<link href="{{asset('Front/CMSCSS/CMSMD.css') }}" rel="stylesheet"  type="text/css"  >
<link href="{{asset('Front/CMSCSS/CMSSm.css') }}" rel="stylesheet"  type="text/css"  >
<link href="{{asset('Front/CMSCSS/CMSXS.css') }}" rel="stylesheet"  type="text/css"  >
<link href="{{asset('Front/css/hint.min.css') }}" rel="stylesheet"  type="text/css"  >
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> 

<script>tinymce.init({selector:'textarea'});</script>
<title>CMS_DASHBOARD</title>
</head>
<style type="text/css">
.job{
width:500px;
height:50px;
background:#0FF;
}

.product{

    display:none;
}
</style>
<body bgcolor="darkkhaki" onload='loader()'>



@include('Admin.Auth.dashboardLoader')

<div id="Custonizer_info">
<div class="logo" align="center"><img src="http://{{$Domain_site}}/Front/ICON/viewweb.png" class="loading-logo"/><h1> Build your Page With Customize page Web Tool           </h1>
<br/>
من خلال أداة بناء محتوى يمكنك تصميم محتوى فريدة و تحريره وبناء قالبك مع أداوت تخصيص الصفحة
<br/>
<div class='preloader' align="center" ><img src="http://{{$Domain_site}}/Front/ICON/wpspin-2x.gif" class="loading-logo" align="center"/>  </div>
<hr/>
</div>
 </div>
<div class="watch-video"><button id="Paragraph-bt" STYLE="background:#000;" />
<a href="http://{{$Domain_site}}/Front/CMS_VIDEO/insparag.mp4" target="_blank" style="color:#FFF;">HOW TO USE</a></button></div>
<img src="http://{{$Domain_site}}/Front/ICON/Paragraph.png" class="Paragraph-img"/>
<h1 class="Paragraph-button hint--right" onclick='paragraphbt();'  aria-label="الفقرات النصية">  Paragraph&title  </h1> 
<!--<div class="ParagraphOpen-buttor"> >> </div> <div class="ParagraphClose-buttor"> <<  </div>  -->
<div class="Paragraph-title">

<form action="{{route('paragraph.store')}}" method="post" enctype="multipart/form-data">

@csrf 

@if(isset($navID))

<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>

@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


<textarea name="Paragraph" cols="40" rows="10"></textarea>
<input type="submit"  name="send"  value="send"  class="send"/>
</form>


<form action="{{route('paragraph.index')}}"  method="get">

@csrf
@method('GET')

@if(isset($navID))

<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


<input type="submit"   name="Editparagraph"   value="Editparagraph"  class="edit"/>
</form>
</div>
<script>    
function paragraphbt(){

 $(".Paragraph-title").slideToggle(2000); 
 /*$("#MENUAFTER").css({display:"none"});*/   
}
</script>
<hr/>
<img src="http://{{$Domain_site}}/Front/ICON/ArticleES.png" class="Article-img"/> 
<div class="watch-video"><button id="Article&topic-bt" STYLE="background:#000;" />
<a href="http://{{$Domain_site}}/Front/CMS_VIDEO/instopic.mp4" target="_blank" style="color:#FFF;">HOW TO USE</a></button></div>
<h1 class="Article-bt hint--right" onclick='Articlebt();' aria-label="المقالأت و الموضوعات"
> Article&topic </h1><!--<div class="topicopen-buttor"> >> </div> <div class="topicClose-buttor"> << </div>-->
<div class="Article">
<form action="{{route('topic.store')}}" method="post" enctype="multipart/form-data">
@csrf

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))
<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif

<input type="text" name="subject"   placeholder="newsubject" />
<br /><br />
<br />
<textarea type="text"   name="content"  placeholder="insert new topic here" cols="40" rows="10"></textarea>
<input type="file"  name='upload'   value="search for a file" />
<br /><br />
<br />
<input type="submit"  name="submit" value="send"  class="send2"  />
</form>
<form action="{{route('topic.index')}}" method="get">

@csrf
@method('GET')

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif
    <input type="SUBMIT" name="EDIT_TOPIC" VALUE="EDIT_TOPIC" class="EDIT_TOPIC">
    </form>
</div>
<script type="text/javascript">
function Articlebt(){
 $(".Article").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
}
</script>
    <hr/>
<img src="http://{{$Domain_site}}/Front/ICON/dribbble-categories.png" class="Boxes-img"/>    
<div class="watch-video"><button id="Boxes&categeory-bt" STYLE="background:#000;" />
<a href="http://{{$Domain_site}}/Front/CMS_VIDEO/categories.mp4" target="_blank" style="color:#FFF;"> HOW TO USE</a></button></div>
<h1 class="Box-bt hint--right" onclick='Boxbt();'  aria-label="الفئات"> categeories </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
 <div class="Boxes">
<form name="BOXScript">   
<input type="text"     name="cat_Name"  placeholder="Add categeories,Excursions,Cards_Name"  size="40"   id="boxcat"  required />  
<input type="number"   name="count"    id="boxcounter"   placehoder="insert number image"   style="width:30px;" required/>
<input type="submit"  name="addMORE"  value="+Add_categeories"  onclick="addval();"/>
</form>
<form name="updatebox"  action="{{route('box.index')}}"  method="get">
<!--   get -> @method('PUT')         -->
<!--   POST -> @method('GET, HEAD, POST')         -->

@csrf

@method('PUT')  

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


<input type="submit"  name="updateBox"  value="updatecategeories" class="EDIT_TOPIC" />

</form>
</div>
<script>
function Boxbt (){
 $(".Boxes").slideToggle(2000); 
 /*$("#MENUAFTER").css({display:"none"});*/     
}
</script>
<hr/>
<script>
function addval(){

var x=document.getElementById('boxcounter').value;
var s=document.getElementById('boxcat').value;
var  F="<br/><br/><form action='{{route('box.store')}}' name='form' method='post' enctype='multipart/form-data' style='display:flex;flex-wrap: wrap;flex-direction: column;align-items: baseline;align-content: flex-start;justify-content: center;'>";
var csrf='@csrf';
var  m="<input type='text' name='boxtitle[]' placeholder='boxHeadline'/><br>";
var y="<input type='file'  name='boxshow[]'  value='search for a file' /><br>";
var  N="<textarea type='text' name='boxDesc[]'   placeholder='box_Description'/>box_Description </textarea><hr/>";
var p="<INPUT TYPE='text' name='price[]'  placeholder='price' ><hr/>";
var D="<INPUT TYPE='text' name='DayTime[]'  placeholder='DayTime' ><hr/>";



for(i=1;i<=x;i++){
document.write('card_Number');
document.write(i+' '+F+csrf+y+m+p+D+' '+N);
document.write('<br />');
document.write('<br />');
document.write('<br />');
document.write('<br />');
}

@if(isset($navID))

document.write("<input type='hidden'  name='MainM_ID'   value='{{ $navID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");

@elseif(isset($box_ID))

document.write("<input type='hidden'  name='MainM_ID'   value='{{ $box_ID }}'/>");
document.write("<input type='hidden'  name='page_id'   value='box_id'/>");

@elseif(isset($Topic_ID))

document.write("<input type='hidden'  name='MainM_ID'   value='{{ $Topic_ID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");

@endif

document.write("<input type='hidden'  name='counter'>");
document.form.counter.value=x;
document.write("<input type='text'  name='cat'>");
document.form.cat.value=s;

document.write("<input type='submit'  name='Adder'  value='+Add_Categories'/>");
document.write('<form/>');
}
</script>

@if(isset($box_ID))
   @if(($BusinessModel)=='E-commerce')

<img src="http://{{$Domain_site}}/Front/ICON/dribbble-categories.png" class="Boxes-img"/>    
<div class="watch-video"><button id="Boxes&categeory-bt" STYLE="background:#000;" />
<a href="http://{{$Domain_site}}/Front/CMS_VIDEO/categories.mp4" target="_blank" style="color:#FFF;"> HOW TO USE</a></button></div>
<h1 class="Box-bt hint--right"   aria-label="المنتجات" onclick='productbt();' > product </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
 <div class="product">
<form name="productScript">   
<input type="number"   name="count"    id="prodcount"   placehoder="insert number image" required/>
<input type="submit"  name="addMORE"  value="+Addproduct"  onclick="addprod();"/>
</form>
<form name="updatebox"  action="{{route('product.index')}}"  method="get">
<!--   get -> @method('PUT')         -->
<!--   POST -> @method('GET, HEAD, POST')         -->
@csrf

@method('PUT')  
<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"  />
<input type="hidden"  name="page_id"   value="Box_ID"/>

<input type="submit"  name="Edit_product"  value="updateBox" class="EDIT_TOPIC" />
</form>
</div>
<script>
function productbt (){
 $(".product").slideToggle(2000); 
 /*$("#MENUAFTER").css({display:"none"});*/     
}
</script>
<hr/>
<script>
function addprod(){
    
var x=document.getElementById('prodcount').value;  //counter_Number

var  F="<form action='{{route('product.store')}}' name='form'  method='post' enctype='multipart/form-data'>";
var csrf='@csrf';
var  m="<input type='text' name='prodModel[]'   placeholder='product_Model caption'/>";
var  N="<input type='text' name='prodver[]'   placeholder='product_ver caption'/>";
var  s="<input type='text' name='prodcost[]'   placeholder='product_cost caption'/>";
var  f="<input type='text' name='prodprice[]'   placeholder='product_price caption'/>";
var  K="<input type='text' name='prodDiscount[]'   placeholder='Discount'/>";
var  z="<input type='text' name='prodsupplier[]'   placeholder='supplier'/><br/><br/><br/>";
var  w="<input type='text' name='prodQR[]'   placeholder='QR'/><br/><br/><br/>";
var  X="<textarea type='text' name='proddisc[]'   placeholder='product_Description'/>product_Description </textarea><hr/>";
var e="<input type='file'  name='uploadimage1[]'  value='search for a file' />";
var p="<input type='file'  name='uploadimage2[]'  value='search for a file' />";
var l="<input type='file'  name='uploadimage3[]'  value='search for a file' />";

for(i=1;i<=x;i++){
document.write(+i+'    '+F+csrf+' '+m+' '+N+'  '+s+' '+K+'  '+z+'    '+f+' '+w+' '+e+''+p+''+l+' '+X);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}

document.write("<input type='hidden'  name='MainM_ID'   value='{{ $box_ID }}'/>");
document.write("<input type='hidden'  name='page_id'   value='Box_ID'/>");

document.write("<input type='hidden'  name='countnum' >");
document.form.countnum.value=x;
document.write("<input type='submit'  name='Add'  value='+addCard'/>");
document.write('<form/>');
}
</script>

@endif
@endif
<img src="http://{{$Domain_site}}/Front/ICON/slideshow.png" class="slideshow-img"/>    
<div class="watch-video"><button id="slideshow-bt"  STYLE="background:#000;"  />
<a href="http://{{$Domain_site}}/Front/CMS_VIDEO/slideshow.mp4" target="_blank" style="color:#FFF;"> HOW TO USE</a></button></div>
<h1 class="slideshow-bt hint--right" onclick='slideshowbt();'  aria-label="السليدر"> slideshow </h1><!--<div class="slideshowOpen-buttor"> >> </div> <div class="slideshowclose-buttor"> << </div>-->
<div class="slideshow">
<form name="slideshowscript">
<input type="number"   name="counter"    id="counter"   placehoder="insert number image"/>
<input type="submit"  name="submit"  value="+Addslider" onclick="addslider();"/>
</form>
<form name="multislider"  action="{{route('slider.index')}}"  method="get">

@csrf

@method('PUT')  


@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif

<input type="submit"  name="Edit_slider"  value="updateslider"  class="EDIT_TOPIC" />
</form>
</div>
<script>
function  slideshowbt(){
 $(".slideshow").slideToggle(2000);    
/*$("#MENUAFTER").css({display:"none"});*/  
}
</script>
<script>
function addslider(){
    
var x=document.getElementById('counter').value;  //counter_Number

var  F="<form action='{{route('slider.store')}}' name='form'  method='post' enctype='multipart/form-data'>";
var csrf='@csrf';
var  m="<input type='text' name='slidetitle[]'   placeholder='slideshow caption'/><hr/>";
var y="<input type='file'  name='uploadslide[]'  value='search for a file' />";
for(i=1;i<=x;i++){
document.write(+i+' '+F+csrf+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}

@if(isset($navID))
document.write("<input type='hidden'  name='MainM_ID'   value='{{ $navID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");

@elseif(isset($box_ID))

document.write("<input type='hidden'  name='MainM_ID'   value='{{ $box_ID }}'/>");
document.write("<input type='hidden'  name='page_id'   value='box_id'/>");

@elseif(isset($Topic_ID))

document.write("<input type='hidden'  name='MainM_ID'   value='{{ $Topic_ID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");

@endif

document.write("<input type='hidden'  name='countnum' >");
document.form.countnum.value=x;
document.write("<input type='submit'  name='Add'  value='addimage'/>");
document.write('<form/>');
}
</script>
 <hr/>
<img src="http://{{$Domain_site}}/Front/ICON/dribbble-categories.png" class="Boxes-img"/>    
<div class="watch-video"><button id="Boxes&categeory-bt" STYLE="background:#000;" />
<a href="http://{{$Domain_site}}/Front/CMS_VIDEO/categories.mp4" target="_blank" style="color:#FFF;"> HOW TO USE</a></button></div>
<h1 class="static-bt hint--right"  onclick='staticbt();'   aria-label="التحليلات" > static info </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
 <div class="staticV">
<form name="staticScript">
<input type="text"     name="static_Name"  placeholder="static_Name" id="staticcat"  />  
<input type="number"   name="staticcount"    id="staticcount"   placehoder="insert number static"/>
<input type="submit"  name="addMORE"  value="+"  onclick="Addstatic();"/>
</form>
<form name="updatebox"  action="{{route('SNumbers.index')}}"   method="get">

@csrf

@method('PUT')  

@if(isset($navID))
<input type="hidden"  name="FKStatic_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="FKStatic_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="FKStatic_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif
<input type="submit"  name="EDIT_static"  value="updateBox" class="EDIT_TOPIC" />
</form>
</div>
<script>
function  staticbt() {

 $(".staticV").slideToggle(2000); 
 /*$("#MENUAFTER").css({display:"none"});*/     
}
</script>
<script>
function Addstatic(){
    
var xl=document.getElementById('staticcount').value;
var sl=document.getElementById('staticcat').value;
var csrf='@csrf';
var  Fl="<form action='{{route('SNumbers.store')}}' name='form' method='post' enctype='multipart/form-data'>";
var  ml="<input type='text' name='statictitle[]' placeholder='statictitle'/>";
var nl="<input type='text'  name='staticNum[]'  placeholder='static_num'/><hr/>"; 
var sy="<input type='text'  name='staticsymbol[]'  placeholder='static_symbol eg:$,%,LE'/>";
var yl="<input type='file'  name='staticshow[]'  value='search for a file' />";  
for(i=1;i<=xl;i++){
document.write(+i+' '+Fl+csrf+yl+ml+sy+nl);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}

@if(isset($navID))
document.write("<input type='hidden'  name='FKStatic_ID'   value='{{ $navID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");
@elseif(isset($box_ID))

document.write("<input type='hidden'  name='FKStatic_ID'   value='{{ $box_ID }}'/>");
document.write("<input type='hidden'  name='page_id'   value='box_ID'/>");

@elseif(isset($Topic_ID))

document.write("<input type='hidden'  name='FKStatic_ID'   value='{{ $Topic_ID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");

@endif
document.write("<input type='hidden'  name='counter'>");
document.form.counter.value=xl;
document.write("<input type='text'  name='staticcat'>");
document.form.staticcat.value=sl;
document.write("<input type='submit'  name='Addstatic'  value='Addstatic'/>");
document.write('<form/>');
}
</script>
<hr/>
<img src="http://{{$Domain_site}}/Front/ICON/Image_playback-512.png" class="videocat-img"/> 
<h1 class="video-bt hint--right" onclick='videobt();'   aria-label="فئات الفيديوهات" > video  categeory </h1>
<!--<div class="videocatOpen-buttor"> >> </div>  <div class="videocatClose-buttor"> << </div>--> 
<div class="video-cat">
<form name="vidoScript">
<input type="text"     name="cat_VIDO"  placeholder="cat_Name" id="catvido"  />  
<input type="number"   name="countnum"    id="countnum"   placehoder="insert number image"/>
<input type="submit"  name="addMORE"  value="+"  onclick="addvido();"/>
</form>
<form name="EditVideo"  action="{{route('video.index')}}"  method="get">

@csrf

@method('PUT')  

@if(isset($navID))
<input type="hidden"  name="FKvideo_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="FKvideo_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="FKvideo_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif
<input type="submit"  name="EDIT_Video"  value="updateVIDEO" class="EDIT_TOPIC" />
</form>
</div>
<script>
function videobt() {

 $(".video-cat").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
}
</script>
<hr/>
<script>
function addvido(){
var x=document.getElementById('countnum').value;
var s=document.getElementById('catvido').value;
var  F="<form action='{{route('video.store')}}' name='form' method='post' enctype='multipart/form-data'>";
var csrf='@csrf';
var  m="<input type='text' name='vidotitle[]' placeholder='vidotitle caption'/><hr/>";
var y="<input type='file'  name='vidoshow[]'  value='search for a file' />";
for(i=1;i<=x;i++){
document.write(+i+' '+F+csrf+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
@if(isset($navID))
document.write("<input type='hidden'  name='FKvideo_ID'   value='{{ $navID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");

@elseif(isset($box_ID))

document.write("<input type='hidden'  name='FKvideo_ID'   value='{{ $box_ID }}'/>");
document.write("<input type='hidden'  name='page_id'   value='box_id'/>");

@elseif(isset($Topic_ID))

document.write("<input type='hidden'  name='FKvideo_ID'   value='{{ $Topic_ID  }}'/>");
document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");

@endif
document.write("<input type='hidden'  name='counter'>");
document.form.counter.value=x;
document.write("<input type='text'  name='videocat'>");
document.form.videocat.value=s;
document.write("<input type='submit'  name='AddVIDO'  value='Addvideo'/>");
document.write('<form/>');
}
</script>
<img src="http://{{$Domain_site}}/Front/ICON/banner_carrousel_slider_images_ad_promotion-512.png" class="cover-img"/> 
<h1 class='cover-bt hint--right' onclick='coverbt();'  aria-label="الغلاف" >coverimage </h1>
<!--<div class="coverOpen-buttor"> >> </div>  <div class="coverClose-buttor"> << </div>-->
<div class="cover">
<form action="{{route('cover.store')}}" method="post" enctype="multipart/form-data">
@csrf

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))
<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>
@elseif(isset($Topic_ID))
<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>
@endif
<input name="upload" type="file"  value="uploadfile"  />
<input name="Edit_cover" type="submit" value="insert"  class="EDIT_TOPIC"/>
</form>


<form action="{{route('cover.index')}}" method="get">

@csrf

@method('PUT')  

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_ID"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif

<input name="Edit_cover" type="submit"  value="change cover" class="EDIT_TOPIC"/>
</form>
</div>
<script>
function coverbt(){

 $(".cover").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
}
</script>
<hr/>


<img src="http://{{$Domain_site}}/Front/ICON/smm1.png" class="social-img"/> 

<h1 class="socialmedia-bt hint--right"  onclick='smediabt();'   aria-label="السوشيل ميديا"> social media </h1><!--<div class="socialmediaOpen-buttor"> >> </div> <div class="socialmediaClose-buttor"> <<  </div>-->
<div class="social-media">
<form action="{{route('social.store')}}"  method="post"   enctype="multipart/form-data">

@csrf

<input name="socialicon" type="file"  value="uploadfile"/>

<input  name="url"     type="url"   placeholder="insert your social link url" />

<input name="socail" type="submit" value="insert" class="EDIT_TOPIC" />
</form>

<form action="{{route('social.index')}}"  method="get" >
    @csrf
     @method('PUT') 
    
<input name="Edit_social" type="submit" value="Edit_social" class="EDIT_TOPIC" />
</form>

</div>

<script>
function  smediabt(){

 $(".social-media").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
}
</script>

<hr/>
<img src="http://{{$Domain_site}}/Front/ICON/internet-page-content-128.png" class="Marque"/> 
<h1 class="Marque-bt hint--right" onclick='Marquebt();'  aria-label="شريط الأاخباري"   >  News Marque  </h1>
<!--<div class="MarqueOpen-buttor"> >> </div>  <div class="MarqueClose-buttor"> << </div>-->
<div class="Marqueline">
<form action="{{route('marque.store')}}" method="post">

@csrf

@if(isset($navID))

<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>

@endif

<input type="text"    name="NewsMarque"  size="80px"  placeholder="newnews" />
<input type="submit"  name="Marque"  value="send"  class="send"/>
</form>

<form action="{{route('marque.index')}}"  method="get" >
@csrf
@method('PUT')


@if(isset($navID))

<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>

@endif

<input name="Edit_marque" type="submit" value="Edit_marque" class="EDIT_TOPIC" />
</form>
</div>
<script>
function  Marquebt(){
 $(".Marqueline").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
}
</script>
<hr/>
<img src="http://{{$Domain_site}}/Front/ICON/seo2-91-128.png" class="Marque"/> 
<h1 class="KEYWORDS-bt hint--right" onclick='KEYWORDSbt();'  aria-label="أداة السيو" > Meta Generator(SEO TOOLS)  </h1>
<div class="KEYWORDS">

<form action="{{route('keywords.store')}}" method="post">

@csrf

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="Topic_ID"/>

@endif

<input type="text"    name="keywords"  size="50px"  placeholder="KEYWORD  كلمات المفتاحية" /><br/> <br/>
<input type="text"    name="description"  size="80px"  placeholder="descriptionوصف الصفحة " />
<input type="text"    name="title"  size="50px"  placeholder="titleعنوان الصفحة " /> 
<input type="text"    name="author"  size="50px"  placeholder="authorأسم مؤلف" /> 
<input type="submit"  name="SEO"  value="send"  class="send"/>
</form>

<form action="{{route('keywords.index')}}"  method="get" >

@csrf
     @method('PUT') 
    
@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>

@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="Topic_ID"/>

@endif
<input name="EditKeyword" type="submit" value="update Meta Generator" class="EDIT_TOPIC" />
</form>
</div>
<script>
function KEYWORDSbt()  {

 $(".KEYWORDS").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
}
</script>

<hr/>
<img src="http://{{$Domain_site}}/Front/ICON/layout_accordion_merged.svg" class="Article-img"/> 
<div class="watch-video"><button id="Article&topic-bt" STYLE="background:#000;" />
<a href="http://{{$Domain_site}}/Front/CMS_VIDEO/instopic.mp4" target="_blank" style="color:#FFF;">HOW TO USE</a></button></div>
<h1 class="Article-bt hint--right" onclick='faqsbt();' aria-label="أسئلة الشائعة"> FAQS & Accordion Panel  </h1><!--<div class="topicopen-buttor"> >> </div> <div class="topicClose-buttor"> << </div>-->

<div class="faqs">
<form action="{{route('faq.store')}}"  method="post" enctype="multipart/form-data">
@csrf

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))
<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif

<input type="text" name="subject"   placeholder="newsubject etc:AccordionFAQSQuestions" />
<br /><br />
<br />
<textarea type="text"   name="content"  placeholder="insert new topic here etc:- AccordionFAQSAnswer" cols="40" rows="10"></textarea>
<!-- <input type="file"  name='upload'   value="search for a file" /> -->
<br /><br />
<br />
<input type="submit"  name="submit" value="send"  class="send2"  />
</form>



<form action="{{route('faq.index')}}" method="get">

@csrf
@method('GET')

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>
@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif
    <input type="SUBMIT" name="EDIT_faqs" VALUE="EDIT_faqs" class="EDIT_TOPIC">
    </form>
</div>
<script type="text/javascript">
function faqsbt(){
 $(".faqs").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
}
</script>







<script>

function loader()   {

$("#loader").delay(1200).fadeOut("fast"); 

}


</script>

</body>


</html>
