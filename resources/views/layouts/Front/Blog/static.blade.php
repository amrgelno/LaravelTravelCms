@foreach($static as $staticitem)


@if(!empty($staticitem -> SNumber_Name)  )

  <div class="headline col-sm-7 col-md-7  col-lg-7 ">
      <h2><div class="clear"></div>{{ $staticitem -> SNumber_Name}}    </h2> 
    
    
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
 

    
      
    </div>
  @endif

  @endforeach
    
    <!-- <div class="headline col-sm-6 col-md-6  col-lg-7 "> <h1><div class="clear"></div>اعمالنا بالارقام    </h1>  </div> -->
                 
    @foreach($static as $staticitem)
   
    
    <div class="FRAME_static" >

          <div class="img1_static">		
<img src="Front/IMG/{{ $staticitem -> ImageName}}" loading='lazy' title='Asphallt.png'  alt='{{ $staticitem -> ImageName}}'  style="filter: brightness(2) invert(5);" class="front_static"/>

<div class="title_static">  
   <span class="title_s" style='color:black;'>{{ $staticitem -> title}}</span>  <br/>
   <span class="counter" style='color:#418bca;' data-target='{{ $staticitem -> SNumber_Num}}'> 0 </span>
 <span class="targetval" style='color:#418bca; display:none;'> {{ $staticitem -> SNumber_Num}}</span>

		</div>


		</div>
                </div>
		    
                @endforeach



       
