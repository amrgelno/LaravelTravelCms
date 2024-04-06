@foreach($cover as $cover_item)		


@if(@$_GET['MainM_ID']==1  or empty($_GET['MainM_ID']))





<div class="d-flex flex-wrap justify-content-center home_new_search lazy" data-src="/theme/Com2021/img/home_bg_new.webp" style="background-image: url(&quot;/theme/Com2021/img/home_bg_new.webp&quot;);">


<div class="videoContainer">





<div class="w-100 position-relative d-flex justify-content-center align-items-center" style="height: 100%">

@if (auth::guard('admin')->check())



<form action="{{route('cover.index')}}" method="get">

@csrf

@method('PUT')  

@if(isset($navID) OR  empty($navID))

@if(empty($navID))
<input type="hidden"  name="MainM_ID"   value="1"/>

@else

<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>

@endif
<input type="hidden"  name="page_id"   value="nav_id"/>


@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID)  OR  empty($navID)  )
<INPUT TYPE='submit' name='Edit_cover'   title='change cover' class='insert'  
style="margin: 50% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(Front/ICON/author.png);" value/>  

    @endif


</form>

@endif

<video class="w-100 h-100" src="Front/IMG/{{$cover_item ->Cover_Name}}" autoplay="" loop="" muted="" style="object-fit: cover;"></video>

</div>
</div>
<div class="home_new_search_box_all d-flex align-self-center flex-column">
<div class="home_new_search_box_content_title">
<h1>
 
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

                  {{$cover_item ->cover_title}}
                  

                  @elseif($_GET['lang'] =='ar')

                  {{$cover_item  -> Ar_title}}

                  @endif







</h1>
</div>
<div class="home_new_search_box_desc">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

{{$cover_item ->cover_Desc}}
                  

                  @elseif($_GET['lang'] =='ar')

                  {{$cover_item ->Ar_Desc}}


                  @endif

 </div>


<div class="home_new_search_actions d-flex flex-row justify-content-center align-items-center">
<div class="home_new_search_box_content_btn">
<a href="https://www.egytra.com/tailor-make-your-trip">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

Inquire Now
                  

                  @elseif($_GET['lang'] =='ar')


أستعلام الأن

                  @endif





</a>
</div>



<div class="home_new_search_actions">OR</div>
<div class="home_new_search_box_content_btn_dark">
<a href="https://www.egytra.com/where-to-go">


@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

Discover Travel Packages
                  

                  @elseif($_GET['lang'] =='ar')



عروض الرحلات 
                  


                  @endif





</a>
</div>
</div>
</div>


<div class="home_new_search_bottom align-self-end">
<div class="container">

@if (auth::guard('admin')->check())


<form action="{{route('SNumbers.index')}}" method="get">

@csrf

@method('PUT')  

@if(isset($navID) OR  empty($navID) )

@if(empty($navID))
<input type="hidden"  name="FKStatic_ID"   value="1"/>

@else

<input type="hidden"  name="FKStatic_ID"   value="{{ $navID  }}"/>

@endif


<input type="hidden"  name="page_id"   value="nav_id"/>

@elseif(isset($box_ID))

<input type="hidden"  name="FKStatic_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="FKStatic_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif

@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID) OR  empty($navID) )
<INPUT TYPE='submit' name='EDIT_static'   title='EDIT_static' class='insert'  
style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(Front/ICON/author.png);" value/>  

    @endif

    </form>

@endif



<div class="row">

@foreach($static as $staticitem)


<div class="col-md-3">
<div class="d-flex align-items-center home_new_search_bottom_box">
<div class="home_new_search_bottom_box_icon">
<i class="bi bi-gear"></i>
</div>
<div class="home_new_search_bottom_box_text">
<div class="home_new_search_bottom_box_text_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

{{$staticitem->title   }}
                  

                  @elseif($_GET['lang'] =='ar')




                  {{$staticitem->Ar_title   }}        


                  @endif



</div>
<div class="home_new_search_bottom_box_text_sub_title">
</div>
</div>
</div>
</div>


@endforeach 


</div>
</div>
</div>
</div>
</div>
</div>
</div>







@else


<div class="sites_box d-flex align-items-center" style="background-image: url(Front/IMG/{{$cover_item ->Cover_Name}}); height: 300px">
<div class="new_top_content">
<div class="container">
<div class="new_top_content_title">
<h1>

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

{{$cover_item ->cover_title}}
                  

                  @elseif($_GET['lang'] =='ar')




                  {{$cover_item ->Ar_title}}   


                  @endif


 </h1>
</div>
<div class="new_top_content_desc">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

{{$cover_item ->cover_Desc}} 
                  

                  @elseif($_GET['lang'] =='ar')




                 {{$cover_item ->Ar_Desc}}   


                  @endif






</div>
</div>
<div class="box_overlay"></div>
</div>
</div>

@endif

@endforeach 

