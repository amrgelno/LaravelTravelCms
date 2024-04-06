<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiktuk | CmsDashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->

  <link href="{{asset('Front/css/all.min.css') }}" rel="stylesheet"  type="text/css"  >
    
  <!-- Theme style -->

  <link href="{{asset('Front/css/adminlte.min.css') }}" rel="stylesheet"  type="text/css"  >


  <style>

@media (min-width: 768px){
body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header {
    transition: margin-left .3s ease-in-out;
    margin-left: 6px;
}
}
</style>
</head>
<body class="hold-transition sidebar-mini">
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"  >Customize_Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.row mb-2 -->
    </div>   <!-- /Content Header (Page header) -->


<div class='Customize Appearance col-md-12' style='display:flex; row:1;' >

            

<div class='setting col-md-8'>

<div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title" style='color:blue'>Customize Appearance &  Layout</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
<hr>

<B> typography   </B>  <br/>  <br/> <br/> 

 <B style='color:blue'> Base Typography : </B>  <br/>

 <form name='Typography'  action='{{route("customize.store")}}' method='POST'  enctype="multipart/form-data">

 @csrf

<Label> Add Font type </Label>
<select name="Fonttype">
<option value="Verdana, Geneva, sans-serif">   Verdana, Geneva, sans-serif         </option>
<option  value="Georgia, Times New Roman, Times, serif">    Georgia, Times New Roman, Times, serif       </option>
<option value="Courier New, Courier, monospace">    Courier New, Courier, monospace       </option>
<option value="Arial, Helvetica, sans-serif">   Arial, Helvetica, sans-serif        </option>
<option value="Tahoma, Geneva, sans-serif">   Tahoma, Geneva, sans-serif        </option>
<option value="Times New Roman, Times, serif">   Times New Roman, Times, serif        </option>
<option value="Palatino Linotype, Book Antiqua, Palatino, serif">    Palatino Linotype, Book Antiqua, Palatino, serif       </option>
<option value="Lucida Sans Unicode, Lucida Grande, sans-serif">  Lucida Sans Unicode, Lucida Grande, sans-serif         </option>
<option value="MS Serif, New York, serif">  MS Serif, New York, serif         </option>
<option value="Comic Sans MS, cursive">   Comic Sans MS, cursive         </option>
</select>  <br/>

<Label> Add Font size</Label>
<select name="Fontsize">
<option value="medium ">   medium        </option>
<option  value="small">   small       </option>
<option value="large">    large      </option>
</select>  &nbsp;    &nbsp;    &nbsp; 

<Label> Add Font style </Label>
<select name="Fontstyle">
<option value="normal">   normal        </option>
<option  value="italic">  italic       </option>
<option value="oblique ">    oblique       </option>
</select>

<Label> Add Fontcolor</Label><input type="color"  name="Fontcolor"/>

<br/>

<B  style='color:blue'> Menu : </B>  <br/>
<Label> Add font color </Label><input type="color"  name="ulcolor"/> <br/>
menu width:<input type="text"  placeholder="set a pixel value"  name="width"  required /> px &nbsp;    &nbsp;    &nbsp;  
menu height:<input type="text"  placeholder="set a pixel value"  name="height"  required /> px  <br/>  <br/>
<Label> Add sub menu color  </Label><input type="color"  name="subcolor"/>   &nbsp;    &nbsp;    &nbsp;  
<Label> Add Dropmenu color  </Label><input type="color"  name="Dropmenu"/>
<br/>


