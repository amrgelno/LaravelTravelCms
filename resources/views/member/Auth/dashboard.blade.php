<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token"  content="{{csrf_token()}}"/>      {{--     ajax meta   --}}

  <title>Dashboard</title>
</head>

<style>

#Marketemail{

display:none;
}

#Marketemail:target{

display:block;
}


#ProfileSetting{

  display:none;
}

#ProfileSetting:target{

display:block;

}


#FavAds{

display:none;

}

#FavAds:target{

display:block;

}

iframe.iframe {
    margin-left: 19%;
}

</style>

@if ((auth::guard('member')->check()))

<body onload='loading();'>

@extends('member.Auth.cmstheme')


@section('FavAds')

@include('member.Auth.FavAds')

@stop


@section('Marketemail')

@include('member.Auth.Marketemail')

@stop


@section('ProfileSetting')

@include('member.Auth.ProfileSetting')

@stop


 <!-- <h1> @yield ('static') </h1> -->

 
</body>
</html>




<script>

function  loading()   {



document.querySelector('.Marketemail').click();

}


</script>



@else


{{--  without middleware checkdata
  auth->guard('admin')==auth::guard('admin')  --}}
  <ul>

<script>   alert('you must login first');                </script>

<meta http-equiv='refresh'  content='0,url={{route("member.Login")}}' />


@endif

