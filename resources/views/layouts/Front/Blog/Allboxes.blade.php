
@if((@$_GET['MainM_ID']==1)  or empty($_GET['MainM_ID']))

 @if((@$_GET['box_ID']==0))

@if(!empty($Allboxes))


<section class="section section-lg section-top-1 bg-gray-4 allboxs">
  
<div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">

@foreach($Allboxes as $boxitem)


@if($boxitem->BOX_STYLE == 'BOXModel1'   &&   $boxitem->visibility=='Active')


                <div class="col-md-4 wow fadeInDown col-9"  data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="index.php?box_ID={{ $boxitem -> ID }}&lang=<?php  echo @$_GET['lang']  ?>">
                    <img src="Front/IMG/{{$boxitem -> ImageName }}" alt="{{$boxitem -> title}}" width="368" height="420"/></a>
                      <h5 class="box-categories-title">
                        
                      @if(empty(@$_GET['lang']) ) 
                  

                  {{$boxitem ->title}}
                   @elseif(@$_GET['lang'] =='fr')
                      {{$boxitem ->Fr_title}}
                  @elseif(@$_GET['lang'] =='ar')

                  {{$boxitem ->Ar_title}}


                  @endif

                </h5>
                    </li>
                  </ul>
                </div>

@endif
@endforeach

</div>
</div>
</div>
</div>


                @foreach($commonposts      as   $articlesItem   )

                <a class="link-classic wow fadeInUp" style="font-weight: bold;" href="#">  

@if(empty(@$_GET['lang']) ) 
                  


  
{{$articlesItem->common_posts}}
                  
                   @elseif(@$_GET['lang'] =='fr')
                   {{$articlesItem->Fr_common_posts}}


                  @elseif($_GET['lang'] =='ar')

                  {{$articlesItem->Ar_common_posts}}


                  @endif
             


 <span></span>          

</a>



@endforeach


            
      </section>

      @endif
      @endif
      @endif
