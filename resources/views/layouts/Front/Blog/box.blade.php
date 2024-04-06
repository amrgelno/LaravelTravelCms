
@php   $i=0;   @endphp


@foreach($box as $boxitem)

@if($boxitem->BOX_STYLE == 'BOXModel1'  &&  $loop->iteration  <= 1   )

<div class="col-md-9"  style='margin-left:50px;'>
<div class="sort_top d-flex align-items-center justify-content-between">
<div class="prog_count">

Found <span id="programs_count">


{{$boxitem->where('nav_id',$boxitem->nav_id)->where('BOX_STYLE',$boxitem->BOX_STYLE)->count('ID')}} 

</span>

Tours




</div>



<style>
    .home_sub_filrers{
        font-size: 1.154rem;
        font-weight: bold;
    }
    .home_sub_filrers select {
        border: 0;
        margin: 0 0 0 10px;
        padding: 0 20px 0 0;
        background-image: none;
    }
</style>

<div class="home_sub_filrers d-flex align-items-center justify-content-between">
<div>Sort by</div>
<div class="search_filters" id="select">
<form action="" method="get">
<select class="form-select" name="sort" id="sortcat"   onchange="sortfilter()">
<option value="order" selected="selected">Recommended</option>
<option value="price_desc"  >High to Low Price</option>
<option value="price_asc"  >Low to High Price</option>
<option value="dur_asc"  >Short to Long Duration</option>
<option value="dur_desc" >Long to Short Duration</option>
</select>
<input type="hidden" id="getSortType" value="">
<input type="hidden" name="Offer" value="">
<input type="hidden" name="Country" value="">
<input type="hidden" name="Category" value="">
<input type="hidden" name="Style" value="">
<input type="hidden" name="Group" value="">
<input type="hidden" name="Activity" value="">
<input type="hidden" name="Duration" value="">
<input type="hidden" name="price" value="">
</form>
</div>
</div>
</div>



@endif

@endforeach



<script>
    
    function sortfilter() {
  

      var sortcat = $('#sortcat').val();





     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 


    ID:{{@$_GET['MainM_ID']}},
   // colsel:colsel,
    filter:sortcat,
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>








<style>
        .site_single_tag {
            border: 1px solid #757575;
            padding: 5px 10px;
            margin: 8px 8px 8px 0;
            color: #757575;
            font-size: 1.154rem;
        }
        .site_single_tag:hover {
            border: 1px solid #F5A31B;
            color: #F5A31B;
        }
    </style>





<div class="sort_top siteTags d-flex flex-wrap align-items-center justify-content-start">
@foreach($box as $boxitem)

@if($boxitem->BOX_STYLE == 'BOXModel1')


@if(!empty($boxitem -> cat_Name)  )
<a class="site_single_tag"     title="Classic Tours"  
onClick='filter{{$boxitem->ID}}();'   >  


<input name="rootCategory" type="radio" value="{{$boxitem -> cat_Name}}"  id="Tripcat{{$boxitem->ID}}"  checked=""><span class="circle">

<span class="check"></span>


@if(empty(@$_GET['lang']) ) 
                  

               {{$boxitem ->cat_Name}}
                   @elseif(@$_GET['lang'] =='fr')
                     {{$boxitem ->Fr_cat_Name}}

                  @elseif(@$_GET['lang'] =='ar')

                 {{$boxitem ->Ar_cat_Name}}

                  @endif






 </label>


 </a>


@endif

        
@endif






@endforeach   
</div>











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

          @if( $boxitem->BOX_STYLE == 'BOXModel1')

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





<div class="col-8 col-lg-12" >


<div class="row" id="programs">


@foreach($box as $boxitem)

@if($boxitem->BOX_STYLE == 'BOXModel1' )



<div class="card col-lg-3" 
style="background-image: url(./Front/IMG/{{$boxitem->ImageName}}); background-size: cover;"
  data-src="Front/IMG/{{$boxitem->ImageName}}">


    <div class="content">
      <h2 class="title"> 
                  

      @if(empty(@$_GET['lang']) ) 
                  

                  {{$boxitem ->title}}
                    @elseif(@$_GET['lang'] =='fr')
                      {{$boxitem ->Fr_title}}
                  @elseif(@$_GET['lang'] =='ar')

                  {{$boxitem ->Ar_title}}


                  @endif
                  

                   </h2>


      <p class="copy"> 
                  

      @if(empty(@$_GET['lang']) ) 
                  

                  {!!$boxitem ->Desc !!}
                     @elseif(@$_GET['lang'] =='fr')
                       {!!$boxitem ->Fr_Desc !!}
                  @elseif(@$_GET['lang'] =='ar')

                  {!!$boxitem -> Ar_Desc !!}


                  @endif                  

                  </p>

                  <div class="programBox_days">
                  {{$boxitem -> 	DayTime }}  </div>



            
                             <button class="btn"><a href="index.php?box_ID=173&amp;lang=">
                   <a href="index.php?box_ID={{ $boxitem -> ID }}&lang=<?php  echo @$_GET['lang']  ?>">
                  View tours </a> </button>



  </div>











</div>






@endif
@endforeach

</div>
        

</div>







<div id="loader_div"></div>



{{$box->render('Admin.Auth.paginate')}}   

</div>
</div>








@foreach($box as $boxitem)


@if($boxitem->BOX_STYLE == 'BOXModel1')


@if(!empty($boxitem -> cat_Name)  )

<script>
    
    function filter{{$boxitem->ID}}() {
  

      var Tripcat{{$boxitem->ID}} = $('#Tripcat{{$boxitem->ID}}').val();

      var colsel = 'cat_type';

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#programs').load('{{route('Findtours')}}',{	 


    ID:{{@$_GET['MainM_ID']}},
    colsel:colsel,
    filter:Tripcat{{$boxitem->ID}},
    lang:{{@$_GET['lang'] }},
    token:"{{csrf_token()}}",
    Method:"POST"});


	}
	
    </script>
@endif   @endif


@endforeach   

















































































