  
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
                <h5 class="m-0">Client</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Fill the client form below </h6>

                <p class="card-text">
                      
<form action="{{route('orders.create')}} "    method="post"   enctype="multipart/form-data">

@csrf
@Method('POST')

<textarea name="orders"  cols="30" rows="10"> insert your massage here !</textarea>

<input type="hidden" name="username" value="technicalsupportteam">

<input type="hidden" name="profile_IMG" value="{{$logo}}">

<input type="hidden" name="sender_id" value="0">

<input type="hidden" name="recevier_id" value="{{$member_id}}">

<input type="hidden" name="bg_color" value="#070">

<input type="hidden" name="DIR" value="rtl">

<input type='submit'   class="btn btn-primary"  >


</form>

    </ul>

              
             </p>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                @foreach ($orders as $orders_item)
    <div class='topic-FRAME'>

<div class="img">

<img src="../Front/IMG/{{$orders_item -> profile_IMG}}" style="width:100px; height:100px;"/>  

</div> <br>
{{$orders_item->username}}
<div class="text">

    <br>
 <span> {!! $orders_item->massage !!}  </span>


 {{ $orders_item->Time}}
@endforeach              
    
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

