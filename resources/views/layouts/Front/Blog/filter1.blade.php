
<style>
    .left_filter_all{
     padding: 5px;
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
        color: #01b3a7;
        cursor: pointer;
        position: relative;
        margin-bottom: 15px;
    }

    .left_filter_all_box_title:hover{


border:1px dotted #000;

    }



    .left_filter_all_box_title::after {
        font-family: 'bootstrap-icons';
       /* content: "\f235";*/
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
        font-size: 1.2rem;
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



<div class="col-xs-4 col-md-5 col-sm-12 col-lg-4">


<button class="navbar-toggler" type="button" 
data-bs-toggle="collapse" 
data-bs-target="#Filter_nav" 
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="d-lg-none navbar-toggler-icon"><strong> Filter-> </strong></span>
                </button>


              
<div class="left_filter_all  collapse navbar-collapse"    id='Filter_nav'>
<div class="padding20">
                                <p class="size13">
                                    
                                </p>
                                <p class="size20 bold">
                                   <H3 style='
                        color: #bdc2c7;
                                             '> GoodTours </H3>
                                </p>
                                
                            </div>
@METHOD('$_GET')
<div style="display:none;"><input type="hidden" name="_method" value="POST"></div> 
<div class="left_filter_all_box">
    <br/>
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#SingleCountry" aria-expanded="true">Destinations</div>
<div class="left_filter_all_box_data collapse show" id="SingleCountry" >
<div class="row">
<input name="Country" type="radio" style="display: none" value="0" id="0" onchange="filter(' ')">

@foreach($Allhaveparent as  $Allhaveparentitem )


@if(@($_GET['MainM_ID'])==$Allhaveparentitem->id)

<div class="col-md-12">
<div class="radio">
<label>
<a href='index.php?MainM_ID={{$Allhaveparentitem->id}}'><input name="Country" type="radio"
onchange="filter('{{$Allhaveparentitem->sub1menu}}')" 

value="{{$Allhaveparentitem->id}}" id="{{$Allhaveparentitem->id}}"  checked><span class="circle"></span></a><span class="check"></span> 


@if(empty(@$_GET['lang'])) 
                  
                  
{{$Allhaveparentitem->sub1menu}}

       
                   @elseif(@$_GET['lang'] =='fr')
                 {{$Allhaveparentitem->Fr_sub1menu}}
 
                  @elseif(@$_GET['lang'] =='ar')

                  {{$Allhaveparentitem->Ar_sub1menu}}


                  @endif



</label>
</div>
</div>

@else


<div class="col-md-12">
<div class="radio">
<label>
<a href='index.php?MainM_ID={{$Allhaveparentitem->id}}'><input name="Country" type="radio" value="{{$Allhaveparentitem->id}}" id="{{$Allhaveparentitem->id}}"  ><span class="circle"></span></a><span class="check"></span>

@if(empty(@$_GET['lang'])) 
                  
                  
{{$Allhaveparentitem->sub1menu}}
                     
                 @elseif(@$_GET['lang'] =='fr')
                 {{$Allhaveparentitem->Fr_sub1menu}}
                  @elseif(@$_GET['lang'] =='ar')

                  {{$Allhaveparentitem->Ar_sub1menu}}

               
                  @endif


 </label>
</div>
</div>


@endif

@endforeach




</div>
</div>
</div>


<div class="left_filter_all_box">
<div class="left_filter_all_box_title" 
data-bs-toggle="collapse" href="#SpecialOffer" aria-expanded="true">Special Offers</div>
<div class="left_filter_all_box_data collapse show" id="SpecialOffer">
<div class="radio">
<label>
<input name="Offer" type="radio" value="0" id="0" onchange="filter(' ')" checked=""><span class="circle"></span><span class="check"></span> Any </label>
</div>
@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'Special Offers'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio" value="{{$boxitem->title}}" 
id="TripStyles{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>


@if(empty(@$_GET['lang']) ) 
                  
                  
{{$boxitem->title}} 

                      @elseif(@$_GET['lang'] =='fr')
                        {{$boxitem->Fr_title}} 

                  @elseif(@$_GET['lang'] =='ar')



                  {{$boxitem->Ar_title}} 

               
                  @endif



</label>


</div>


<script>
    
    function filter{{$boxitem->ID}}() {
  
      var TripStyles{{$boxitem->ID}} = $('#TripStyles{{$boxitem->ID}}').val();

      var colsel = 'Special Offers';


     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 


    ID:{{$_GET['MainM_ID']}},
    colsel:colsel,
    lang:<?PHP ECHO  "'" . @$_GET['lang']. "'"   ?>,
    filter:TripStyles{{$boxitem->ID}},
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>







@endif
@endforeach
</div>
</div>

<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#RootCategories" aria-expanded="true">Trip Type</div>
<div class="left_filter_all_box_data collapse show" id="RootCategories">
<div class="row">

<div class="radio">
<label>
<input name="rootCategory" type="radio" value="0" id="0" onchange="filter(' ')" checked=""><span class="circle">

</span><span class="check"></span> Any </label>
</div>



@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'TripType'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio" value="{{$boxitem->title}}" 
id="TripType{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>

@if(empty(@$_GET['lang']) ) 
                  
                  
                  {{$boxitem->title}} 
                  
                           @elseif(@$_GET['lang'] =='fr')
                                  {{$boxitem->Fr_title}} 
                                    @elseif(@$_GET['lang'] =='ar')
                                    {{$boxitem->Ar_title}} 
                  
                                 
                                    @endif </label>


</div>


<script>
    
    function filter{{$boxitem->ID}}() {

      var TripType{{$boxitem->ID}} = $('#TripType{{$boxitem->ID}}').val();

      var colsel = 'TripType';

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 

    ID:{{$_GET['MainM_ID']}},
 lang:<?PHP ECHO  "'" . @$_GET['lang']. "'"   ?>,
    colsel:colsel,
    filter:TripType{{$boxitem->ID}},
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>







@endif
@endforeach


</div>
</div>
</div>
<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Styles" aria-expanded="true">Styles</div>
<div class="left_filter_all_box_data collapse show" id="Styles">
@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'TripStyles'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio" value="{{$boxitem->title}}" 
id="TripStyles{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>


@if(empty(@$_GET['lang']) ) 
                  
                  
                  {{$boxitem->title}} 
                  
                  
                                    @elseif(@$_GET['lang'] =='fr')
                                        {{$boxitem->Fr_title}} 
                                          @elseif(@$_GET['lang'] =='ar')
                  
                                    {{$boxitem->Ar_title}} 
                  
                                 
                                    @endif </label>


</div>


<script>
    
    function filter{{$boxitem->ID}}() {

      var TripStyles{{$boxitem->ID}} = $('#TripStyles{{$boxitem->ID}}').val();

      var colsel = 'TripStyles';

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 


    ID:{{$_GET['MainM_ID']}}, 
    colsel:colsel,
    filter:TripStyles{{$boxitem->ID}},
    lang:<?PHP ECHO  "'" . @$_GET['lang']. "'"   ?>,
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>



@endif
@endforeach
</div>
</div>

<!--<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Range" aria-expanded="true">Price Range</div>
<div class="left_filter_all_box_data collapse show" id="Range">
<div class="slider_range_all">
<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0.0083333%; width: 99.9917%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0.0083333%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
</div>
<div class="price_range_input">
<div class="input text"><input type="text" name="amount" id="amount" values="0,12000"></div> </div>
</div>
</div>-->




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

@if(empty(@$_GET['lang']) ) 
                  
                  
                  {{$boxitem->title}} 
                  
                  
                                    @elseif(@$_GET['lang'] =='fr')
                                          {{$boxitem->Fr_title}} 
                                   @elseif(@$_GET['lang'] =='ar')
                                    {{$boxitem->Ar_title}} 
                  
                                 
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
    lang:<?PHP ECHO  "'" . @$_GET['lang']. "'"   ?>,
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>



@endif
@endforeach
</div>
</div>










<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Duration" aria-expanded="true">Duration</div>
<div class="left_filter_all_box_data collapse show" id="Duration">
<div class="radio">
<label>
<input name="Duration" type="radio" value="0" id="0" onchange="filter(' ')" checked=""><span class="circle"></span><span class="check"></span> Any </label>
</div>
@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'Duration'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio" value="{{$boxitem->title}}" 
id="Duration{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>

@if(empty(@$_GET['lang']) ) 
                  
                  
                  {{$boxitem->title}} 
                  
                  
                                    @elseif(@$_GET['lang'] =='fr')
                                        {{$boxitem->Fr_title}} 
                                   @elseif(@$_GET['lang'] =='ar')  
                  
                                    {{$boxitem->Ar_title}} 
                  
                                 
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
    lang:<?PHP ECHO  "'" . @$_GET['lang']. "'"   ?>,
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>



@endif
@endforeach
</div>
</div>

<div class="left_filter_all_box">
<div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Group" aria-expanded="true">Group Size</div>
<div class="left_filter_all_box_data collapse show" id="Group">
<div class="radio">
<label>
<input name="Group" type="radio" value="0" id="0" onchange="filter(' ')" checked=""><span class="circle"></span><span class="check"></span> Any </label>
</div>


@foreach($boxes as $boxitem)

@if($boxitem->cat_type == 'GroupSize'  &  $boxitem->class=='filteroption1'  )


<div class="radio">
<label>

<input name="rootCategory" type="radio" value="{{$boxitem->title}}" 
id="GroupSize{{$boxitem->ID}}" onchange="filter{{$boxitem->ID}}();"   ><span class="circle">
    
</span>
<span class="check"></span>

@if(empty(@$_GET['lang']) ) 
                  
                  
                  {{$boxitem->title}} 
                  
                  
                                    @elseif(@$_GET['lang'] =='fr')
                                       {{$boxitem->Fr_title}} 
                  
                                    @elseif(@$_GET['lang'] =='ar')
                  
                                    {{$boxitem->Ar_title}} 
                  
                                 
                                    @endif </label>


</div>


<script>
    
    function filter{{$boxitem->ID}}() {

      var GroupSize{{$boxitem->ID}} = $('#GroupSize{{$boxitem->ID}}').val();

      var colsel = 'GroupSize';

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{

    ID:{{$_GET['MainM_ID']}},
    colsel:colsel,
    filter:GroupSize{{$boxitem->ID}},
    lang:<?PHP ECHO  "'" . @$_GET['lang']. "'"   ?>,
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>







@endif
@endforeach
</div>
</div>
</div>
</div>














