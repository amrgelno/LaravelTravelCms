    

@if (auth::guard('admin')->check())


<form action="{{route('slider.index')}}" method="get">

@csrf

@method('PUT')  

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>


@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID)  )
<INPUT TYPE='submit' name='Edit_slider'   title='Edit Slider' class='insert'  
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



@php   $i=0;   @endphp



<div class="row">

<div class="col-11">

<!-- partial:index.partial.html -->
<div class="ag-format-container">
    <div class="layout">
      <ul class="slider">
    @foreach($slider as $slideritem)
        <li style="width: 100px;">
          <img src="Front/IMG/{{$slideritem->ImageName}}" alt="" />
        </li>
    @endforeach
      </ul>
    </div>
  </div>


  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="ei-arrow-left-icon" viewBox="0 0 50 50">
      <path d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17-7.6 17-17 17zm0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15z"></path>
      <path d="M25.3 34.7L15.6 25l9.7-9.7 1.4 1.4-8.3 8.3 8.3 8.3z"></path>
      <path d="M17 24h17v2H17z"></path>
    </symbol>

    <symbol id="ei-arrow-right-icon" viewBox="0 0 50 50">
      <path d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17-7.6 17-17 17zm0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15z"></path>
      <path d="M24.7 34.7l-1.4-1.4 8.3-8.3-8.3-8.3 1.4-1.4 9.7 9.7z"></path>
      <path d="M16 24h17v2H16z"></path>
    </symbol>
  </svg>
</div>
</div>



<style>


/* New Style */

.imgeslider {
    width : 100px;
}

.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}


ul {
  margin: 0;
  padding: 0;
}

.layout {
  width: 600px;
  margin-left: 102px;
  position: relative;
}
.layout a {
  color: #666;
}

.slide {
  display: none;
}
.slide li {
  list-style: none;
}
.slide.slick-initialized {
  display: block;
}

.slick-dots {
  margin-top: 50px;
  margin-left: -5px;
  margin-right: -5px;
  display: flex;
  justify-content: center;
  bottom: -25%;
}
.slick-dots li {
  width: 100px;
  display: inline-block;
  max-height: 100px;
  max-width: 100px;
  margin: 5px;
  height : 100px
}
.slick-dots li img {
  height: 100%;
  width: 100%;
  cursor: pointer;
  opacity: 0.5;
  object-fit: cover;
  border: 5px solid #ffffff;
  border-radius: 50%;
}
.slick-dots li.slick-active img {
  height: 100%;
  width: 100%;
  opacity: 1;
}

.slick-prev,
.slick-next {
  margin: -50px 0 0;

  z-index: 99;
  position: absolute;
  top: 50%;
}
.slick-prev {
  left: -50px;
}
.slick-next {
  right: -50px;
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }
	.slick-slide img{
		width: 56%;
	}
	.layout {
		    margin-left: -48px;
	}
	.slick-dots {
	}
	.slick-dots li {
		margin-bottom : -29px;
	}
}

@media only screen and (max-width: 639px) {
	.layout {
	}
}

@media only screen and (max-width: 479px) {
	.layout {
				    margin-left: -121px;

	}
}
@media (min-width: 400px) and (max-width: 480px) {

	.layout {
		    margin-left: -104px;
	}
}

@media (min-width: 768px) and (max-width: 979px) {
  .ag-format-container {
    width: 750px;
  }
	.layout {
		    margin-left: -35px;
	}
}

@media (min-width: 980px) and (max-width: 1161px) {
  .ag-format-container {
    width: 960px;
  }
	.layout {
	}
}

/* End New Style */




  </style>


<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>




<script>

(function ($) {
  $(function () {


    $('.slider').slick({
      dots: true,
      prevArrow: '<a class="slick-prev slick-arrow" href="#" style=""><div class="icon icon--ei-arrow-left"></div></a>',
      nextArrow: '<a class="slick-next slick-arrow" href="#" style=""><div class="icon icon--ei-arrow-right"></div></a>',
      customPaging: function (slick, index) {
        var targetImage = slick.$slides.eq(index).find('img').attr('src');
        return '<img src=" ' + targetImage + ' "/>';
      },
	  adaptiveHeight: true,
	  arrows: false,
	  respondTo : 'min'	,
      });


  });
})(jQuery);F
</script>












