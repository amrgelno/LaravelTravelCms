
<br/> <br/>
<br/>



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




<br/> <br/>  


@if($topicitem->Topic_style  == 'AccordionPanel' &&  $loop->iteration  <= 1)

      <!-- Discover New Horizons-->
      <section class="section section-sm p-3 section-first bg-default pagecontainer2 offset-0 text-md-left">
        <div class="container">
          <div class="row">
            <div class="col-12 wow fadeInRight" data-wow-delay=".1s">
              <div>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                  <!-- Nav tabs-->


				<ul class="nav cstyle10 justify-content-center justify-content-sm-start">
					@foreach ($topic as $topicitem)
						<li class="nav-item mr-3" role="presentation">
							<a 
								class="nav-link @if($loop->iteration === 1) active @endif"
								id="topics-tab-{{ $topicitem->id }}" data-bs-toggle="tab" href="#topics-tabpanel-{{ $topicitem->id }}"
								role="tab" aria-controls="topics-tabpanel-{{ $topicitem->id }}" aria-selected="true"
							>
								@if(request()->query('lang') === null || request()->query('lang') === 'en_gb')
									{{ $topicitem->subject }}
								@else
									{{ $topicitem->Ar_subject }}
								@endif
							</a>
						</li>
					@endforeach
				</ul>
				<div class="tab-content">
					@foreach ($topic as $topicitem)
					
						<div 
							class="tab-pane @if($loop->iteration === 1) active @endif"
							id="topics-tabpanel-{{ $topicitem->id }}" role="tabpanel" aria-labelledby="topics-tab-{{ $topicitem->id }}"
						>
              @if(empty(@$_GET['lang']))
								{!! $topicitem->content !!}
              @elseif($_GET['lang'] == 'fr')
                {!! $topicitem->Fr_content !!}
              @elseif($_GET['lang'] == 'ar')
								{!! $topicitem->Ar_content !!}
							@endif
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
@if(empty (@$_GET['lang']) )
                  

                  {!!  $topicitem->subject  !!}
                      
              @elseif(@$_GET['lang'] == 'fr')
             {!!  $topicitem->Fr_subject  !!}
    
    
    
                      @elseif(@$_GET['lang'] == 'ar')
    
                      {!!  $topicitem->Ar_subject  !!}
    
    
                      @endif 
</h1></a> 

<ul class="AccordionContent home_new_box_faq_answer collapse" id="AccordionPanelContent{{$topicitem->id}}"
    style='background:white;'>
<li  style='color:black;'>
@if(empty (@$_GET['lang']) ) 
                  

                  {!! $topicitem->content  !!}
                
                            @elseif(@$_GET['lang'] == 'fr')
                              {!! $topicitem->Fr_content  !!}
                             @elseif(@$_GET['lang'] == 'ar')
          
                            {!! $topicitem->Ar_content  !!}
          
          
                            @endif </li>
</ul>
</li>  </ul>








@elseif($topicitem->Topic_style  == 'Article')

@endif

@endforeach





<br/> <br/>  <br/>   
