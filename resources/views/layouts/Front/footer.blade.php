<footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">

                    @foreach($Maxcompanyid as  $Maxid )


                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="https://api.whatsapp.com/send?phone={{$Maxid->Tele_Number}}">{{$Maxid->Tele_Number}}</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-aemail" href="mailto:{{$Maxid->Email}}">{{$Maxid->Email}}</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">{{ $Maxid->country }}</a></div>
                        </div>
                      </li>


                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                LOGO
              </div>
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Quick links</h6>


                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                    @if($Footersitemap=='Active')

                    @foreach($navNullfooter  as $Nullfooter  )

                    <li><a href='index.php?MainM_ID={{$Nullfooter->id}}'>
                      @if(empty(@$_GET['lang']))
                       {{ $Nullfooter->sub1menu }}
                      @elseif(@$_GET['lang'] == 'fr')
                        {{ $Nullfooter->Fr_sub1menu }}
                      @elseif(@$_GET['lang'] == 'ar')
                        {{ $Nullfooter->Ar_sub1menu }}
                      @endif
                         
                    </a></li>

                     @endforeach

                     
                      @endif
                    </ul>



                    <div class="group-md group-middle justify-content-sm-start"><a class="button button-secondary button-pipaluk" href="#">
                      @if(empty(@$_GET['lang']))
                        Get in touch
                      @elseif(@$_GET['lang'] == 'fr')
                        Get in touch
                      @elseif(@$_GET['lang'] == 'ar')
                        تواصل معنا
                      @endif
                    </a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>GoodTours </span>. All Rights Reserved. Design by <a href="https://designwayseg.com/">DesignWays</a></p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <p class="rights"><a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>