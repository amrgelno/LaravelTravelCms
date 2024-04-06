

@if(!empty($AllArticle))


@foreach($commonposts      as   $articlesItem   )


<div class="blog_content">
<div class="container">
<div class="col-md-12">




<div class="row">
<div class="col-md-12">
<div class="top-destination">
@if(empty (@$_GET['lang']) ) 
                  

                {{$articlesItem->common_posts}}
                  

                  
                  @elseif(@$_GET['lang'] =='fr')
                    {{$articlesItem->Fr_common_posts}}
                   @elseif(@$_GET['lang'] =='ar')

                  {{$articlesItem->Ar_common_posts}}


                  @endif

</div>
</div>
</div>



<div class="row">

@foreach (  $AllArticle     as    $boxitem   )

<div class="col-md-5"style='margin-left: 10px;'>
<div class="article_box card"     >
<div class="lazy article_box_image" 
title="{{$boxitem -> title}}"
 data-src="Front/IMG/{{$boxitem -> ImageName}}" 
 style="background-image: url(./Front/IMG/{{$boxitem -> ImageName}});">
<div class="article_box_content">
<h2 class="article_box_title">
<a href="index.php?box_ID={{ $boxitem -> ID }}" 
title="{{$boxitem -> title}}">
@if(empty (@$_GET['lang']) ) 
                  

                  {{$boxitem -> title}}
                       @elseif(@$_GET['lang'] =='fr')
                       {{$boxitem -> Fr_title}}
                    @elseif(@$_GET['lang'] =='ar')

                      {{$boxitem -> Ar_title}}


                  @endif</a>
</h2>
<div class="article_box_new_all">
<span class="article_box_new_category">
<a href="/blog/Category/attractions"> {{$boxitem -> class}}</a>
</span>
<span class="article_box_new_date">
- 18 Sep 2023 </span>
</div>
</div>
</div>
</div>
</div>

@endforeach


</div>

 {{$AllArticle ->render('Admin.Auth.paginate')}}   

</div>
</div>
</div>

@endforeach


@endif


