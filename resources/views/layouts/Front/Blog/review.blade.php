@if((@$_GET['MainM_ID']==1)  or empty($_GET['MainM_ID']))

 @if((@$_GET['box_ID']==0))

<div class="row">
<div class="col-12">
<div class="home_new_box_title">

@if(empty(@$_GET['lang']) ) 
   Reviews
@elseif(@$_GET['lang'] =='fr')
   Reviews
@elseif(@$_GET['lang'] =='ar')
   الآراء
@endif
</div>
</div>
<div class="col-12">
<div id="feefo-service-review-carousel-widgetId" class="feefo-review-carousel-widget-service"></div>
</div>
</div>


@endif


@endif