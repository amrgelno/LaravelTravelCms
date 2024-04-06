@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

<div id='navmassage'>   </div>

</div>

    <!--<div itemscope itemtype="https://schema.org/Person">   </div>
    -->

    <div  id='NAVCSS' class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12"  :style="{background:menucolor}">


    <div itemscope >

      <button type="button"   class="menu"> ≡ Menu   </button>


<!--<div class='socialmedia'>
    @foreach($social as  $allitem )

<li class="icon"     style="filter: brightness(2) invert(2);">

<a href="{{$allitem->links}}">

<img src="Front/IMG/{{$allitem->social_icon}} " class="soc_icon"/>

</a>

</li>

@endforeach

</div>-->


@if($BSModel=='E-commerce') 

@if(auth::guard('member')->user()  )

<div class='membersYs'>

<form action="{{route('woocom')}}"  method='post' style='display:flex;'>

@csrf


<li  style="filter: brightness(2) invert(2);">
<button type="submit" style="background:none; border:none;">   
<img src="Front/ICON/cart.png" class="soc_icon" />
</button>
</li>

<li  >
<a href="{{route('member.Dashboard')}}"> 
  {{auth::guard('member')->user()->username}}  
</a> 

<input type='hidden'  name='member' style="background:unset;  border:unset"
 value="{{auth::guard('member')->user()->id}}">




<div id='cart'> @if(auth()->guard('member')->user()->fav_product) 
  {{auth()->guard('member')->user()->fav_product->count('member_id') }}    @endif  </div>


  
</form>
   </div>

@else

<div class="membersYs">

<li>
 
<a href="{{route('member.Login')}}">تسجيل دخول </a>   </li>

<li>
<a href="{{route('member.register')}}">الاشتراك بالموقع</a> </li>


</div>

@endif
@endif


</div>


<!--<div id="headerlogo" class='img-responsive'>
@foreach($Maxcompanyid as  $Maxid )

<img src="Front/IMG/{{$Maxid->path_pic}}"  id="logo"/>

@endforeach
</div>-->


<ul class="nav">
   
@foreach($nav  as $item)

    <li class="Dropmenu" >

    @if(!empty($item->submenuico))

    <img src="Front/IMG/{{$item->submenuico}}" class="Micon" />

    @endif

    @if(empty($item->footer))

    <a itemprop="url"  class='navlink'  href="index.php?MainM_ID={{$item->id}}"  :style="{color:menufontcolor}">
        <span itemprop="name"> {{$item->sub1menu}} </span> </a>

    @elseif(!empty($item->footer))

      {{ $item->sub1menu}}

      
    <ul id="submenu">


    @if (auth::guard('admin')->check())


    <input type="color" name="fontcolor"   
     class="hint--left"  id='submenufontcolor' aria-label="submenufontcolor"  v-model='submenufontcolor' onchange='changeFontcolor();' >


    <input type="color" name="DropDowncolor"    
    class="hint--left" id='sub1color' aria-label="DropDowncolor" v-model='submenucolor'   onchange='changesub1color();'>

    @endif



      @foreach($nav_sub  as $item_sub)

        <li class="sub1" :style="{background:submenucolor}">

        @if($item_sub->parent_id==$item->id)

 @if(!empty($item_sub->submenuico))

          <img src="Front/IMG/{{$item_sub->submenuico}}" class="Micon"/>

      @endif

      @if(empty( $item_sub->footer))

      <a itemprop="url" href="index.php?MainM_ID={{$item_sub->id}}"   :style="{color:submenufontcolor}">
          <span itemprop="name"> {{$item_sub->sub1menu}} </span> </a>
       
          @endif

          @endif

      @if(!empty($item_sub->footer))


  {{ $item_sub->sub1menu}}


  <ul id="TREMENU">

      @foreach($nav_subm  as $item_tree)

      @if($item_tree->SUBMENUID==$item_sub->id)

        <li class="sub2">

          @if(!empty($item_tree->submenuico))

        <img src="Front/IMG/{{$item_tree->submenuico}}" class="Micon"/>

           @endif

        @if(empty($item_tree->footer))


        <a itemprop="url" href="index.php?MainM_ID={{$item_tree->id}}">
          <span itemprop="name">  {{ $item_tree->sub1menu}} </span> </a>

        @endif


        @endif

        @endforeach

      </li>

    </ul>
        @endif
            @endforeach


           

        </li>

    
     


    </ul>

    @endif
            @endforeach
    </li>
    <li> 


    @if($SearchBar=='Active')
      
       <form action="{{route('index')}}"  method="get">

