

    <!--<div itemscope itemtype="https://schema.org/Person">   </div>
    -->

    <div class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12">


    <div itemscope >

      <button type="button"   class="menu"> ≡ Menu   </button>


<div class='socialmedia'>
    @foreach($social as  $allitem )

<li class="icon"     style="filter: brightness(2) invert(2);">

<a href="{{$allitem->links}}">

<img src="Front/IMG/{{$allitem->social_icon}} " class="soc_icon"/>

</a>

</li>

@endforeach

</div>


<div id="headerlogo" class='img-responsive'>
@foreach($Maxcompanyid as  $Maxid )

<img src="Front/IMG/{{$Maxid->path_pic}}"  id="logo"/>

@endforeach
</div>


<ul class="nav">
   
@foreach($nav  as $item)

    <li class="Dropmenu" >

    @if(!empty($item->submenuico))

    <img src="Front/IMG/{{$item->submenuico}}" class="Micon" />

    @endif

    @if(empty($item->footer))

    <a itemprop="url"  class='navlink'  href="#{{ $item->sub1menu}}">
        <span itemprop="name"> {{$item->sub1menu}} </span> </a>

    @elseif(!empty($item->footer))

      {{ $item->sub1menu}}
      @endif

      </li>


        @endforeach


    <li>  
       @if($SearchBar=='Active')
      
      <form action="{{route('index')}}"  method="get">

@csrf
@Method('GET')


 <input type="text"  size="25"  name="search_input"   class="searcher" style="color: black;"  />


 <input type="submit"  size="25"  name="search_bt" VALUE="search"   class="searchbt"  style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />

           </form>
         

           @endif  </li>


 
    </ul>
  

    </div>     </div>


    <!-- @foreach($nav as $navitem)
  
    <script>
  const links = document.querySelector('.navlink{{$navitem->id}}');
    
if (links.length) {
  links.forEach((link) => {
    link.addEventListener('load', (e) => {
      links.forEach((link) => {
          link.classList.remove('active');
      });
    //   e.preventDefault();
      link.classList.add('active');
    });
  });
}
</script>
@endforeach -->