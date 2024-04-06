

<!-- <footer class="footer" style=" display: block;
    background: url(../Front/IMG/footer_background.png) center center / cover fixed;
   
    backdrop-filter: invert(1);
    ";> -->

   <footer class="footer" style=" display: block;
   
    backdrop-filter: invert(1);
    ";>


    <div class="info">

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
</div>

    @foreach($Maxcompanyid as  $Maxid )

            <div class="logo">

        <img src="Front/IMG/{{$Maxid->path_pic}}"  class="logo"/>

            </div>


         @endforeach

    <div class="socialposition">

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



















    