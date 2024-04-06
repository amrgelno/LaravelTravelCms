<div id='main_nav' class="header d-lg-block  collapse navbar-collapse"  >



<div class="header_search d-lg-none">
<form action='{{route("index")}}' role="form" method="get" id="search_site_form">
<div class="row">
<div class="mb-4">
<div class="input-group col-md-5">
              <input class="form-control form-control-navbar"   name='search_bt' style='resize: auto;
    overflow: visible;'     id="search_site" type="search" placeholder="Search" aria-label="Search">



</div>




</div>
</div>
<button id="header_search" type="submit" title="Search"><i class="bi bi-search"></i></button>
</form>
</div>


@if (auth::guard('admin')->check())

<!--<input type="color"   name="navcolor"   
 class="hint--left"  id='navcolor'  aria-label="navcolor" 
  v-model='navcolor'  onchange='changenavcolor();' >-->

<a href="{{route('nav.index')}}"> <INPUT TYPE='submit' name='instopic'   title='Editnav' class='insert'  
style="margin: 5% 1%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(Front/ICON/author.png);" value/>   </a>

    @endif

    

<div class="container">
<div class="row">
<div class="col-12">
<div class="d-xs-none d-flex align-items-center justify-content-between">
<nav class="navbar navbar-expand-lg me-auto">
<div class="container-fluid">
<div class="">
<div class="navbar-nav">

@foreach($nav  as $item)


@if(empty($item->footer))


<li class="nav-item">
    <a class="nav-link" href="index.php?MainM_ID={{$item->id}}"> {{$item->sub1menu}} </a></li>


    @else


<li class="nav-item dropdown has-megamenu">

<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> {{$item->sub1menu}} </a>

<div class="dropdown-menu megamenu" style="width: 350px; ">

<div class="row g-3">
<div class="col-md-12">
<div class="row">

@foreach($nav_sub  as $item_sub)



@if($item_sub->parent_id==$item->id)


@if(empty( $item_sub->footer))

<div class="col-md-6">
<a href="index.php?MainM_ID={{$item_sub->id}}">
{{$item_sub->sub1menu}} </a>
</div>

@endif
@endif

@endforeach
</div>
</div>
</div>
</li>
@endif


@endforeach
</div>
</div>
</div></nav>
<div class="dropdown" id="lang">
<a class="dropdown-toggle menu_link" href="https://www.egytra.com/#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
<i class="bi bi-globe"></i> <span>English</span>
</a>
<ul id="currency" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<li><a href="https://www.egytra.com/" title="English"> <span class="flag-icon flag-icon-us"></span> English</a></li>
<li><a href="https://italiano.memphistours.com/" title="Italiano"> <span class="flag-icon flag-icon-it"></span> Italiano</a></li>
<li><a href="https://spain.memphistours.com/" title="Español"> <span class="flag-icon flag-icon-es"></span> Español</a></li>
<li><a href="https://br.memphistours.com/" title="Português"> <span class="flag-icon flag-icon-br"></span> Português</a></li>
<li><a href="https://french.memphistours.com/" title="Français"> <span class="flag-icon flag-icon-fr"></span> Français</a></li>
<li><a href="https://deutsch.memphistours.com/" title="Deutsch"> <span class="flag-icon flag-icon-de"></span> Deutsch</a></li>
</ul>
</div>
<div class="dropdown" id="lang">
<a class="dropdown-toggle menu_link" href="https://www.egytra.com/#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
<span class="currencySign3">USD (US$)</span>
</a>
<ul id="currency" class="curr_contain dropdown-menu" aria-labelledby="dropdownMenuLink">
<li id="e1" style="display: none;"><a href="https://www.egytra.com/#" onclick="updateSiteRatesTop('1',true);return false;">USD (US$)</a></li>
<li id="e2"><a href="https://www.egytra.com/#" onclick="updateSiteRatesTop('2',true);return false;">EUR (€)</a></li>
<li id="e3"><a href="https://www.egytra.com/#" onclick="updateSiteRatesTop('3',true);return false;">GBP (£)</a></li>
<li id="e4"><a href="https://www.egytra.com/#" onclick="updateSiteRatesTop('4',true);return false;">AUD (AU$)</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>





