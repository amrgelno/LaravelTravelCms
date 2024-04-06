
@php   $i=0;   @endphp

@foreach ($FAQS as   $FAQSitem)

@if($loop->iteration  <= 1 )


<div class="container">

<div class="row">
<div class="col-12"> <div class="home_new_boxes" itemscope="" itemtype="http://schema.org/FAQPage">


<div class="top-destination">

@if(empty(@$_GET['lang']) )                 
    FAQS
@elseif(@$_GET['lang'] == 'fr')
    FAQS
@elseif(@$_GET['lang'] == 'ar')
    أسئلة الشائعة
@endif


</div>



<div class="home_new_box_title_list_faq">

@endif

@endforeach




@foreach ($FAQS as   $FAQSitem)

<div class="home_new_box_faq" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
<div class="home_new_box_faq_title" itemprop="name">
@if(empty(@$_GET['lang']))
    {!! $FAQSitem->Question !!}
@elseif($_GET['lang'] == 'fr')
    {!! $FAQSitem->Fr_Question !!}
@elseif($_GET['lang'] == 'ar')
    {!! $FAQSitem->Ar_Question !!}
@endif



</div>
<div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer" style="display: none;">
<div itemprop="text">- 
@if(empty(@$_GET['lang'])) 
    {!! $FAQSitem->Answer !!}
@elseif(@$_GET['lang'] == 'fr')
    {!! $FAQSitem->Fr_Answer !!}
@elseif(@$_GET['lang'] == 'ar')
    {!! $FAQSitem->Ar_Answer !!}
@endif
                                    </div>
</div>
</div>

@endforeach


@foreach ($FAQS as   $FAQSitem)

@if($loop->iteration  <= 1 )


</div>
</div>


<div id="load_more"><span class="loadmoretext">Load more</span></div>
</div>
</div>

@endif

@endforeach



<script type="text/javascript">
            setTimeout(function() {
            jQuery(document).ready(function(){
                //Toggle
                jQuery(".home_new_box_faq").each(function(){
                    jQuery(this).find(".home_new_box_faq_answer").hide();
                });

                jQuery(".home_new_box_faq").each(function(){
                    jQuery(this).find(".home_new_box_faq_title").click(function() {
                        jQuery(this).toggleClass("toggled").next().stop(true, true).slideToggle(100);
                        return false;
                    });
                });

                var expanded = false;
                jQuery("#load_more").click(function() {
                    if(!expanded){
                        jQuery(".home_new_box_title_list_faq").addClass("toggled");
                        jQuery(".loadmoretext").text("Show less");
                        expanded = true;
                    }else{
                        jQuery(".home_new_box_title_list_faq").removeClass("toggled");
                        jQuery(".loadmoretext").text("Load more");
                        expanded = false;
                    }

                    return false;
                });
            });
            }, 6000);
        </script>
