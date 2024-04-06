@foreach ($topic as $topicitem)


@if (auth::guard('admin')->check())


<form action="{{route('topic.index')}}" method="get">

@csrf
@method('GET')

@if(isset($navID) or  empty($navID))


@if(empty($navID))

<input type="hidden"  name="MainM_ID"   value="1"/>

@else

<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>

@endif

<input type="hidden"  name="page_id"   value="nav_id"/>


@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif

@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID)  )
<INPUT TYPE='submit' name='EDIT_TOPIC'     title='EditTopic' class='insert'  
style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(Front/ICON/author.png);" VALUE/>  

    @endif

    </form>

@endif


@if($topicitem->Topic_style  == 'AccordionPanel' &&  $loop->iteration  <= 1)

      <!-- Discover New Horizons-->
      <section class="section section-sm section-first bg-default text-md-left" style='display:flex;'>
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">


            <div class="col-lg-6 text-center wow fadeInUp">
                
            @foreach($Maxcompanyid as  $Maxid )
 
            
            <img src="Front/IMG/{{$Maxid->path_pic}}" alt="" width="556" height="382"/>

@endforeach

            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                <h3>Discover New Tours</h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                  <!-- Nav tabs-->


                  <ul class="nav nav-tabs">

                  @foreach ($topic as $topicitem)

                  <li class="nav-item" role="presentation">
                      <a class="nav-link @if($loop->iteration <= 1) active @endif" href="#tabs-7-{{$topicitem->id}}" data-toggle="tab">   
                        @if(empty(@$_GET['lang']))
                          {!! $topicitem->subject !!}
                        @elseif(@$_GET['lang'] == 'fr')
                          {!! $topicitem->Fr_subject !!}
                        @elseif(@$_GET['lang'] == 'ar')
                          {!! $topicitem->Ar_subject !!}
                        @endif 
                    </a></li>

                                  
                    @endforeach
 
                  <!-- Tab panes-->

</ul>
                  <div class="tab-content">

                  @foreach ($topic as $topicitem)


                  <div class="paragraph-tab-pane tab-pane fade show @if($loop->iteration <= 1) active @endif" id="tabs-7-{{$topicitem->id}}">
                      <p> 
                        @if(empty(@$_GET['lang']))
                          {!! $topicitem->content !!}
                        @elseif(@$_GET['lang'] == 'fr')
                          {!! $topicitem->Fr_content !!}
                        @elseif(@$_GET['lang'] == 'ar')
                          {!! $topicitem->Ar_content !!}
                        @endif
                      </p>
                    </div>
                    
                        
                       @endforeach
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


@elseif($topicitem->Topic_style =='CollapseAccordionPanel')


<ul class="AccordionPanel col-lg-8"   style="margin: 0 auto; border:5px solid hsla(240,5%,57%,.1)">
<li class="AccordionPanelTab" data-bs-toggle="collapse" data-bs-target="#AccordionPanelContent{{$topicitem->id}}" 

aria-expanded="true"   

style="background:hsla(240,5%,57%,.1); border:unset;  text-align: center;
    color: orange;!important"><a href ='#AccordionPanelTab '><h1>
      @if(empty(@$_GET['lang']))
        {!! $topicitem->subject !!}
      @elseif(@$_GET['lang'] == 'fr')
        {!! $topicitem->Fr_subject !!}
      @elseif(@$_GET['lang'] == 'ar')
        {!! $topicitem->Ar_subject !!}
      @endif
</h1></a> 

<ul class="AccordionContent home_new_box_faq_answer collapse" id="AccordionPanelContent{{$topicitem->id}}"  style='background:white;'>
<li style='background:white;'>
  @if(empty(@$_GET['lang']))
    {!! $topicitem->content !!}
  @elseif(@$_GET['lang'] == 'fr')
    {!! $topicitem->Fr_content !!}
  @elseif(@$_GET['lang'] == 'ar')
    {!! $topicitem->Ar_content !!}
  @endif
</li>
</ul>
</li>  </ul>








@elseif($topicitem->Topic_style  == 'Article')


<div class="home_new_box_faq_title toggled" itemprop="name"  align='center'>
  @if(empty(@$_GET['lang']))
    {!! $topicitem->subject !!}
  @elseif(@$_GET['lang'] == 'fr')
    {!! $topicitem->Fr_subject !!}
  @elseif(@$_GET['lang'] == 'ar')
    {!! $topicitem->Ar_subject !!}
  @endif
</div>
<div itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer" style="display: block;" align='center'>
<div itemprop="text" class="col-lg-11">-
  @if(empty(@$_GET['lang']))
    {!! $topicitem->content !!}
  @elseif(@$_GET['lang'] == 'fr')
    {!! $topicitem->Fr_content !!}
  @elseif(@$_GET['lang'] == 'ar')
    {!! $topicitem->Ar_content !!}
  @endif                  
</div>
</div>








@endif

@endforeach



<script>

function  loading()   {



document.querySelector('.tab-pane fade show').click();

}


</script>