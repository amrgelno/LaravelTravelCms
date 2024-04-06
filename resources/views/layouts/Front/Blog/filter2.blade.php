
<div class="col-md-3">
<style>
    .left_filter_all{
        padding: 40px;
        border: solid 1px #eeeeee;
        background-color: #ffffff;
    }
    .left_filter_all_box {
        border-bottom: 1px solid #eeeeee;
        padding: 0 0 15px 0;
        margin: 0 0 15px 0;
    }
    .left_filter_all_box_title {
        font-size: 1.154rem;
        font-weight: 500;
        color: #212121;
        cursor: pointer;
        position: relative;
        margin-bottom: 15px;
    }
    .left_filter_all_box_title::after {
        font-family: 'bootstrap-icons';
        content: "\f235";
        position: absolute;
        right: 0;
        font-size: 1rem;
        color: #212121;
        height: 25px;
    }
    .left_filter_all_box_title.collapsed::after {
        content: "\f229";
    }
    .left_filter_all_box .radio {
        font-size: 1rem;
        text-align: left;
        color: #757575;
        margin-bottom: 10px;
    }
    .left_filter_all_box_data img {
        width: 17px;
        height: 17px;
        line-height: normal;
    }
    .left_filter_all_box .price_range_input input {
        background: 0 0;
        padding: 7px;
        width: 100%;
        border: 0 solid #e3e3e3;
        border-radius: 0;
        color: #7b7b7b;
        text-align: center;
    }
    .left_filter_all_box .ui-widget-header {
        border: 0 solid #757575;
        background: #757575;
        color: #fff;
        font-weight: 700
    }

    .left_filter_all_box .ui-widget-content {
        border: 0 solid #757575;
        background: #eeeeee;
    }

    .left_filter_all_box .ui-slider-horizontal {
        height: 1px
    }

    .left_filter_all_box .ui-state-default,
    .left_filter_all_box .ui-widget-content .ui-state-default,
    .left_filter_all_box .ui-widget-header .ui-state-default {
        border: 0 solid #757575;
        background: #757575;
        font-weight: 700;
        color: #fff;
        border-radius: 50%
    }

    .left_filter_all_box .ui-slider .ui-slider-handle {
        width: 20px;
        height: 20px
    }

    .left_filter_all_box .ui-slider-horizontal .ui-slider-handle {
        top: -10px
    }

    .ui-corner-all,.ui-corner-bottom,.ui-corner-right,.ui-corner-br,.ui-corner-left,.ui-corner-bl,.ui-corner-tr,.ui-corner-tl {
        border-radius: 0
    }
    .slider_range_all {
        margin: 35px 0 20px 0;
    }
</style>

<button class="navbar-toggler" type="button" 
data-bs-toggle="collapse" 
data-bs-target="#Filter_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="d-lg-none navbar-toggler-icon"><strong>Filter</strong></span>
                </button>  




<div class="left_filter_all  collapse navbar-collapse"    id='Filter_nav'>
<form method="post" accept-charset="utf-8" action="/Multi-Country-Tours?/Multi-Country-Tours"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div> <div class="left_filter_all_box">
<div class="checkbox">
<label>
<input name="discount" type="checkbox" onchange="filter(' ')"><span class="checkbox-material"><span class="check"></span></span>
<span class="discount_filter"> Discounted trips ?</span>
</label>
</div>
</div>
<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Country" aria-expanded="true">Country</div>
<div class="left_filter_all_box_data collapse show" id="Country">
<div class="radio">
<label>
<input name="country" type="radio" value="0" id="0" onchange="filter(' ')" checked=""><span class="circle"></span><span class="check"></span> Any </label>
</div>



@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'Country'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio" value="{{$boxitem->title}}" 
id="Country{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>

@if(empty(@$_GET['lang']))
  {{ $boxitem->title }}
@elseif(@$_GET['lang'] == 'fr')
  {{ $boxitem->Fr_title }}
@elseif(@$_GET['lang'] == 'ar')
  {{ $boxitem->Ar_title }}
@endif
</label>


</div>


<script>
    
    function filter{{$boxitem->ID}}() {
  

      var Country{{$boxitem->ID}} = $('#Country{{$boxitem->ID}}').val();

      var colsel = 'Country';

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 


    ID:{{$_GET['MainM_ID']}},
    colsel:colsel,
    filter:Country{{$boxitem->ID}},
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>


@endif
@endforeach
</div>
</div>


<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Price" aria-expanded="true">Price</div>
<div class="left_filter_all_box_data collapse show" id="Price">
<div class="radio">
<label>
<input name="price" type="radio" value="0" id="0" onchange="filter(' ')" checked=""><span class="circle"></span><span class="check"></span> Any </label>
</div>
@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'Price'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio"       value="{{$boxitem->price}}" 
id="price{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>


@if(empty(@$_GET['lang']))
  {{ $boxitem->title }}
@elseif(@$_GET['lang'] == 'fr')
  {{ $boxitem->Fr_title }}
@elseif(@$_GET['lang'] == 'ar')
  {{ $boxitem->Ar_title }}
@endif
</label>


</div>


<script>
    
    function filter{{$boxitem->ID}}() {

      var price{{$boxitem->ID}} = $('#price{{$boxitem->ID}}').val();

      var colsel = 'price';

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 

    ID:{{$_GET['MainM_ID']}},
    colsel:colsel,
    filter:price{{$boxitem->ID}},
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>



@endif
@endforeach
</div>
</div>
<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Days" aria-expanded="true">Number of Days</div>
<div class="left_filter_all_box_data collapse show" id="Days">
<div class="radio">
<label>
<input name="days" type="radio" value="0" id="0" onchange="filter(' ')" checked=""><span class="circle"></span><span class="check"></span> Any </label>
</div>
@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'Duration'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio" value="{{$boxitem->title}}" 
id="Duration{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>

@if(empty(@$_GET['lang']))
  {{ $boxitem->title }}
@elseif(@$_GET['lang'] == 'fr')
  {{ $boxitem->Fr_title }}
@elseif(@$_GET['lang'] == 'ar')
  {{ $boxitem->Ar_title }}
@endif
</label>


</div>


<script>
    
    function filter{{$boxitem->ID}}() {

      var Duration{{$boxitem->ID}} = $('#Duration{{$boxitem->ID}}').val();

      var colsel = 'Duration';

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 

    ID:{{$_GET['MainM_ID']}},
    colsel:colsel,
    filter:Duration{{$boxitem->ID}},
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>



@endif
@endforeach
</div>
</div>
</form>
</div>
</div>






