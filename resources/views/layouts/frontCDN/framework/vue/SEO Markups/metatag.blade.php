@foreach($Keywords as $metatag)
<title> {{ $metatag -> title }} </title>
<meta name="title"        content="{{ $metatag -> title }}">
<meta name="description"  content="{{ $metatag -> description }}">
<meta name="keywords"     content="{{ $metatag ->  Keyword }}">
<meta name="author"       content="{{ $metatag -> author }}">
<!--Open Graph Protocol-->
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $metatag -> title }}" />
<meta property="og:description" content="{{ $metatag ->  Keyword }}" />
@endforeach

<html prefix="og: https://ogp.me/ns#">
<meta property="og:locale" content="ar_AR" />
<meta property="og:url" content="http://{{$Domain_site}}/" />
<meta property="og:site_name" content="   " />
<meta property="article:modified_time" content="2020-07-23T06:20:03+00:00" />
<meta property="og:image" content="  " />
<meta property="og:image:width" content="570" />
<meta property="og:image:height" content="380" />
<!--Twitter Cards-->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content=" " />
<!--meta tag (customize) -->
<meta name="robots" content="index, follow">
<meta name="language" content="Arabic">
<!--End meta tag (customize) -->