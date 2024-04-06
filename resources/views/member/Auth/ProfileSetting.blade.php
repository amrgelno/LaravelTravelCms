  
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
<style>

.img{
width:100px;
height:100px;

}

</style>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">projects</h5>
              </div>
              <div class="card card-primary card-outline">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">
                  

    <label for="seles_info"> معلومات البائع</label> <br />
  

<form action="{{route('member.update')}}"   method='post'  enctype="multipart/form-data">     

@csrf

<input  type="hidden"   name='prof_id'   value="{{auth::guard('member')->user()->id }} "  />   

الشركة  :- <input  type="text"   name='username' value="{{auth::guard('member')->user()->username }}"   placeholder="Yourcompany"   />            <br /><br />
المنطقة :- <input  type="text"  name='Distantion'   value="{{auth::guard('member')->user()->Distantion}}"   placeholder="distantion"   />                        <br />   <br/>
المحافظة:-<input  type="text"  name='country'   value="{{auth::guard('member')->user()->country}}"   placeholder="country" />                    <br />   <br/>


<label for='image'>    uploadimage     </label>   


<input class='input-sm'   type='file'  name='prof_pic'   placeholder='uploadimage'  required   >  <br/>



                            <br/>

<hr />

<label for=""> معلومات الاتصال  </label><br /><br />   
                        <br /><br />
رقم موبيل :- <input  type="text"  name='mobile' value="{{auth::guard('member')->user()->mobile}}"   placeholder="Yourmobile"   name="Mobile"/>                       <br/><br />
facebook:-  <input  type="text"   value="{{auth::guard('member')->user()->facebook}}"   placeholder="facebook"   name="facebook"/>                         <br /><br />
instgrame:-  <input  type="text"   value="{{auth::guard('member')->user()->instgram}}"   placeholder="instgram"   name="instgram"/>                         <br/><br />
olx:-   <input  type="text"   value="{{auth::guard('member')->user()->olx}}"   placeholder="olx"   name="olx"/>                      
password:-<input  type="text"    value="{{base64_decode(auth::guard('member')->user()->remember_token)}}"      name="password"/>

<hr/>
<div   align="center">  اعدادت بطاقه الكترونيه  </div> 


<input type="text"  name="visa"  value="{{auth::guard('member')->user()->visa}}"   /> 

&nbsp;  &nbsp;  &nbsp; <input type="submit" value="تعديل" name="ad_visa" />

</FORM>

</DIV>



<div>

<hr/> 
<form action="{{route('member.destory')}}" method="Post">

@csrf
@method('DELETE')
<input  type="hidden"   name='prof_id'   value="{{auth::guard('member')->user()->id }} "  />   

&nbsp;  &nbsp;  &nbsp; <input type="submit" value="حذف العضوية" name="DeleteMember" />

</form>

</div>
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
  <!-- /.content-wrapper -->


  
  
