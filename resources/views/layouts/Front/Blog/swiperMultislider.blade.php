



@if((@$_GET['MainM_ID']==1)  or empty($_GET['MainM_ID']))

@if((@$_GET['box_ID']==0))

<div class="container"    style='margin-bottom: 100px;' >


@if (auth::guard('admin')->check())


<form action="{{route('box.index')}}" method="get">

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


@foreach($box as $boxitem)

          @if( $boxitem->BOX_STYLE == 'BOXModel3')

          @if(!empty($boxitem -> cat_Name)  )
        

   <input type="hidden"  name="cat_Name"   value="{{ $boxitem -> cat_Name}}"/>



          @endif

          @endif

            @endforeach




<INPUT TYPE='submit' name='updateBox'   title='Edit categeories' class='insert'  
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






</div>
</div>

@if(@$_GET['MainM_ID']==1  or   empty($_GET['MainM_ID']))

<div class="swiper mySwiper">


@endif



@if(@$_GET['MainM_ID']==1  or   empty($_GET['MainM_ID']))

<div class="owl-carousel owl-classic owl-dots-secondary wow slideInRight " data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">


      @endif

      @foreach($box as $boxitem)


@if($boxitem->BOX_STYLE == 'BOXModel3'      &&   $boxitem->visibility=='Active'     )



<article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="Front/IMG/{{$boxitem -> ImageName }}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" 
              href="Front/IMG/{{$boxitem -> ImageName }}" data-lightgallery="item"><img src="Front/IMG/{{$boxitem -> ImageName }}" alt="" width="270" height="195"/></a>
              </div>
            </article>
@endif

@endforeach



         </div>

         <div  class="swiper-pagination"   style="
    display: flex;
    flex-wrap: nowrap;
    margin-left: 40%;
    align-content: flex-end;
    justify-content: space-around;"></div>


    </div>






 <!-- If we need navigation buttons -->
 
</div>

</div>

@endif
@endif



