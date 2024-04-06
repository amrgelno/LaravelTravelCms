

 <div style='display:flex;'>

 <nav aria-label="Standard pagination example">


<ul class="pagination">
 @if($paginator->onFirstPage()) 
 <li class="page-item disabled"><a class="page-link" href="javascript:;">«</a></li> &nbsp;

 @else

 <li class="page-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}">«</a></li> &nbsp;

@endif


@foreach ($elements as $element) 
@if(is_array($element))
@foreach ($element as $page => $url) 
 @if($page == $paginator->currentPage()) 

 
 <li class="page-item disabled">
<a class="page-link" href="javascript:;">{{ $page }}</a></li>  &nbsp;

 @else 

 <li class="page-item">
     <a class="page-link" href="{{ $url }}">{{ $page }}</a></li>  &nbsp;
     @endif
      
 @endforeach




   @if($paginator->hasmorePages()) 
   <li class="page-item">
       <a class="page-link" href="{{ $paginator->nextPageurl() }}">»</a></li> &nbsp; 
       @else 
        <li class="page-item disabled">
            <a class="page-link" href="javascript:;">»</a> </li> &nbsp;
            @endif

@endif 
  @endforeach 

</ul>
</nav>

</div>