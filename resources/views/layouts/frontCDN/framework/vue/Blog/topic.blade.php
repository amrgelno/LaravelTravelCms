@foreach ($topic as $topicitem)
    <div class='topic-FRAME'>

<div class="img">

<img src="Front/IMG/{{$topicitem -> ImageName}}" class="img"/>

</div>
<div class="text">
<a href="index.php?Topic_ID={{$topicitem -> id}}">
     {{$topicitem->subject}}  </a>



     
    <br>
 <span> {!! $topicitem->content  !!}  </span>
</div></div>	
@endforeach