<B style='color:blue'> headline : </B>
<Label> Add Font type </Label>
<select name="headlinefont">
<option value="Verdana, Geneva, sans-serif">   Verdana, Geneva, sans-serif         </option>
<option  value="Georgia, Times New Roman, Times, serif">    Georgia, Times New Roman, Times, serif       </option>
<option value="Courier New, Courier, monospace">    Courier New, Courier, monospace       </option>
<option value="Arial, Helvetica, sans-serif">   Arial, Helvetica, sans-serif        </option>
<option value="Tahoma, Geneva, sans-serif">   Tahoma, Geneva, sans-serif        </option>
<option value="Times New Roman, Times, serif">   Times New Roman, Times, serif        </option>
<option value="Palatino Linotype, Book Antiqua, Palatino, serif">    Palatino Linotype, Book Antiqua, Palatino, serif       </option>
<option value="Lucida Sans Unicode, Lucida Grande, sans-serif">  Lucida Sans Unicode, Lucida Grande, sans-serif         </option>
<option value="MS Serif, New York, serif">  MS Serif, New York, serif         </option>
<option value="Comic Sans MS, cursive">   Comic Sans MS, cursive         </option>
</select>

<br/>

<B style='color:blue'> Page Layout: </B>

<Label> Background color  </Label><input type="color"  name="bgcolor"/> <br/>

<Label> Background Image  </Label><input type="file"  name="bgImage"/>

&nbsp;    &nbsp;    &nbsp;

<Label>container  </Label>  
<select name='container'>
<option value=" container  ">    FullWidth     </option>
<option value=" container-fluid">     Boxed     </option>
</select><br/>


<Label> Business Model (Select App type)  </Label>  
<select name='BusinessModel' required>
@foreach ($view as $viewitem )

@if(isset($viewitem->BusinessModel))
<option   value="{{$viewitem->BusinessModel}}"   align='center'>  Select TOPIC_STYLE </option> 
   <option value="landing_page">   @if(($viewitem->BusinessModel)=='landing_page') current style:- landing_page (onepage) @else  landing_page (onepage)  @endif </option> 
   <option value="Blog"> @if(($viewitem->BusinessModel)=='Blog') current style:- Blog  @else   Blog   @endif  </option> 
   <option value="Blog with member"> @if(($viewitem->BusinessModel)=='Blog with member') current style:- Blog with member @else Blog with member @endif  </option> 
   <option value="E-commerce"> @if(($viewitem->BusinessModel)=='E-commerce') current style:- E-commerce  @else  E-commerce  @endif  </option> 
   <option value="Booking"> @if(($viewitem->BusinessModel)=='Booking') current style:- Booking  @else  Booking  @endif  </option> 

   @else

<option   value="Blog"   align='center'>  Select TOPIC_STYLE </option>   
<option value="landing_page">   landing_page (onepage)   </option>
<option value="Blog">    Blog    </option>
<option value="Blog with member">     Blog with member     </option>
<option value="E-commerce">     E-commerce     </option>
<option value="Booking">     Booking     </option>
 
   @endif



@endforeach

</select><br/>


<label> Language:  </label>

<select name="lang" class="autosubmit" lang="en" dir="ltr" id="sel-lang">

<option value="sq"> Shqip - Albanian</option>
<option value="ar">العربية - Arabic</option>
<option value="hy">Հայերէն - Armenian</option>
<option value="az"> Azərbaycanca - Azerbaijani</option>
 <option value="bn">বাংলা - Bangla</option>
<option value="be">Беларуская - Belarusian</option>
<option value="bg">Български - Bulgarian</option>
<option value="ca">Català - Catalan</option>
<option value="zh_cn"> 中文 - Chinese simplified</option>
<option value="zh_tw">中文 - Chinese traditional</option>
<option value="cs">Čeština - Czech</option>
<option value="da">Dansk - Danish</option>
<option value="nl">Nederlands - Dutch</option>
<option value="en" selected="selected">English</option>
<option value="en_gb">English (United Kingdom)</option>
<option value="et">Eesti - Estonian</option>
<option value="fi">Suomi - Finnish</option>
<option value="fr">Français - French</option>
<option value="gl">Galego - Galician</option>
<option value="de"> Deutsch - German</option>
<option value="el"> Ελληνικά - Greek</option>
<option value="he">עברית - Hebrew </option>
<option value="hu">Magyar - Hungarian</option>
<option value="id">Bahasa Indonesia - Indonesian </option>
<option value="ia">Interlingua</option>
<option value="it">Italiano - Italian </option>
<option value="ja">日本語 - Japanese</option>
<option value="kk"> Қазақ - Kazakh</option>
<option value="ko"> 한국어 - Korean</option>
<option value="nb"> Norsk - Norwegian</option>
<option value="pl"> Polski - Polish</option>
<option value="pt"> Português - Portuguese</option>
<option value="pt_br"> Português (Brasil) - Portuguese (Brazil)</option>
<option value="ro"> Română - Romanian</option>
<option value="ru"> Русский - Russian</option>
<option value="sr@latin">Srpski - Serbian (latin)</option>
 <option value="si"> සිංහල - Sinhala  </option>
