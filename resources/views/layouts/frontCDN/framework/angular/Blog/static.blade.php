@foreach($static as $staticitem)


@if(!empty($staticitem -> SNumber_Name)  )

  <div class="headline col-sm-7 col-md-7  col-lg-7 ">
      <h2><div class="clear"></div>{{ $staticitem -> SNumber_Name}}    </h2>  </div>
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



       
