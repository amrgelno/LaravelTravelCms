  
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
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
              <div class="card-header">

                <h5 class="card-title"> <strong> < <span>  Software Info </span>> </strong></h5>

</div>
                
                <p class="card-text">
                 
    <!-- <button style="
    width: 22px;
    
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{asset('Front/ICON/tecno.png')}});" title='Editbox' value/> </button>  -->
    
    <ul>  
      
    
    <li style='list-style:none;'> <span style='color:blue;'><small> <>  </small>  source code type:</span> Mvc Design pattern using Open Source tecno   </li> 
    <li style='list-style:none;'> <span style='color:blue;'><small> <>  </small>  web builder:</span>
 <img src="{{asset('Front/ICON/IframeLogo.svg')}}" class='col-lg-2  col-xs-2  col-md-2 col-sm-3' alt="IframeCMS" title="IframeCMS"> Iframe v 1.1.0  </li>
    <li style='list-style:none;'> <span style='color:blue;'><small> <>  </small>  Software Model:</span>   CMS system  </li> 
    <li style='list-style:none;'>  <span style='color:blue;'><small> <>  </small>  StackFrameWork:</span>  PHPLaravel + livewire  </li> 
    <li style='list-style:none;'> <span style='color:blue;'><small> <>  </small>  UI FRAMEWORK :</span> BOOTSTRAP  </li> 

</UL>   </p>

              <!--  <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>-->
              </div>
            </div>


            <br/>

            <div class="card card-primary card-outline  col-12">

<img src="http://{{$Domain_site}}/Front/IMG/{{$path_pic}}"     width="100px" height="70px"    
  style='border-radius:100%;  margin-top: -25px;  border:3px solid #007bff;  '>


              <div class="card-body">
                <h5 class="card-title">Website Info</h5>

                <p class="card-text">
    <li > <span style='color:blue;'> started:-:</span>  {{$started}}  </li>
    <li>  <span style='color:blue;'> company :-:</span> {{$company_name}}  </li> 
    <li> <span style='color:blue;'> App Name:</span> {{ config('app.name', 'Laravel') }}   </li>
    <li> <span style='color:blue;'> Website Domain:</span>  {{$Domain_site}}  </li> 
    <li> <span style='color:blue;'> Domain-Email:</span>   {{$Email}}  </li> 
    <li> <span style='color:blue;'> WBDescription:-:</span>  {{$WBDescription}}  </li>
    <li> <span style='color:blue;'> Web-Model:</span>   {{$BSModel}}  </li> 
                </p>
                <a href="#company" class="card-link">check Your company info</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">User info</h5>
              </div>
              <div class="card-body">
              @if(auth::guard('admin')->user()  )

              <B> <img src="{{asset('Front/ICON/hand.png')}}"  width="50px"  height='30px'  >welcome {{auth::guard('admin')->user()->username }} to IframeCMS    </B>

                <p class="card-text">
                  
                <form action="{{route('accessLog.store')}}" method="post" enctype="multipart/form-data">

                

                @csrf

                <div class="upload">


                @if (empty(auth::guard('admin')->user()->pic))
              <div class="profilepic"  style="margin: 0% 5%;
    width:50px;
    height: 50px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border-radius: 100%;
    /* background: yellow; */
    
    background-position: center;

    background-image: url({{asset('Front/ICON/char.png')}}); ">

@else



<div class="profilepic"  style="margin: 0% 5%;
    width:50px;
    height: 50px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border-radius: 100%;
    /* background: yellow; */
    
    background-position: center;

    background-image: url(http://{{$Domain_site}}/Front/IMG/{{auth::guard('admin')->user()->pic}}); ">





<!-- <div class="profilepic"  style="margin: 0% 5%;
    width:50px;
    height: 50px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border-radius: 100%;
    /* background: yellow; */
    
    background-position: center;

    background-image: url({{asset('Front/ICON/auth::guard(admin)->user()->pic')}}); ">
  
 this code not working 
  
  -->







@endif




<label for="upload"><img src="{{asset('Front/ICON/camera.png')}}"    width="30px" height="30px" class="camera"> </label>
<input type="file" id="upload" name="profilepic" value="upload" style="width:120px; display:none;"> </div>
<li> <label for='username'> username   </label>  <input type='text'  value="{{auth::guard('admin')->user()->username }}"   name='username'   ></li>  <br/>  
<li>   {{auth::guard('admin')->user()->email }} </li>
<li> <label for='userrole'> User_Role   </label>  {{auth::guard('admin')->user()->User_Role }}  </li>  <br/>  
<li> <input type='hidden'   value="{{auth::guard('admin')->user()->id }}"   name="ID" > </li>
<li> <label for='username'> password </label>    <input type='text'  value="{{base64_decode(auth::guard('admin')->user()->token) }}"   name='token' > </li>
<li> <label for='username'> Registration  Date </label>    <input type='text'  value="{{auth::guard('admin')->user()->created_at }}"   name='email' > </li>

<Br/>   
    <input type="submit"  class="btn btn-primary" name="load" value="edit">
     <!-- DB Relation -->
     </form>

    <!-- <a href="#company" >You can check companyinfo here</a> -->


    </ul>

              
@endif              
              </p>
              </div>
            </div>
            </div>

            <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <nav>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">Profile</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" tabindex="-1">Contact</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
        </div>
        </div></div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>