<option value="sk"> Slovenčina - Slovak</option>
<option value="sl"> Slovenščina - Slovenian </option>
<option value="es">  Español - Spanish</option>
<option value="sv">Svenska - Swedish </option>
<option value="tr">Türkçe - Turkish</option>
<option value="uk"> Українська - Ukrainian  </option>
<option value="vi">Tiếng Việt - Vietnamese </option>
    
    </select><br/>

<input type="submit" class="btn btn-primary"  value="ok" name="CustomizeAppearance"   /> 

</form>


 </div>
   
   </div>

     </div>



 <div class='input col-md-4'>


  <div class="card card-primary card-outline">
              <div class="card-body">
                
@foreach ($view as $viewitem )

<B style='color:blue'>  current Setting   </B>  <br/> 
<label>Fontstyle : </labeL>  {{$viewitem->Fontstyle}}  <br/>
<label> Fontsize: </labeL>  {{$viewitem->Fontsize}}   <br/>
<labeL>ulcolor: </labeL>   {{$viewitem->ulcolor}}     <br/>
<labeL>Fontcolor: </labeL>  {{$viewitem->Fontcolor}}   <br/>
<labeL>FontType: </labeL>  {{$viewitem->FontType}}    <br/>
<labeL>width: </labeL>  {{$viewitem->width }} px      <br/>
<labeL>height: </labeL>  {{$viewitem->height}}  px   <br/>
<labeL>sub1color: </labeL>  {{$viewitem->sub1color}}   <br/>
<labeL>pagecolor: </labeL> {{$viewitem->bgcolor}}  <br/>
<labeL>bgImage: </labeL> {{$viewitem->bg_Image}}  <br/>
<labeL>headline: </labeL> {{$viewitem->headline}}   <br/>
<labeL>container: </labeL>  {{$viewitem->container}}   <br/>
<labeL>lang: </labeL>  {{$viewitem->lang}}   <br/>
<labeL>BusinessModel: </labeL>  {{$viewitem->BusinessModel}}
@endforeach


 </div>
   
   </div>

     </div>

</div>

<div class='Customize Appearance col-md-12' style='display:flex; row:1;' >
          
<div class='setting col-md-8'>

<div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title" style='color:blue'> Widget Customize </h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
<hr>

<form name='Widget Customize'  action='{{route("customize.store")}}' method='POST'  enctype="multipart/form-data">

@csrf

<label>Social Media </label>  <br/>
<select name='SocialMedia'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select>    <br/>

<label>share Media </label> <select name='shareMedia'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select>     <br/>

<label>Location on Map</label>
<select name='Map'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select>  

<br/>

<label>photo Gallery</label>
<select name='photoGallery'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 

<br/>

<label>chatbot</label>
<select name='chatBot'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 

<br/>

<label>clock</label>
<select name='clock'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 


<br/>


<label>BrandIcon (favicon)</label>
<select name='BrandIcon'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 

<br/>


<label>contactus</label>
<select name='contactus'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 

<br/>

<label>Logo</label>
<select name='logo'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 

<br/>

<label>search Bar</label>
<select name='SearchBar'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 



<br/>


<label>lang section</label>
<select name='langsection'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 



<input type="submit" class="btn btn-primary"  value="ok" name="WidgetCustomize"   /> 


</FORM>
 </div>
   
   </div>

     </div>

 <div class='input col-md-4'>

  <div class="card card-primary card-outline">
     
  
 <div class="card-body">
               
