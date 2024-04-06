<nav class="rd-navbar rd-navbar-corporate rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1 toggle-original" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
    <div class="rd-navbar-aside-outer">
        <div class="rd-navbar-aside">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand" style="width: 100px;">

                    @foreach ($Maxcompanyid as $Maxid)
                        <!--Brand--><a class="brand" href="{{ $Domain_site }}">
                            <img src="Front/IMG/{{ $Maxid->path_pic }}" alt="{{ $Maxid->Comp_Name }}" width="250px" height="50px" style='max-height: 76px;'></a>
                    @endforeach

                </div>
            </div>
            <div class="rd-navbar-aside-right rd-navbar-collapse toggle-original-elements">
                <ul class="rd-navbar-corporate-contacts">
                    <li>
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                            <div class="unit-body">
                                <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                            <div class="unit-body">
                                @foreach ($Maxcompanyid as $Maxid)
                                    <a class="link-phone" href="tel:#{{ $Maxid->Tele_Number }}">{{ $Maxid->Tele_Number }}</a>
                                @endforeach

                            </div>
                        </div>
                    </li>
                </ul><a class="button button-secondary button-pipaluk" href="#">

                    @if (empty(@$_GET['lang']))
                        Tailor a Tour
                    @elseif (@$_GET['lang'] == 'fr')
                        Tailor a Tour
                    @elseif (@$_GET['lang'] == 'ar')
                        تفصيل جولة
                    @endif

                </a>
            </div>
        </div>
    </div>
