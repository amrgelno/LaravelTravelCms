<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="csrf-token"  content="{{csrf_token()}}"/>      {{--     ajax meta   --}}
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap" rel="stylesheet">
 {{--  <script src="{{asset('Front/css/phpjs.php')}}" type="text/javascript" defer=""></script>  --}}
 {{-- Dynamic Media Query --}}

<link href="{{asset('Front/css/Uiframework.css') }}" rel="stylesheet"  type="text/css"  >

<link href="{{asset('Front/css/Blog/mediaQuery.css') }}" rel="stylesheet"  type="text/css"  >

<link href="{{asset('Front/css/lib.css') }}" rel="stylesheet"  type="text/css"  >
<link href="{{asset('Front/css/bz.css') }}" rel="stylesheet"  type="text/css"  >
{{--  <script src="{{asset('Front/JS/jquery-3.6.0.min.js') }}"  type="text/javascript"  defer></script>  --}}
<script src="{{asset('Front/JS/jquery-1.11.0.min.js') }}"  type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/bootstrap.min.js')}}" type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/home.js')}}" type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/index.js')}}" type="text/javascript"  defer></script>
<!-- <script src="{{asset('Front/JS/vuejs.js')}}" type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/vuetify.js')}}" type="text/javascript"  defer></script> -->

@include('layouts.Front.SEO Markups.metatag')

@include('layouts.Front.SEO Markups.schema')

@include('layouts.Front.SEO Markups.Microformats')

</head>