@csrf
@Method('GET')


  <input type="text"  size="25"  name="search_input"   class="searcher" style="color: black;"  />


  <input type="submit"  size="25"  name="search_bt" VALUE="search"   class="searchbt"  style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />

            </form>
          

            @endif
          </li>
 
    </ul>
  

    @if (auth::guard('admin')->check())



      <input type="color" name="Menucolor"  id='ulcolor'  
       class="hint--left"  aria-label="Menucolor"  v-model='menucolor' onchange='changeulcolor();'>


      <input type="color" name="fontcolor"  id='Fontcolor'   
      class="hint--left"  aria-label="menufontcolor"   v-model='menufontcolor'  onchange='changeFontcolor();'>




<a href="{{route('nav.index')}}">
  
<button   type="button"   name='instopic'   title='Editnav' class='insert'  style="margin: 5% 33%;
    width: 30px;
    height: 33px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);" value/>
  Add to favorites</button>   </a>

    @endif




    </div>

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



@elseif($_GET['lang'] =='ar')

<div id='navmassage'>   </div>


</div>

    <!--<div itemscope itemtype="https://schema.org/Person">   </div>
    -->

    <div  id='NAVCSS' class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12"   
    
    
    :style="{background:menucolor}"  >


    <div itemscope >

      <button type="button"   class="menu"> ≡ Menu   </button>


<!--<div class='socialmedia'>
    @foreach($social as  $allitem )

<li class="icon"     style="filter: brightness(2) invert(2);">

<a href="{{$allitem->links}}">

<img src="Front/IMG/{{$allitem->social_icon}} " class="soc_icon"/>

</a>

</li>

@endforeach

</div>-->


@if($BSModel=='E-commerce') 

@if(auth::guard('member')->user()  )

<div class='membersYs'>

<form action="{{route('woocom')}}"  method='post' style='display:flex;'>

@csrf


<li  style="filter: brightness(2) invert(2);">
<button type="submit" style="background:none; border:none;">   
<img src="Front/ICON/cart.png" class="soc_icon" />
</button>
</li>

<li  >
<a href="{{route('member.Dashboard')}}"> 
  {{auth::guard('member')->user()->username}}  
</a> 

<input type='hidden'  name='member' style="background:unset;  border:unset"
 value="{{auth::guard('member')->user()->id}}">




<div id='cart'> @if(auth()->guard('member')->user()->fav_product) 
  {{auth()->guard('member')->user()->fav_product->count('member_id') }}    @endif  </div>


  
</form>
   </div>

@else

<div class="membersYs">

<li>
 
<a href="{{route('member.Login')}}">تسجيل دخول </a>   </li>

<li>
<a href="{{route('member.register')}}">الاشتراك بالموقع</a> </li>


</div>

@endif
@endif


</div>


<!--<div id="headerlogo" class='img-responsive'>
@foreach($Maxcompanyid as  $Maxid )

<img src="Front/IMG/{{$Maxid->path_pic}}"  id="logo"/>

@endforeach
</div>-->


<ul class="nav"  >
   
