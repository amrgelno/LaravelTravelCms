<section class="fultopic" style='background:unset;'>


@foreach ($nav2    as   $navitem)


<div class="card-body">
                <h5 class="card-title"><a href="index.php?MainM_ID={{$navitem->id}}">  {{$navitem->sub1menu}} </a></h5>

                <p class="card-text">{{$navitem->description}}</p>
               
              </div>

@endforeach


@foreach ($box   as   $boxitem)

<div class="card-body">

<h5 class="card-title"><a href="index.php?box_ID={{$boxitem->ID}}">  {{$boxitem->title}} </a></h5>

                <p class="card-text">
                {{$boxitem->description}}
                </p>
                
              </div>



@endforeach


@foreach ( $topic   as  $topicitem)

<div class="card-body">
<h5 class="card-title"><a href="index.php?Topic_ID={{$topicitem->ID}}">  {{$topicitem->title}} </a></h5>

<p class="card-text">
{{ $topicitem->description}}
</p>
               
              </div>

@endforeach


</section>