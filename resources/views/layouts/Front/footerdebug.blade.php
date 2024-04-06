

<!-- <footer class="footer" style=" display: block;
    background: url(../Front/IMG/footer_background.png) center center / cover fixed;
   
    backdrop-filter: invert(1);
    ";> -->
    <div id='FooterCss'> 
   <footer class="footer" v-bind:style=" display: block;
   
    backdrop-filter: invert(1);

    {background:Footercolor}
    ";>


    <div class="info">

    @if (auth::guard('admin')->check())

<a href="{{route('company.index')}}"><INPUT TYPE='submit' name='EDIT_TOPIC'   title='EditINFO' class='insert'  
style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);" value/>   </a>

    @endif


    @foreach($Maxcompanyid as  $Maxid )
    <div class="einfo">
        <div class="soicon"><img src="Front/IMG/ame.png" class="socicon"></a></div><div class="email"><a href="mailto:{{$Maxid->Email}}">  {{$Maxid->Email}}  </a> </div>
        </div>
    <div class="einfo">
        <div class="soicon"><img src="Front/IMG/phone-icon-line-telephone-symbol-vector-21084486.png" class="socicon"></a></div>
        <div class="mobile"><a href="https://api.whatsapp.com/send?phone={{$Maxid->Tele_Number}} ">{{$Maxid->Tele_Number}} </a> </div>
        </div>
    <div class="einfo">
        <div class="soicon"><img src="Front/IMG/Address.png" class="socicon" ></a></div><div class="Address"> {{ $Maxid->country }}  </div>
        </div>
    @endforeach

    </div>

    @if($Footersitemap=='Active')
    <UL id="menu">

    @foreach($navNullfooter  as $Nullfooter  )

    <li class="Link_M"><a href='index.php?MainM_ID= {{$Nullfooter->id}} >'>{{ $Nullfooter->sub1menu }}   </a></li>

    @endforeach
    </UL>

@endif

    <br/>    <br/>
    <br/>
    <br/>    <br/>
    <br/>
    <br/>    <br/>
    <br/>
    <br/>    <br/>
    <br/>

    <div class="copyright" >
    <br />&nbsp;  tiktuk_2023

    @IF (auth::guard('admin')->check())



    <input type="color" name="Footercolor"   
     class="hint--left"  id='Footercolor' aria-label="Footercolor" 
      v-model='Footercolor' onchange='changeFootercolor();' >


@ENDIF
</div>

    @foreach($Maxcompanyid as  $Maxid )

            <div class="logo">

        <img src="Front/IMG/{{$Maxid->path_pic}}"  class="logo"/>

            </div>


         @endforeach

    <div class="socialposition">


    @if (auth::guard('admin')->check())


    <form action="{{route('social.index')}}"  method="get" >
    @csrf
     @method('PUT') 

     

     <INPUT TYPE='submit' name='Edit_social'   title='Edit_social' class='insert'  
style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);" value/>  
    


</form>


    @endif


   @foreach($social as  $allitem )

    <div class="icon">

    <a href="{{$allitem->links}}">

    <img src="Front/IMG/{{$allitem->social_icon}} " class="soc_icon" style="
        background-attachment: scroll;
    filter: brightness(0) invert(1);"/>

    </a>

    </div>

    @endforeach

    </div>




 @if($langsection == 'Active')

<div id='langsection'>

<div id="google_element"></div>

<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"  defer></script>

<script>  

function loadGoogleTranslate() { 
     new google.translate.TranslateElement("google_element")
}
      </script>


</div>

@endif
    </footer>

</div>



    @if (auth::guard('admin')->check())

    <script type="text/javascript">
//DOM  AND OBJECT data  


   new Vue({
	   
      el: "#FooterCss",
		
      data: {
       
        Footercolor:null,
        
        
      }
	  
    })

  
    </script> 





<script type="text/javascript">


function changeFootercolor(e){
    
	
  $.ajax({
	
method:"GET",	

url:"{{route('QuikEditstyle')}}",	

data:{

    Footercolor:$('#Footercolor').val(),

    
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





    