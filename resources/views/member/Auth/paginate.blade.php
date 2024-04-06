

 <div style='display:flex;'>
 @if($paginator->onFirstPage()) 
 <li class="page-item disabled"><a class="page-link" href="javascript:;"><<</a></li> &nbsp;

 @else

 <li class="page-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}"><<</a></li> &nbsp;

@endif


@foreach ($elements as $element) 
@foreach ($element as $page => $url) 
 @if($page == $paginator->currentPage()) 

 
 <li class="page-item disabled">
<a class="page-link" href="javascript:;">{{ $page }}</a></li>  &nbsp;

 @else 

 <li class="page-item">
     <a class="page-link" href="{{ $url }}">{{ $page }}</a></li>  &nbsp;
     @endif
      
 @endforeach
  @endforeach 


   @if($paginator->hasmorePages()) 
   <li class="page-item">
       <a class="page-link" href="{{ $paginator->nextPageurl() }}">>></a></li> &nbsp; 
       @else 
        <li class="page-item disabled">
            <a class="page-link" href="javascript:;">>></a> </li> &nbsp;
            @endif 

</div>