<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->



   
    <div  class='col-md-4'>

    <img src="{{asset('Front/IMG/IframeLogo.png')}}"  class='col-md-6 d-xs-none' alt="IframeCMS" title="IframeCMS">



</div>



@include('Admin.Auth.inputheaders')


<ul class="navbar-nav">
     
       <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Navbar Search -->
      <li class="nav-item">

 <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
           <!--   <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>  -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a    class="nav-link"   title='client Massage   طلبيات العميل' href="#client_req">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
       <!-- <a   href="#static"  class="nav-link"  title="زيارات الموقع" href="#">
          <i class="far fa-bell"  ></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>-->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a    >
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
     <li class="nav-item">
        <a href="#nav"   title="ادارة لينكات الموقع" class="nav-link" data-slide="true" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">

    <img src="{{asset('Front/ICON/IframeLogo.svg')}}"  class='col-xs-12 d-lg-none d-md-none' alt="IframeCMS" title="IframeCMS">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">


        <div class="image">

 
        </div>

        <font size='+1'><i class="nav-icon fas fa-tachometer-alt"></i></font> &nbsp; &nbsp;
    
          <a href="#" class="d-block">Iframe Dashboard</a>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas   fa-info-circle" ></i>
              <p class="hint--right" aria-label="معلومات عامة عن النظام">
              General sys info 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#userinfo" class="userinfo nav-link">
                  <i class="far fa-circle nav-icon" ></i>
             <p class="hint--right" aria-label="معلومات مستخدم">General info</p>  
                </a>
              </li>
              <li class="nav-item">
                <a href="#static"  name='staticinfo' class="nav-link">
                  <i class="far fa-circle nav-icon" ></i>
                  <p class="hint--right" aria-label="تحليل الموقع"> Web_Anayltic </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copyright" class="hint--right"></i>
              <p>
              commercial info 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#company" class="nav-link">
                  <i class="far fa-circle nav-icon" ></i>
                  <p class="hint--right" aria-label="معلومات الشركة">company info </p>
                </a>
              </li>
             <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="معلومات الموقع">website info </p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon  fas  fa-link"></i>
              <p class="hint--right" aria-label="المظهر">
              Appearance / pages
              <i class="right fas fa-angle-left"></i>
              </p>
            </a>


            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#nav" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="ادارة لينكات الموقع">pages_links </p>
                </a>

              </li>

              <li class="nav-item">
                <a href="#Customize"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p  class="hint--right" aria-label="أدارة الثيمات والميزات "> Customize Theme & features </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('webview')}}"  target='_blank' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label=" رؤية الثيمات"> view Theme  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p  class="hint--right" aria-label="المرشد و الاعدادت">
              Guide&setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#Guide" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>guide to setting  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p  class="hint--right" aria-label="الدعم الفني"> technical support </p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copyright"></i>
              <p   class="hint--right" aria-label="ادوات المتجر">
              E-Commerce TOOLS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#client_req" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="طلبيات العميل"> Client_orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#clientcomment" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="تعليقات العميل">Client_COMMENT</p>

                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copyright"></i>
              <p class="hint--right" aria-label="أدوات السيو">
              SEO TOOLS 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://www.duplichecker.com" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="أدوات فحص الأقتباس"> plagiarism-checker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://www.seoreviewtools.com/content-analysis/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="أداة تحليل المحتوى">content-analysis</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copyright"></i>
              <p class="hint--right" aria-label="المعلومات التجارية">
              commercial info 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#company" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="معلومات الشركة">company info </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="معلومات الموقع">website info </p>
                </a>
              </li>
            </ul>
          </li>

         
@if(auth::guard('admin')->user()->User_Role   == 'Admin'  )
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tools"></i>
              <p  class="hint--right" aria-label="لوحة تحكم الادمن">
              Admin control panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#Dashboard_Users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="سجل المسخدمين">Dashboard_Users</p>
                </a>
              </li>


             <li class="nav-item">
                <a href="{{route('Admin.register')}}" target='_blank' rel='noopener noreferrer' class="nav-link"  onclick="performCalc()">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="تسجيل مستخدم">New_users</p>
                </a>
              </li>  

              <li class="nav-item">
                <a href="#jobreq" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="طلبات التوظيف">job request</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="hint--right" aria-label="الغاء عضوية"> Delete reg </p>
                </a>
              </li>
             
            </ul>
          </li>
@endif

          <li class="nav-item">
            <a href="{{route('Admin.LogOut')}}" class="nav-link" class="hint--right" aria-label="تسجيل خروج">
            <!-- <i class="nav-icon fas fa-th"></i>   --> <i class="nav-icon fas fa-window-close"  ></i> 
             logout 
           

                <span class="right badge badge-danger">New</span>
            
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <div id='userinfo'> 

  @yield('user') </div>
  <div id='Customize'>
    
  
  @yield('Customize') </div>
  <div id='clientcomment'>   @yield('clientcomment')   <</div>
  <div id='jobreq'> @yield('jobreq') </div>
  <div id='static'> @yield('static') </div>
  <div id='company' >  @yield('company') </div>
  <div id='nav'> @yield('nav') </div>
  <div id='Dashboard_Users'> @yield('Dashboard_Users') </div>
  <div id='New_users'> @yield('New_users') </div>
  <div id='client_req'> @yield('Client_Request') </div>
  <div id='Guide'> @yield('Guide') </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Tiktuk</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{asset('Front/JS/jquery.min.js')}}" type="text/javascript"  defer></script>

<!-- Bootstrap 4 -->
<script src="{{asset('Front/JS/bootstrap.bundle.min.js')}}" type="text/javascript"  defer></script>
<!-- AdminLTE App -->
<script src="{{asset('Front/JS/adminlte.min.js')}}" type="text/javascript"  defer></script>



<script>

const links = document.querySelectorAll('.nav-treeview  .nav-item  .nav-link');
    
    if (links.length) {
      links.forEach((link) => {
        link.addEventListener('click', (e) => {
          links.forEach((link) => {
              link.classList.remove('active');
          });
         // e.preventDefault();
          link.classList.add('active');
        });
      });
    }

    </script>
