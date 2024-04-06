
@include('layouts.frontCDN.framework.headtag')

<body  style="background: url(../Front/IMG/{{$bgimage}})center center / cover fixed;">
<div class="{{$container}}">
<div  style=" background: url(../Front/IMG/seo2.png) left left / cover fixed; background-blend-mode: exclusion; ">   </div>
<div  style="float:right; background:url(Front/IMG/);  ">   </div>
<div class="min-container">
<div class="row">

@include('layouts.Front.loadingsc')

@if($BSModel=='E-commerce')
@include('layouts.frontCDN.framework.vue.Ecom.navcom')
@else

@include('layouts.frontCDN.framework.vue.Blog.nav')

@endif



@if(isset($_GET['search_bt']))


@if($Breadcrumbs=='Active')
@include('layouts.frontCDN.framework.vue.Blog.breadcrumb')
@endif


@if($BSModel=='E-commerce')

@include('layouts.frontCDN.framework.vue.Blog.searchbarresults')


@else


@include('layouts.frontCDN.framework.vue.Blog.searchbarresults')

@endif


@else
<div class="clear"> </div>
<br/>
@include('layouts.frontCDN.framework.slider')
<br/>


@include('layouts.frontCDN.framework.cover')
{{--  @include('layouts.frontCDN.framework.Ecom.marque')  --}}

<section class="fultopic" style='background:unset;'>


@if($Breadcrumbs=='Active')
@include('layouts.Front.SEO Markups.breadcrumb')
@endif


@if($BSModel=='E-commerce')

@include('layouts.frontCDN.framework.vue.Ecom.ECOM')

<article class="categories"  style="opacity: 50;">@include('layouts.frontCDN.framework.vue.Blog.box2')</article>

@else

<article class="topic" >@include('layouts.frontCDN.framework.vue.Blog.topic')</article>
<article class="paragraph">@include('layouts.frontCDN.framework.vue.Blog.paragraph')</article>
<article class="static_box">@include('layouts.frontCDN.framework.vue.Blog.static')</article>
<article class="categories"  style="opacity: 50;">@include('layouts.frontCDN.framework.vue.Blog.box2')</article>

@endif

@endif

</section>


@include('layouts.frontCDN.framework.footer')

      <div id='app'> 

          

     <Myapp/>


   </div> 
    
</div></div></div></body>


<script src="{{mix('js/app.js')}}" ></script> 
</html>



