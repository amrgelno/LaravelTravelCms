@include('layouts.Front.headtag')

<body onload='loading();'>

    @include('layouts.Front.indexLoader')

    <div class="page">

        <header style='background:white;'>

            @include('layouts.Front.Blog.header')

            @include('layouts.Front.Blog.nav')
        </header>


        <br />
        <div class="container bg-gray-4" style=' display: flex;'>

            @if (!empty($FormOption))

                @foreach ($FormOption as $Formitem)
                    @if ($Formitem->FormType == 'filter')
                        @if ($Formitem->Formstyle == 'form1')
                            @include('layouts.Front.Blog.filter1')
                        @elseif($Formitem->Formstyle == 'form2')
                            @include('layouts.Front.Blog.filter2')
                        @endif


                        @include('layouts.Front.Blog.box')
                    @else
                        @if ($Formitem->Formstyle == 'form3')
                            @include('layouts.Front.Blog.inquireNow')
                        @endif
                    @endif
                @endforeach



            @endif



        </div>




        @if (isset($_GET['search_bt']))
            @include('layouts.Front.Blog.searchbarresults')
        @elseif(@$_GET['box_ID'])
            <div class="container" style='margin-top=1px;'>


                &nbsp; &nbsp; &nbsp; <div align='left' style='font-size:25px;'> where you go /<b>{{ $page_title }}</b></div>



                <div class='row'>


                    <div class='col-md-9'>




                        @include('layouts.Front.Blog.boxslider')


                        @include('layouts.Front.Blog.boxtopic')


                    </div>



                    <div class='col-md-3'>


                        @include('layouts.Front.Blog.boxform')


                    </div>

                </div>





                @include('layouts.Front.Blog.boxstyle')



            </div>
        @elseif(@$_GET['cat_Name'])
            @include('layouts.Front.Blog.box')
        @else
            @include('layouts.Front.slider')


            <!-- @if ($Breadcrumbs == 'Active')
@include('layouts.Front.SEO Markups.breadcrumb')
@endif -->



            @include('layouts.Front.Blog.Allboxes')


            @include('layouts.Front.Blog.paragraph')

            @include('layouts.Front.Blog.Iconbox')

            @include('layouts.Front.Blog.card')

            @include('layouts.Front.Blog.Bookatour')

            @include('layouts.Front.Blog.swiperMultislider')
        @endif

        @include('layouts.Front.Blog.subscribe')

        @include('layouts.Front.footer')

</body>

<script src="{{ asset('Front/JS/jquery.js') }}"></script>

<script src="{{ asset('Front/JS/core.min.js') }}"></script>

<script src="{{ asset('Front/JS/script.js') }}"></script>

<script src="{{ asset('Front/JS/slider.js') }}"></script>
