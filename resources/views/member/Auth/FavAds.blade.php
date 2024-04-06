  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DashBoard-Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0"> favourites Ads اعلاناتك المفضلة</h5>
              </div>
              <div class="card card-primary card-outline">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">
                  
                @if(auth::guard('member')->user()  )

@foreach ($cart as $cart_item)
    <div class='topic-FRAME'>

<div class="img">

<img src="../Front/IMG/{{$cart_item -> Image1}}" class="img"/>

</div>
<div class="text">
<a href="index.php?Topic_ID={{$cart_item -> ID}}">
     {{$cart_item->product_Model}}  </a>
    
    <br>
 <span> {!! $cart_item->product_Des !!}  </span>


 

 <br/>   <br/> 

 

<input  type="hidden"   name="IDf" id="IDf{{auth::guard('member')->user()->id}}"  value="{{auth::guard('member')->user()->id}}" />


<input  type="hidden"   name="Off_id"  value="{{$cart_item->PROD_ID}}" id="Off_id{{$cart_item->id}}" />                       

<input  type="hidden"   name="IDm"  id="IDm39"  value="0" />

<button  name="submit" type="button"   id="btfx{{$cart_item->id}}"  
onclick="Delfav{{$cart_item->id}}();"/> Remove from favorite
   </button> 

  <button   type="button"   id="btmx"  onclick="Addfav{{$cart_item->id}}();"/>
  Add to favorites</button> 
                                                  
                          
</div>


</div>



<div id="prod_dt">  </div>


<script>
    
    function Addfav{{$cart_item->id}}() {

		var IDf= $('#IDf{{auth::guard('member')->user()->id}}').val();
     var Off_id = $('#Off_id{{$cart_item->id}}').val();

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#prod_dt').load('{{route('ADD_fav')}}',{	 
Off_id:Off_id,     
       IDf:IDf,token:"{{csrf_token()}}",Method:"POST"});
	}
	
    </script> 




<script>
    
    function Delfav{{$cart_item->id}}() {

		var IDf= $('#IDf{{auth::guard('member')->user()->id}}').val();
     var Off_id = $('#Off_id{{$cart_item->id}}').val();

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#prod_dt').load('{{route('Del_fav')}}',{	 
Off_id:Off_id,     
       IDf:IDf,token:"{{csrf_token()}}",Method:"POST"});
	}
	
    </script> 


@endforeach @endif


                        
              </p>
              </div>
            </div>

          
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  </div>

  </div>
  </div>