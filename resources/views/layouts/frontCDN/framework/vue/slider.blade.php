<!-- Use downloaded version of Bootstrap -->
<section class="slider col-lg-12 col-xs-12 col-md-12 col-sm-12" >
<div class="sliderimg col-lg-12 col-xs-12 col-md-12 col-sm-12"><!--str slider img -->
    <div id="theCarousel" class="carousel slide" data-ride="carousel">
      <!-- Define how many slides to put in the carousel -->
    <!-- slider carousel inner -->
 <!-- <ol class="carousel-indicators">
  @foreach($slider as $slideritem)
	@if (!empty($slideritem->Image))
   <li data-target="#theCarousel" data-slide-to="{{$slideritem->Image}}" >  </li >
  @endif
   @endforeach
  </ol >-->
  @foreach($sliderMin as $MinItem)


    <div class="carousel-inner">
    <div class="item active" >
    <div class ="slide1"><img src="Front/IMG/{{$MinItem->ImageName}}"  loading='lazy' class="Image"  /></div>
    <div class="carousel-caption"><Font size='5px'>{{$MinItem->title}}  </Font> </div>
    </div>


        @endforeach




        @foreach($sliderMax as $MaxItem)



	@if (!empty($MaxItem->ImageName))

    <div class="item">
    <div class="slide2"><img src="Front/IMG/{{$MaxItem->ImageName}}" loading='fast' class="Image"  /></div>
    <div class="carousel-caption"><Font size='5px'> {{$MaxItem->title}} </Font> </div>
     </div>

     @endif
   @endforeach
      </div>

      <!-- end  slider carousel inner -->

    </div>
</div>
<!-- Set the actions to take when the arrows are clicked-->
<!--<a class="left carousel-control" href="#theCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left">  </span>
</a>
<a class="right carousel-control" href="#theCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>--></section>


