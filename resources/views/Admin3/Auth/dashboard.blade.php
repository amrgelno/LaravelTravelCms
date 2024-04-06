<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iframe | CmsDashboard</title>

    <!-- Google Font: Source Sans Pro -->

    <link rel="apple-touch-icon" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="/{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="/{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="icon" href="{{ asset('Front/IMG/IframeLogo.png') }}" type="image/x-icon" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->

    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme style -->

    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('Front/css/hint.min.css') }}" rel="stylesheet" type="text/css">





</head>

<style>
    #userinfo {

        display: none;
    }


    #userinfo:active {

        background: white;
    }



    #userinfo:focus-within #dashboardloader {
        margin-top: 0px;
        position: fixed;
        background: rgb(240 242 246);
        z-index: 50;
        width: 100%;
        height: 1950px;
        display: block;

    }



    #dashboardloader {
        margin-top: 0px;
        background: rgb(240 242 246);
        z-index: 50;
        width: 100%;
        height: 1950px;
        display: block;

    }





    #New_users {
        display: none;

    }

    #New_users:target {

        display: block;
    }



    #userinfo:target {

        display: block;
    }


    #static {
        display: none;
    }

    #static:target {

        display: block;
    }

    #company {

        display: none;
    }


    #company:target {

        display: block;
    }


    #nav {

        display: none;
    }

    #nav:target {

        display: block;
    }

    #Dashboard_Users {

        display: none;
    }


    #Dashboard_Users:target {

        display: block;

    }


    #Customize {

        display: none;

    }

    #Customize:target {

        display: block;

    }


    #Guide {

        display: none;
    }

    #Guide:target {

        display: block;

    }


    #client_req {
        display: none;
    }


    #client_req:target {
        display: block;
    }





    #jobreq {

        display: none;


    }


    #jobreq:target {
        display: block;
    }


    #clientcomment {

        display: none;


    }

    #clientcomment:target {
        display: block;
    }



    iframe.iframe {
        margin-left: 19%;
        resize: auto;
        overflow: visible;
        border: unset;
    }
</style>



<body onload='loading();' onload='loading();' class="hold-transition sidebar-mini" style="background-Image:url({{ asset('Front/ICON/') }}) ;          background-repeat: no-repeat;
    background-size: cover;
    background-position-x: 50%;
   /* background-blend-mode: luminosity;*/
    zoom: 100%;
    opacity: 0.95;">

    @include('Admin.Auth.loadingscreen')


    @if (!auth::guard('admin')->check())

        {{--  without middleware checkdata
  auth->guard('admin')==auth::guard('admin')  --}}
        <ul>

            <h1> defaultDS <h1>

                    <script>
                        alert('you must login first');
                    </script>

                    {{--  <li>   you must login first  </li>     --}}

                    <meta http-equiv='refresh' content='2,url={{ route('Admin.Login') }}' />

                    {{--  <meta http-equiv='refresh'  content='0,url=404page' />  --}}
                @else
                    @extends('Admin.Auth.cmstheme')


                    @section('user')


                        @include('Admin.Auth.user')


                    @stop






                    @section('static')

                        <iframe class='iframe content-wrapper'src="{{ route('Cmsstatic') }}" width="100%" height="auto" style = "margin:0px !important">
                        </iframe>

                    @stop


                    @section('company')

                        <iframe class='iframe content-wrapper' src="{{ route('company.index') }}" width="100%" height="auto" style = "margin:0px !important">
                        </iframe>

                    @stop


                    @section('nav')

                        <iframe class='iframe content-wrapper' style="background:white; margin:0px !important;" src="{{ route('nav.index') }}" width="100%" height="auto">
                        </iframe> <!-- cms & indexed link -->

                    @stop


                    @section('Dashboard_Users')

                        <iframe class='iframe content-wrapper' src="{{ route('accessLog.index') }}" width="100%" height="auto" style = "margin:0px !important">
                        </iframe>

                    @stop


                    @section('New_users')


                        <iframe class='iframe content-wrapper' src="{{ route('Admin.register') }}" width="100%" height="auto" style = "margin:0px !important">
                        </iframe>


                    @stop


                    @section('Guide')

                        @include('Admin.Auth.Guide')

                    @stop


                    @if ($BSModel == 'E-commerce' or $BSModel == 'Blog with member')
                        @section('Client_Request')

                            <iframe class='iframe content-wrapper' src="{{ route('Client_orders') }}" width="100%" height="auto" style = "margin:0px !important">
                            </iframe>

                        @stop
                    @else
                        @section('Client_Request')

                            <iframe class='iframe content-wrapper' src="{{ route('Client_req') }}" width="100%" height="auto" style = "margin:0px !important">
                            </iframe>

                        @stop
                    @endif


                    @section('jobreq')

                        <iframe class='iframe content-wrapper' src="{{ route('job_req') }}" width="100%" height="auto" style = "margin:0px !important">
                        </iframe>

                    @stop



                    @section('clientcomment')

                        <iframe class='iframe content-wrapper' src="{{ route('client_comment') }}" width="100%" height="auto" style = "margin:0px !important">
                        </iframe>

                    @stop



                    @section('Customize')

                        <iframe class='iframe content-wrapper' src="{{ route('customize.index') }}" width="100%" height="auto" style = "margin:0px !important">
                        </iframe>


                    @stop







    @endif


    </div>
    </div>
    </div>


    <!-- <h1> @yield ('static') </h1> -->


</body>

</html>


<script>
    function loading() {



        document.querySelector('.dashboard').click();
        $("#loader").delay(1200).fadeOut("fast");

    }
</script>
