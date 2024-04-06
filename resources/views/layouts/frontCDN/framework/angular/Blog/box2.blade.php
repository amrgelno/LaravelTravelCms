
@foreach($box as $boxitem)


  @if(!empty($boxitem -> cat_Name)  )

    <div class="headline col-sm-7 col-md-7  col-lg-7 ">
        <h2><div class="clear"></div>{{ $boxitem -> cat_Name}}    </h2>  </div>
    @endif

    @endforeach

    @foreach($box as $boxitem)

        
                <card class="categoriescard">
                <overlay><div class="FRAME" >
                <div class="imgb"><img src="Front/IMG/{{$boxitem -> ImageName}}" class="front"> 
                <div class="titleb"><a href="index.php?box_ID={{ $boxitem -> ID }}" id="linker">{{ $boxitem -> title }}</a>
              </div></div></div></overlay></card>




                
      
@endforeach


{{--  <script src="{{asset('Front/Js/jquery-3.6.0.min.js') }}"  type="text/javascript"  defer></script>  --}}
