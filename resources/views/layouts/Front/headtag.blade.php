<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>

    @include('layouts.Front.rtl')

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, 
    height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>

    @include('layouts.Front.resources')


    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <meta name="csrf-token" content="{{ csrf_token() }}" /> {{--     ajax meta   --}}

    @include('layouts.Front.SEO Markups.favicon')

    @include('layouts.Front.SEO Markups.metatag')

    @include('layouts.Front.SEO Markups.schema')

    @include('layouts.Front.SEO Markups.Microformats')

    <meta name="theme-color" content="#0a2b4b">

    <script type="text/javascript" src="{{ asset('Front/JS/JS2/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Front/JS/JS2/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Front/JS/JS2/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Front/JS/JS2/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Front/JS/JS2/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Front/JS/JS2/float-panel.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src='https://raw.githack.com/SochavaAG/example-mycode/master/pens/slick-slider/plugins/slick/slick.min.js'></script>
    <script src="./script.js"></script>

    @if (auth::guard('admin')->check())
        <script type="text/javascript" src="{{ asset('Front/JS/cdnvue.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Front/JS/navvue.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Front/JS/Axios.min.js') }}"></script>
    @endif

</head>
