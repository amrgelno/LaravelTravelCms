<div class="header">
<div class="container">
<div class="row">
<div class="col-12">
<div class="d-flex align-items-center justify-content-between">
<nav class="navbar navbar-expand-lg me-auto">
<div class="container-fluid">
<div class="">
<div class="navbar-nav">

@foreach($nav  as $item)



@if(empty($item->footer))


<li class="nav-item">
    <a class="nav-link" href="https://www.egytra.com/"> {{$item->sub1menu}} </a></li>
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





