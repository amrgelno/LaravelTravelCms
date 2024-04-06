@if(auth::guard('member')->user()  )

@foreach ($member_pr as $member_pritem)
    <div class='topic-FRAME'>

<div class="img">

<img src="Front/IMG/{{$member_pritem -> Image1}}" class="img"/>

</div>
<div class="text">
<a href="index.php?Topic_ID={{$member_pritem -> ID}}">
     {{$member_pritem->product_Model}}  </a>
    
    <br>
 <span> {!! $member_pritem->product_Des !!}  </span>


 

 <br/>   <br/> 

 

<input  type="hidden"   name="IDf" id="IDf{{auth::guard('member')->user()->id}}"  value="{{auth::guard('member')->user()->id}}" />


<input  type="hidden"   name="Off_id"  value="{{$member_pritem->id}}" id="Off_id{{$member_pritem->id}}" />                       

<input  type="hidden"   name="IDm"  id="IDm39"  value="0" />

<button  name="submit" type="button"   id="btfx{{$member_pritem->id}}"  
onclick="Delfav{{$member_pritem->id}}();"/> Remove from favorite
   </button> 

  <button   type="button"   id="btmx"  onclick="Addfav{{$member_pritem->id}}();"/>
  Add to favorites</button> 
                                                  
                          
</div>


</div>

<div id="prod_dt">  </div>


<script>
    
    function Addfav{{$member_pritem->id}}() {

		var IDf= $('#IDf{{auth::guard('member')->user()->id}}').val();
     var Off_id = $('#Off_id{{$member_pritem->id}}').val();

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#cart').load('{{route('ADD_fav')}}',{	 
Off_id:Off_id,     
       IDf:IDf,token:"{{csrf_token()}}",Method:"POST"});
	}
	
    </script> 




<script>
    
    function Delfav{{$member_pritem->id}}() {

		var IDf= $('#IDf{{auth::guard('member')->user()->id}}').val();
     var Off_id = $('#Off_id{{$member_pritem->id}}').val();

     $.ajaxSetup({ 

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}  
});


 $('#cart').load('{{route('Del_fav')}}',{	 
Off_id:Off_id,     
       IDf:IDf,token:"{{csrf_token()}}",Method:"POST"});
	}
	
    </script> 


@endforeach @endif








