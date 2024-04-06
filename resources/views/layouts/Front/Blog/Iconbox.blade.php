
  <!--	Our Services-->

  <section class="section section-sm">

        <div class="container">

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

          @if( $boxitem->BOX_STYLE == 'BOXModel4')

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

@foreach($box as $boxitem)

@if($boxitem->BOX_STYLE == 'BOXModel4')


@if(!empty($boxitem -> cat_Name)  )
  

<h3>

@if(empty(@$_GET['lang']))
  {{ $boxitem->cat_Name }}
@elseif(@$_GET['lang'] == 'fr')
  {{ $boxitem->Fr_cat_Name }}
@elseif(@$_GET['lang'] == 'ar')
  {{ $boxitem->Ar_cat_Name }}
@endif
                    
                    </h3>  


                  
                  
                  </h3>



@endif

          <div class="row row-30">
        
@endif

@endforeach   


@foreach($box as $boxitem)

@if($boxitem->BOX_STYLE == 'BOXModel4')

<div class="col-lg-4"  align='center'  style='text-align: center;'>


<div class="interest_card"   >

<article class="box-icon-classic">
         <div 
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left 
                flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                  <div class="interest_card_img"  style='height:50px;' >
<img src="Front/IMG/{{$boxitem -> ImageName }}" alt="Activities" title="Activities"    style='padding:5px ;'>
</div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title">
                      <a href="index.php?box_ID={{ $boxitem -> ID }}">
                        @if(empty(@$_GET['lang']))
                          {{ $boxitem->title }}
                        @elseif(@$_GET['lang'] == 'fr')
                          {{ $boxitem->Fr_title }}
                        @elseif(@$_GET['lang'] == 'ar')
                          {{ $boxitem->Ar_title }}
                        @endif
                    </a></h5>
                    <p class="box-icon-classic-text">
                      @if(empty(@$_GET['lang']))
                        {{ $boxitem->Desc }}
                      @elseif(@$_GET['lang'] == 'fr')
                        {{ $boxitem->Fr_Desc }}
                      @elseif(@$_GET['lang'] == 'ar')
                        {{ $boxitem->Ar_Desc }}
                      @endif        
                </p>
                  </div>
                </div>
              </article>

 <div class="interest_card_title"    >  <b>
 </div>


</b>  
</a>



</div>


</div>






@endif

@endforeach   






</section>
</div>
</div>

























