@if (empty(@$_GET['lang']))

    <div id='NAVCSS' class="rd-navbar-main-outer" :style="{ background: menucolor }">


        @if (auth::guard('admin')->check())
            <!--<input type="color"   name="navcolor"
 class="hint--left"  id='navcolor'  aria-label="navcolor"
  v-model='navcolor'  onchange='changenavcolor();' >-->

            <a href="{{ route('nav.index') }}">

                <INPUT TYPE='submit' name='instopic' title='Editnav' class='insert' style="margin: 5% 1%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(Front/ICON/author.png);" value /> </a>
        @endif



        <div id='NAVCSS' class="rd-navbar-main">

            @if (auth::guard('admin')->check())
                <input type="color" name="Menucolor" id='ulcolor' class="hint--left" aria-label="Menucolor" title='navbarcolor' v-model='menucolor' onchange='changeulcolor();'>
                <input type="color" name="fontcolor" id='Fontcolor' class="hint--left" aria-label="menufontcolor" title='navbarfontcolor' v-model='menufontcolor' onchange='changeFontcolor();'>
            @endif


            <div class="rd-navbar-nav-wrap toggle-original-elements">
                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                    @foreach ($nav as $item)
                        @if (empty($item->footer))
                            <li class="rd-nav-item ">
                                <a class="rd-nav-link" href="index.php?MainM_ID={{ $item->id }}&lang=<?php echo @$_GET['lang']; ?>">{{ $item->sub1menu }}</a>

                            </li>
                        @else
                            <li class="rd-nav-item">

                                <a class="rd-nav-link dropdown-toggle show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                                     
                                    {{ $item->sub1menu }} </a>

                                <ul class=" dropdown-menu   col-sm-12 col-lg-2" style="position:absloute">

                                    @foreach ($nav_sub as $item_sub)
                                        @if ($item_sub->parent_id == $item->id)
                                            @if (empty($item_sub->footer))
                                                <li class="rd-nav-link  col-lg-12 col-xs-6" style='background:white; '><!----> <strong>


                                                        <a itemprop="url" href="index.php?MainM_ID={{ $item_sub->id }}&lang=<?php echo @$_GET['lang']; ?>">
                                                            <span itemprop="name">{{ $item_sub->sub1menu }}</span></a></strong> <!---->

                                                </li>
                                            @endif
                                        @endif
                                    @endforeach

                                </ul>

                            </li>
                        @endif
                    @endforeach

                    <li class="rd-nav-item">
                        @php
                            $defaultLanguage = config('languages')['en'];
                            $currentLanguage = request()->filled('lang') ? config('languages')[request()->query('lang')] ?? $defaultLanguage : $defaultLanguage;
                        @endphp
                        <a class="rd-nav-link dropdown-toggle show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                            {{ $currentLanguage }}
                        </a>
                        <ul class="dropdown-menu col-sm-12 col-lg-2" style="position:absloute">
                            @foreach (config('languages') as $key => $value)
                                @if ($value === $currentLanguage)
                                    @continue
                                @endif
                                <li class="rd-nav-link col-lg-12 col-xs-6" style="background:white;">
                                    <strong>
                                        @php
                                            if ($key === 'en') {
                                                $languageUrl = url()->current() . '?' . http_build_query(array_merge(request()->query(), ['lang' => null]));
                                            } else {
                                                $languageUrl = url()->current() . '?' . http_build_query(array_merge(request()->query(), ['lang' => $key]));
                                            }
                                        @endphp
                                        <a itemprop="url" href="{{ $languageUrl }}">
                                            <span itemprop="name">{{ $value }}</span>
                                        </a>
                                    </strong>

                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </nav>