@foreach($nav  as $item)


    <li class="Dropmenu" >

    @if(!empty($item->submenuico))

    <img src="Front/IMG/{{$item->submenuico}}" class="Micon" />

    @endif

    @if(empty($item->footer))

    <a itemprop="url"  class='navlink'  href="index.php?MainM_ID={{$item->id}}"  :style="{color:menufontcolor}">
        <span itemprop="name"> {{$item->Ar_sub1menu}} </span> </a>

    @elseif(!empty($item->footer))

      {{ $item->Ar_sub1menu}}

      
    <ul id="submenu">


    @if (auth::guard('admin')->check())


    <input type="color" name="fontcolor"   
     class="hint--left"  id='submenufontcolor' aria-label="submenufontcolor"  v-model='submenufontcolor' onchange='changeFontcolor();' >


    <input type="color" name="DropDowncolor"    
    class="hint--left" id='sub1color' aria-label="DropDowncolor" v-model='submenucolor'   onchange='changesub1color();'>

    @endif



      @foreach($nav_sub  as $item_sub)

        <li class="sub1" :style="{background:submenucolor}">

        @if($item_sub->parent_id==$item->id)

 @if(!empty($item_sub->submenuico))

          <img src="Front/IMG/{{$item_sub->submenuico}}" class="Micon"/>

      @endif

      @if(empty( $item_sub->footer))

      <a itemprop="url" href="index.php?MainM_ID={{$item_sub->id}}"   :style="{color:submenufontcolor}">
          <span itemprop="name"> {{$item_sub->Ar_sub1menu}} </span> </a>
       
          @endif

          @endif

      @if(!empty($item_sub->footer))


  {{ $item_sub->Ar_sub1menu}}


  <ul id="TREMENU">

      @foreach($nav_subm  as $item_tree)

      @if($item_tree->SUBMENUID==$item_sub->id)

        <li class="sub2">

          @if(!empty($item_tree->submenuico))

        <img src="Front/IMG/{{$item_tree->submenuico}}" class="Micon"/>

           @endif

        @if(empty($item_tree->footer))


        <a itemprop="url" href="index.php?MainM_ID={{$item_tree->id}}">
          <span itemprop="name">  {{ $item_tree->Ar_sub1menu}} </span> </a>

        @endif


        @endif

        @endforeach

      </li>

    </ul>
        @endif
            @endforeach



        </li>


    </ul>

    @endif
            @endforeach
    </li>
    <li dir='ltr'> 


    @if($SearchBar=='Active')
      
       <form action="{{route('index')}}"  method="get">

@csrf
@Method('GET')


  <input type="text"  size="25"  name="search_input"   class="searcher" style="color: black;"  />


  <input type="submit"  size="25"  name="search_bt" VALUE="search"   class="searchbt"  style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />

            </form>
          

            @endif
          </li>
 
    </ul>
  

    @if (auth::guard('admin')->check())



      <input type="color" name="Menucolor"  id='ulcolor'  
       class="hint--left"  aria-label="Menucolor"  v-model='menucolor' onchange='changeulcolor();'>


      <input type="color" name="fontcolor"  id='Fontcolor'   
      class="hint--left"  aria-label="menufontcolor"   v-model='menufontcolor'  onchange='changeFontcolor();'>




<a href="{{route('nav.index')}}">
  
<button   type="button"   name='instopic'   title='Editnav' class='insert'  style="margin: 5% 33%;
    width: 30px;
    height: 33px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);" value/>
  Add to favorites</button>   </a>

    @endif




    </div>



    @endif


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


<script>
  
function changeulcolor(e){
  
  
  $.ajax({
    
  method:"GET",	
  
  url:"{{route('QuikEditstyle')}}",	
  
  data:{
  
  ulcolor:$('#ulcolor').val(),
  
    
   },
  
  
   
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  } ,
  
  success:function(data , status) {
        console.log(data);
        console.log(status);
        console.log(xhr);
    }
    
      });		
  
  
  }
  
  
  function changeFontcolor(e){
    
    
  $.ajax({
    
  method:"GET",	
  
  url:"{{route('QuikEditstyle')}}",	
  
  data:{
  
  Fontcolor:$('#Fontcolor').val(),
    
   },
  
  
   
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  } ,
  
  success:function(data , status) {
        console.log(data);
        console.log(status);
        console.log(xhr);
    }
    
      });		
  
  
  }
  
  
  function changesub1color(e){
    
    
  $.ajax({
    
  method:"GET",	
  
  url:"{{route('QuikEditstyle')}}",	
  
  data:{
  
  sub1color:$('#sub1color').val(),
  
    
   },
  
  
   
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  } ,
  
  success:function(data , status) {
        console.log(data);
        console.log(status);
        console.log(xhr);
    }
    
      });		
  
  
  }
</script>  





















