@foreach ($widget as $widgetitem )

<B style='color:blue'>  current Setting   </B>   <br/>

<label>socialMediapanel : </labeL>  {{$widgetitem->socialMediapanel}}  <br/>
<label>share panel : </labeL>  {{$widgetitem->sharepanel}}  <br/>
 <label> clock: </labeL>  {{$widgetitem->clock}}   <br/>
 <labeL>photo Gallery: </labeL>   {{$widgetitem->photoGallery}}     <br/>
 <labeL>chatBot: </labeL>   {{$widgetitem->chatBot}}     <br/>
 <labeL>Map: </labeL>   {{$widgetitem->Map}}     <br/>
 <labeL>contactus:</labeL>   {{$widgetitem->contactus}}     <br/>
 <labeL>logo:</labeL>   {{$widgetitem->logo}}     <br/>
 <labeL>Brand icon:</labeL>   {{$widgetitem->BrandIcon}}     <br/>
 <labeL>Search Bar: </labeL>   {{$widgetitem->SearchBar}}      <br/>
 <labeL>lang section: </labeL>   {{$widgetitem->langsection}}
@endforeach

 </div>
   
   </div>

     </div>

</div>


<div class='Customize Appearance col-md-12' style='display:flex; row:1;' >

            

<div class='setting col-md-8'>

<div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title" style='color:blue'>SEO & SAFETY Setting</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
<hr>

   
<form name='SEO Customize'  action='{{route("customize.store")}}' method='POST'  enctype="multipart/form-data">

@csrf


<B  style='color:blue'> SEO Setting : </B>  <br/>


<label>Domain_site</label>   <input type='text'  name='Domainsite'   >    <br/>

<label>Display_website_Keywords on Search engine</label>
<select name='KEYWORDS'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select>    <br/>

<label>Breadcrumbs</label> <select name='Breadcrumbs'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select>     <br/>

<label>FAQS</label>
<select name='FAQS'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select>  

<label>schema</label>
<select name='schema'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 


<label>Footersitemap</label>
<select name='Footersitemap'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 

<br/>

<label>Microformats_type</label>
<select name='Microformats'>
<option value="schemaorg">    schemaorg     </option>
<option value="vcard">     vcard    </option>
</select> 

<br/>

<B  style='color:blue'> SAFETY Setting : </B>  <br/>

<label>INSPECT TOOL </label>
<select name='INSPECT'>
<option value="  Active   ">    Active     </option>
<option value=" DisActive">     DisActive    </option>
</select> 

<br/>

<label>content of page </label>
<select name='contentpage'>
<option value="  Active   ">   Hide    </option>
<option value=" DisActive">    unhide    </option>
</select> 


&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" class="btn btn-primary"  value="ok" name="SEOCustomize"   /> 


</FORM>


 </div>
   
   </div>

     </div>

 <div class='input col-md-4'>

  <div class="card card-primary card-outline">
              <div class="card-body">
              
   
 @foreach ($SEO as $seoitem )

<B style='color:blue'>  current Setting   </B>   <br/>

<label>Domain_site : </labeL>  {{$seoitem->Domain_site}}  <br/>
<label>KEYWORDS : </labeL>  {{$seoitem->KEYWORDS}}  <br/>
 <label> Breadcrumbs: </labeL> {{$seoitem->Breadcrumbs}}   <br/>
 <labeL>FAQS: </labeL>   {{$seoitem->FAQS}}     <br/>
 <labeL>schema: </labeL>    {{$seoitem->schema}}     <br/>
 <labeL>Microformats: </labeL>   {{$seoitem->Microformats}}     <br/>
 <labeL>Footersitemap: </labeL>        {{$seoitem->Footersitemap}}     <br/>
 <labeL>INSPECT TOOL: </labeL>        {{$seoitem->inspect}}   <br/>
 <labeL>content of page: </labeL>        {{$seoitem->contentpage}}

 
@endforeach


 </div>
   
   </div>

     </div>

</div>

  
  </div>

  </div>

  </div>

  </div>
  </div>
</body>
</html>