@elseif($_GET['lang'] == 'fr')
<div id='NAVCSS' class="rd-navbar-main-outer" :style="{ background: menucolor }">


        @if (auth::guard('admin')->check())
            <!--<input type="color"   name="navcolor"
 class="hint--left"  id='navcolor'  aria-label="navcolor"
  v-model='navcolor'  onchange='changenavcolor();' >-->

            <a href="{{ route('nav.index') }}">

                <INPUT TYPE='submit' name='instopic' title='Editnav' class='insert' style="margin: 5% 1%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(Front/ICON/author.png);" value /> </a>
        @endif



        <div id='NAVCSS' class="rd-navbar-main">

            @if (auth::guard('admin')->check())
                <input type="color" name="Menucolor" id='ulcolor' class="hint--left" aria-label="Menucolor" title='navbarcolor' v-model='menucolor' onchange='changeulcolor();'>
                <input type="color" name="fontcolor" id='Fontcolor' class="hint--left" aria-label="menufontcolor" title='navbarfontcolor' v-model='menufontcolor' onchange='changeFontcolor();'>
            @endif


            <div class="rd-navbar-nav-wrap toggle-original-elements">
                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                    @foreach ($nav as $item)
                        @if (empty($item->footer))
                            <li class="rd-nav-item ">
                                <a class="rd-nav-link" href="index.php?MainM_ID={{ $item->id }}&lang=<?php echo @$_GET['lang']; ?>">{{ $item->Fr_sub1menu }}</a>

                            </li>
                        @else
                            <li class="rd-nav-item">

                                <a class="rd-nav-link dropdown-toggle show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                                     
                                    {{ $item->Fr_sub1menu }} </a>

                                <ul class=" dropdown-menu   col-sm-12 col-lg-2" style="position:absloute">

                                    @foreach ($nav_sub as $item_sub)
                                        @if ($item_sub->parent_id == $item->id)
                                            @if (empty($item_sub->footer))
                                                <li class="rd-nav-link  col-lg-12 col-xs-6" style='background:white; '><!----> <strong>


                                                        <a itemprop="url" href="index.php?MainM_ID={{ $item_sub->id }}&lang=<?php echo @$_GET['lang']; ?>">
                                                            <span itemprop="name">{{ $item_sub->Fr_sub1menu }}</span></a></strong> <!---->

                                                </li>
                                            @endif
                                        @endif
                                    @endforeach

                                </ul>

                            </li>
                        @endif
                    @endforeach

                    <li class="rd-nav-item">
                        @php
                            $defaultLanguage = config('languages')['en'];
                            $currentLanguage = request()->filled('lang') ? config('languages')[request()->query('lang')] ?? $defaultLanguage : $defaultLanguage;
                        @endphp
                        <a class="rd-nav-link dropdown-toggle show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                            {{ $currentLanguage }}
                        </a>
                        <ul class="dropdown-menu col-sm-12 col-lg-2" style="position:absloute">
                            @foreach (config('languages') as $key => $value)
                                @if ($value === $currentLanguage)
                                    @continue
                                @endif
                                <li class="rd-nav-link col-lg-12 col-xs-6" style="background:white;">
                                    <strong>
                                        @php
                                            if ($key === 'en') {
                                                $languageUrl = url()->current() . '?' . http_build_query(array_merge(request()->query(), ['lang' => null]));
                                            } else {
                                                $languageUrl = url()->current() . '?' . http_build_query(array_merge(request()->query(), ['lang' => $key]));
                                            }
                                        @endphp
                                        <a itemprop="url" href="{{ $languageUrl }}">
                                            <span itemprop="name">{{ $value }}</span>
                                        </a>
                                    </strong>

                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </nav>
