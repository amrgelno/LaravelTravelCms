@if((@$_GET['MainM_ID']==1)  or  empty($_GET['MainM_ID']))

  

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

          @if( $boxitem->BOX_STYLE == 'BOXModel5')

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


@foreach($Allboxes as $boxitem)

@if($boxitem->BOX_STYLE == 'BOXModel1'     &&  $loop->iteration  <= 1)

<div class="programBox_title" style="text-align:center">
<h2>
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

                 Hot Tours
                  

                  @elseif($_GET['lang'] =='ar')

                  أبرز رحلات

                  @endif </a>
</h2>

@endif
</div>
@endforeach

<article id="categories" class="categories col-lg-9 justify-content-center" style = "gap: 70px; margin-top:15px;"  >


@foreach($Allboxes as $boxitem)


@if($boxitem->BOX_STYLE == 'BOXModel1')


@if(!empty($boxitem ->cat_Name)  )

<card>
                   <overlay class="Overlay">
                     <div class="FRAME wow fadeInRight"
                      style="background: none; border: none;                  
                      
                      visibility: visible; animation-name: fadeInRight;">
                     <div class="imgbt1">
                       <img src="Front/IMG/{{$boxitem -> ImageName }}"
                        class="front">
                       <div class="titlebt1">
                       <a href="index.php?cat_Name={{ $boxitem -> cat_Name }}">
                                               
                         @if(empty(@$_GET['lang']) ) 
                           

                  {!!$boxitem ->cat_Name !!}
                      @elseif(@$_GET['lang'] =='fr')
                  {!!$boxitem ->Fr_cat_Name !!}
                  @elseif(@$_GET['lang'] =='ar')

                  {!!$boxitem ->Ar_cat_Name !!}


                  @endif
                
                </a>
                        </div></div></div></overlay>
                        <!----><strong style="color: blue;">
                        <strong><strong><strong></strong></strong></strong></strong>
                      </card>

                      @endif

@endif
@endforeach


</article>

</div>

@endif

