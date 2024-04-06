
@if((@$_GET['MainM_ID']==1)  or empty($_GET['MainM_ID']))

@if((@$_GET['box_ID']==0))





@foreach ($topic as $topicitem)


<div class="container">




<div class="new_top_content_title"  align='center'>
<h1>   
@if(empty(@$_GET['lang']) ) 
    {!! $topicitem->subject !!}
@elseif(@$_GET['lang'] == 'fr')
    {!! $topicitem->Fr_subject !!}
@elseif(@$_GET['lang'] == 'ar')
    {!! $topicitem->Ar_subject !!}
@endif
</h1>
</div>
<div class="new_top_content_desc">

@if(empty(@$_GET['lang']) ) 
    {!! $topicitem->content !!}
@elseif(@$_GET['lang'] == 'fr')
    {!! $topicitem->Fr_content !!}
@elseif(@$_GET['lang'] == 'ar')
    {!! $topicitem->Ar_content !!}
@endif
</div>



@endforeach


</div>





@ENDIF
@ENDIF