@elseif($_GET['lang'] == 'ar')
    <!-- Ar Lnag -->



    <div class="rd-navbar-main-outer" dir="rtl">
        @if (auth::guard('admin')->check())
            <!--<input type="color"   name="navcolor"
 class="hint--left"  id='navcolor'  aria-label="navcolor"
  v-model='navcolor'  onchange='changenavcolor();' >-->

            <a href="{{ route('nav.index') }}"> <INPUT TYPE='submit' name='instopic' title='Editnav' class='insert' style="margin: 5% 1%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(Front/ICON/author.png);" value /> </a>
        @endif



        <div class="rd-navbar-main">
            <div class="rd-navbar-nav-wrap toggle-original-elements">
                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">

                    @foreach ($nav as $item)
                        @if (empty($item->footer))
                            <li class="rd-nav-item">
                                <a class="rd-nav-link" href="index.php?MainM_ID={{ $item->id }}&lang=<?php echo @$_GET['lang']; ?>">{{ $item->Ar_sub1menu }}</a>

                            </li>
                        @else
                            <li class="rd-nav-item">

                                <a class="rd-nav-link dropdown-toggle show" href="#" data-bs-toggle="dropdown" aria-expanded="true"> {{ $item->Ar_sub1menu }} </a>

                                <ul class=" dropdown-menu   col-sm-12 col-lg-2">

                                    @foreach ($nav_sub as $item_sub)
                                        @if ($item_sub->parent_id == $item->id)
                                            @if (empty($item_sub->footer))
                                                <li class="rd-nav-link col-lg-12 col-xs-6" style='background:white'><!----> <strong>


                                                        <a itemprop="url" href="index.php?MainM_ID={{ $item_sub->id }}&lang=<?php echo @$_GET['lang']; ?>">
                                                            <span itemprop="name">{{ $item->Ar_sub1menu }}</span></a></strong> <!---->

                                                </li>
                                            @endif
                                        @endif
                                    @endforeach

                                </ul>

                            </li>
                        @endif
                    @endforeach

                    <li class="rd-nav-item">
                        @php
                            $defaultLanguage = config('languages')['en'];
                            $currentLanguage = request()->filled('lang') ? config('languages')[request()->query('lang')] ?? $defaultLanguage : $defaultLanguage;
                        @endphp
                        <a class="rd-nav-link dropdown-toggle show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                            {{ $currentLanguage }}
                        </a>
                        <ul class="dropdown-menu col-sm-12 col-lg-2" style="position:absloute">
                            @foreach (config('languages') as $key => $value)
                                @if ($value === $currentLanguage)
                                    @continue
                                @endif
                                <li class="rd-nav-link col-lg-12 col-xs-6" style="background:white;">
                                    <strong>
                                        @php
                                            if ($key === 'en') {
                                                $languageUrl = url()->current() . '?' . http_build_query(array_merge(request()->query(), ['lang' => null]));
                                            } else {
                                                $languageUrl = url()->current() . '?' . http_build_query(array_merge(request()->query(), ['lang' => $key]));
                                            }
                                        @endphp
                                        <a itemprop="url" href="{{ $languageUrl }}">
                                            <span itemprop="name">{{ $value }}</span>
                                        </a>
                                    </strong>

                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </nav>

@endif






@if (auth::guard('admin')->check())
    <script>
        function changeulcolor(e) {


            $.ajax({

                method: "GET",

                url: "{{ route('QuikEditstyle') }}",

                data: {

                    ulcolor: $('#ulcolor').val(),


                },



                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(data, status) {
                    console.log(data);
                    console.log(status);
                    console.log(xhr);
                }

            });


        }


        function changeFontcolor(e) {


            $.ajax({

                method: "GET",

                url: "{{ route('QuikEditstyle') }}",

                data: {

                    Fontcolor: $('#Fontcolor').val(),

                },



                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(data, status) {
                    console.log(data);
                    console.log(status);
                    console.log(xhr);
                }

            });


        }


        function changesub1color(e) {


            $.ajax({

                method: "GET",

                url: "{{ route('QuikEditstyle') }}",

                data: {

                    sub1color: $('#sub1color').val(),


                },



                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(data, status) {
                    console.log(data);
                    console.log(status);
                    console.log(xhr);
                }

            });


        }
    </script>
@endif
