@if((@$_GET['MainM_ID']==1)  or empty($_GET['MainM_ID']))

 @if((@$_GET['box_ID']==0))

<div class="container">
<div class="row">
<div class="col-12">
<div class="top-destination"><h3>

@if(empty(@$_GET['lang'])) 
  How it Works
@elseif(@$_GET['lang'] =='fr')
  How it Works
@elseif(@$_GET['lang'] =='ar')
  كيف تعمل
@endif




</h3></div>
</div>
<a href="https://www.youtube.com/watch?v=gPFqICK_zPo?rel=0&amp;autoplay=1" rel="how_it_works">
<div class="how_it_works">
<div class="row">
<div class="col-md-7">
<div class="how_it_works_data d-flex flex-column">
<div class="how_it_works_data_top_desc">
</div>

@if (auth::guard('admin')->check())


<form action="{{route('paragraph.index')}}" method="get">

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
<input type="hidden"  name="page_id"   value="box_ID"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="Topic_ID"/>

@endif


@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID) OR  empty($navID) )

 <INPUT TYPE='submit' name='Editparagraph'   title='Editparagraph' class='insert'  
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


@foreach($paragraph  as    $paragraphitem     )

<div class="how_it_works_data_step d-flex justify-content-start align-items-start">
<div class="how_it_works_data_step_icon">
<i class="bi bi-gear"></i>
</div>
<div class="how_it_works_data_step_text d-flex justify-content-start">
<div class="how_it_works_data_step_text_title">
Step {{$paragraphitem->id}}:
</div>
<div class="how_it_works_data_step_text_sub_title">


@if(empty(@$_GET['lang']) ) 
  {!! $paragraphitem->Paragraph !!}
@elseif(@$_GET['lang'] =='fr')
  {!! $paragraphitem->Fr_paragraph !!}
@elseif(@$_GET['lang'] =='ar')
  {!! $paragraphitem->Ar_paragraph !!}
@endif 

</div>
</div>
</div>

@endforeach
</div>
</div>
<div class="col-md-5">
<div class="how_it_works_video">
<svg class="how_it_works_video_bg">
<rect id="how_it_works_video_bg" rx="100" ry="100" x="0" y="0" width="535" height="340">
</rect>
</svg>
<img class="how_it_works_video_img lazy" alt="How it Works" title="How it Works" src="Front/IMG/how_it_works_video_bg_new.webp">
<div class="local_play">
<i class="fa fa-play"></i>
</div>
</div>
</div>
</div>
</div>
</a>
</div>
</div>


@endif




@else





@endif