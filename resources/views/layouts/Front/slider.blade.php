<!-- Use downloaded version of Bootstrap -->


@if((@$_GET['MainM_ID']==1)  or empty($_GET['MainM_ID']))

 @if((@$_GET['box_ID']==0))



 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">


 @if (auth::guard('admin')->check())


<form action="{{route('slider.index')}}" method="get">

@csrf

@method('PUT')  

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>


@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID)  )
<INPUT TYPE='submit' name='Edit_slider'   title='Edit Slider' class='insert'  
style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);" value/>  

    @endif


 

</form>


@endif


      <!--  <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div> -->

        <div class="carousel-inner">


        @foreach($sliderMin as $MinItem)

          <div class="carousel-item active">

          <img src="Front/IMG/{{$MinItem->ImageName}}"  loading='lazy' class="Image" width="100%" height="400px" />

            <div class="carousel-caption d-none d-md-block">
              <h5>{{$MinItem->title}}</h5>
              <p>  {{$MinItem->description}} </p>
            </div>
          </div>

@endforeach







@foreach($sliderMax as $MaxItem)
<div class="carousel-item">

            <img class="w-100" src="Front/IMG/{{$MaxItem->ImageName}} "loading='lazy' class="Image" width="100%" height="400px">    

            <div class="carousel-caption d-none d-md-block">
              <h5>{{$MaxItem->title}}</h5>
              <p>{{$MaxItem->description}}</p>
            </div>
          </div>

      @endforeach

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      
</div>


@foreach($sliderMin as $MinItem)

        <div class="tab-content2 col-lg-8 snipcss-CjOft" id="myTabContent">
          <div id="air2" class="tab-pane fade active in style-KUb33" tabindex="5000">
            <div class="col-md-12">
              <div class="w100percent">
                <div class="wh90percent textleft">
                  <input type="hidden" id="Hidden1" name="portal_code" value="travco">
                  <input type="hidden" id="cal_search" value="FALSE">
                  <input name="Amadeus1$flight_typechecker" type="hidden" id="Amadeus1_flight_typechecker" value="RoundTrip">
                  <input type="radio" name="flight_type" id="flight_type1" value="RoundTrip" checked="">
                  <span class="opensans size13">
                    Round Trip
                  </span>
                  &nbsp;&nbsp;
                  <input type="radio" name="flight_type" id="flight_type2" value="OneWay">
                  <span class="opensans size13">
                    One Way
                  </span>
                  <br>
                  <br>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Flying from
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator1" class="style-hxn2U">
                      *
                    </span>
                  </span>
                  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                  </span>
                  <input name="Amadeus1$air_dep_port" type="text" id="Amadeus1_air_dep_port" class="form-control ui-autocomplete-input" placeholder="City or airport" validationgroup="Form_Flight" autocomplete="off">
                  <div class="ac_results custom1 style-2aTlV" id="style-2aTlV">
                    <ul id="style-i11Vd" class="style-i11Vd">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      To
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator3" class="style-sULbQ">
                      *
                    </span>
                  </span>
                  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                  </span>
                  <input name="Amadeus1$air_arr_port" type="text" id="Amadeus1_air_arr_port" class="form-control ui-autocomplete-input" placeholder="City or airport" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Departure Date
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator2" class="style-1sSP1">
                      *
                    </span>
                  </span>
                  <input name="Amadeus1$flight_dep_calendar" type="text" id="Amadeus1_flight_dep_calendar" class="form-control mySelectCalendar hasDatepicker" placeholder="dd/mm/yyyy" validationgroup="Form_Flight">
                </div>
              </div>
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b style = "margin-left : 16px">
                      Return Date
                    </b>
                  </span>
                  <input name="Amadeus1$flight_arr_calendar" type="text" id="Amadeus1_flight_arr_calendar" class="form-control mySelectCalendar hasDatepicker" placeholder="dd/mm/yyyy" style = " margin-left : 16px ">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percentlast style-GpwJz" id="style-GpwJz">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Departure Time
                      </b>
                    </span>
                    <select name="Amadeus1$dep_time" id="Amadeus1_dep_time" class="form-control mySelectBoxClass hasCustomSelect style-Ecxo6">
                      <option selected="selected" value="00:01">
                        NoPreference
                      </option>
                      <option value="MORNING">
                        Morning
                      </option>
                      <option value="AFTERNOON">
                        AFTERNOON
                      </option>
                      <option value="EVENING">
                        EVENING
                      </option>
                      <option value="00:00">
                        00:00
                      </option>
                      <option value="01:00">
                        01:00
                      </option>
                      <option value="02:00">
                        02:00
                      </option>
                      <option value="03:00">
                        03:00
                      </option>
                      <option value="04:00">
                        04:00
                      </option>
                      <option value="05:00">
                        05:00
                      </option>
                      <option value="06:00">
                        06:00
                      </option>
                      <option value="07:00">
                        07:00
                      </option>
                      <option value="08:00">
                        08:00
                      </option>
                      <option value="09:00">
                        09:00
                      </option>
                      <option value="10:00">
                        10:00
                      </option>
                      <option value="11:00">
                        11:00
                      </option>
                      <option value="12:00">
                        12:00
                      </option>
                      <option value="13:00">
                        13:00
                      </option>
                      <option value="14:00">
                        14:00
                      </option>
                      <option value="15:00">
                        15:00
                      </option>
                      <option value="16:00">
                        16:00
                      </option>
                      <option value="17:00">
                        17:00
                      </option>
                      <option value="18:00">
                        18:00
                      </option>
                      <option value="19:00">
                        19:00
                      </option>
                      <option value="20:00">
                        20:00
                      </option>
                      <option value="21:00">
                        21:00
                      </option>
                      <option value="22:00">
                        22:00
                      </option>
                      <option value="23:00">
                        23:00
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-GyIJG" id="style-GyIJG">
                      <span class="customSelectInner style-7gPEn" id="style-7gPEn">
                        NoPreference
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast style-H165t" id="style-H165t">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Return Time
                      </b>
                    </span>
                    <select name="Amadeus1$arr_time" id="Amadeus1_arr_time" class="form-control mySelectBoxClass hasCustomSelect style-JL17H">
                      <option selected="selected" value="00:01">
                        NoPreference
                      </option>
                      <option value="MORNING">
                        Morning
                      </option>
                      <option value="AFTERNOON">
                        AFTERNOON
                      </option>
                      <option value="EVENING">
                        EVENING
                      </option>
                      <option value="00:00">
                        00:00
                      </option>
                      <option value="01:00">
                        01:00
                      </option>
                      <option value="02:00">
                        02:00
                      </option>
                      <option value="03:00">
                        03:00
                      </option>
                      <option value="04:00">
                        04:00
                      </option>
                      <option value="05:00">
                        05:00
                      </option>
                      <option value="06:00">
                        06:00
                      </option>
                      <option value="07:00">
                        07:00
                      </option>
                      <option value="08:00">
                        08:00
                      </option>
                      <option value="09:00">
                        09:00
                      </option>
                      <option value="10:00">
                        10:00
                      </option>
                      <option value="11:00">
                        11:00
                      </option>
                      <option value="12:00">
                        12:00
                      </option>
                      <option value="13:00">
                        13:00
                      </option>
                      <option value="14:00">
                        14:00
                      </option>
                      <option value="15:00">
                        15:00
                      </option>
                      <option value="16:00">
                        16:00
                      </option>
                      <option value="17:00">
                        17:00
                      </option>
                      <option value="18:00">
                        18:00
                      </option>
                      <option value="19:00">
                        19:00
                      </option>
                      <option value="20:00">
                        20:00
                      </option>
                      <option value="21:00">
                        21:00
                      </option>
                      <option value="22:00">
                        22:00
                      </option>
                      <option value="23:00">
                        23:00
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-YmIgf" id="style-YmIgf">
                      <span class="customSelectInner style-Pnsof" id="style-Pnsof">
                        NoPreference
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        Traveller
                      </b>
                    </span>
                    <select name="Amadeus1$ddl_AdultNo" id="Amadeus1_ddl_AdultNo" class="form-control mySelectBoxClass hasCustomSelect style-MJJwr">
                      <option selected="selected" value="1">
                        1
                      </option>
                      <option value="2">
                        2
                      </option>
                      <option value="3">
                        3
                      </option>
                      <option value="4">
                        4
                      </option>
                      <option value="5">
                        5
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-YoU4K" id="style-YoU4K">
                      <span class="customSelectInner style-iqkKK" id="style-iqkKK">
                        1
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Child (2-18 years)
                      </b>
                    </span>
                    <select name="Amadeus1$ddl_childno" id="Amadeus1_ddl_childno" class="form-control mySelectBoxClass hasCustomSelect style-cbAvP">
                      <option selected="selected" value="0">
                        0
                      </option>
                      <option value="1">
                        1
                      </option>
                      <option value="2">
                        2
                      </option>
                      <option value="3">
                        3
                      </option>
                      <option value="4">
                        4
                      </option>
                      <option value="5">
                        5
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-hl9AB" id="style-hl9AB">
                      <span class="customSelectInner style-4clov" id="style-4clov">
                        0
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Infant (0-2 year)
                    </b>
                  </span>
                  <select name="Amadeus1$ddl_infantno" id="Amadeus1_ddl_infantno" class="form-control mySelectBoxClass hasCustomSelect style-proDL">
                    <option selected="selected" value="0">
                      0
                    </option>
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-HliUP" id="style-HliUP">
                    <span class="customSelectInner style-cJSrJ" id="style-cJSrJ">
                      0
                    </span>
                  </span>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Cabin Class
                    </b>
                  </span>
                  <select name="Amadeus1$ddl_CabinClass" id="Amadeus1_ddl_CabinClass" class="form-control mySelectBoxClass hasCustomSelect style-NTUNT">
                    <option value="">
                      No Preference
                    </option>
                    <option selected="selected" value="Y">
                      Economy
                    </option>
                    <option value="W">
                      Premium
                    </option>
                    <option value="C">
                      Business
                    </option>
                    <option value="F">
                      First
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-Cpaxg" id="style-Cpaxg">
                    <span class="customSelectInner style-h223T" id="style-h223T">
                      Economy
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                      </b>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <input type="submit" name="Amadeus1$btn_Search_Flight" value="Search" style="background:#162e44;" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Amadeus1$btn_Search_Flight&quot;, &quot;&quot;, true, &quot;Form_Flight&quot;, &quot;&quot;, false, false))" id="Amadeus1_btn_Search_Flight" class="btn-search right mr30">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="hotel2" class="tab-pane fade style-1VxWT" tabindex="5001">
            <div class="col-md-12">
              <br>
              <br>
            </div>
            <div class="col-md-4 pt-6">
              <span class="opensans size18">
                Where do you want to go?
                <span id="Amadeus1_RequiredFieldValidator4" class="style-691Ud">
                  *
                </span>
              </span>
              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
              </span>
              <input name="Amadeus1$hotel_city_port" type="text" id="Amadeus1_hotel_city_port" class="form-control ui-autocomplete-input" placeholder="City or airport" validationgroup="Form_Hotel" autocomplete="off">
              <div class="ac_results custom1 style-dFMY2" id="style-dFMY2">
                <ul id="style-gMs8b" class="style-gMs8b">
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Check in date
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator5" class="style-Di843">
                      *
                    </span>
                  </span>
                  <input name="Amadeus1$hotel_dep_calendar" type="text" id="Amadeus1_hotel_dep_calendar" class="form-control mySelectCalendar hasDatepicker" placeholder="dd/mm/yyyy" validationgroup="Form_Hotel">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Check in date
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator6" class="style-OG8Nt">
                      *
                    </span>
                  </span>
                  <input name="Amadeus1$hotel_arr_calendar" type="text" id="Amadeus1_hotel_arr_calendar" class="form-control mySelectCalendar hasDatepicker" placeholder="dd/mm/yyyy" validationgroup="Form_Hotel">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft left">
                    <span class="opensans size13">
                      <b>
                        Total Passengers
                      </b>
                    </span>
                    <select name="Amadeus1$hotel_occupancy" id="Amadeus1_hotel_occupancy" class="form-control mySelectBoxClass hasCustomSelect style-8MAVT">
                      <option selected="selected" value="1">
                        1
                      </option>
                      <option value="2">
                        2
                      </option>
                      <option value="3">
                        3
                      </option>
                      <option value="4">
                        4
                      </option>
                      <option value="5">
                        5
                      </option>
                      <option value="6">
                        6
                      </option>
                      <option value="7">
                        7
                      </option>
                      <option value="8">
                        8
                      </option>
                      <option value="9">
                        9
                      </option>
                      <option value="10">
                        10
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-neY59" id="style-neY59">
                      <span class="customSelectInner style-bdV9P" id="style-bdV9P">
                        1
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Hotel Rating
                      </b>
                    </span>
                    <select name="Amadeus1$hotel_category" id="Amadeus1_hotel_category" class="form-control mySelectBoxClass hasCustomSelect style-CSaZC">
                      <option selected="selected" value="">
                        Any
                      </option>
                      <option value="F">
                        First Class
                      </option>
                      <option value="L">
                        Luxury
                      </option>
                      <option value="S">
                        Standard
                      </option>
                      <option value="T">
                        Budget
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-av7br" id="style-av7br">
                      <span class="customSelectInner style-tyLMG" id="style-tyLMG">
                        Any
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit" name="Amadeus1$btn_Search_Hotel" value="Search" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Amadeus1$btn_Search_Hotel&quot;, &quot;&quot;, true, &quot;Form_Hotel&quot;, &quot;&quot;, false, false))" id="Amadeus1_btn_Search_Hotel" class="btn-search right mr30">
            </div>
          </div>
          <div id="car2" class="tab-pane fade style-R1Qfp" tabindex="5002">
            <div class="col-md-12">
              <div class="w100percent">
                &nbsp;
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Pickup Location
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator7" class="style-opAkU">
                      *
                    </span>
                  </span>
                  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                  </span>
                  <input name="Amadeus1$cars_from" type="text" id="Amadeus1_cars_from" class="form-control ui-autocomplete-input" placeholder="Airport, address" validationgroup="Form_Car" autocomplete="off">
                  <div class="ac_results custom1 style-MwGJA" id="style-MwGJA">
                    <ul id="style-tHmlX" class="style-tHmlX">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Drop-Off Location
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator8" class="style-41QEt">
                      *
                    </span>
                  </span>
                  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                  </span>
                  <input name="Amadeus1$cars_to" type="text" id="Amadeus1_cars_to" class="form-control ui-autocomplete-input" placeholder="Airport, address" validationgroup="Form_Car" autocomplete="off">
                  <div class="ac_results custom1 style-n8O8M" id="style-n8O8M">
                    <ul id="style-c1WE7" class="style-c1WE7">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Pick up date
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator9" class="style-jVhrK">
                      *
                    </span>
                  </span>
                  <input name="Amadeus1$cars_date_start" type="text" id="Amadeus1_cars_date_start" class="form-control mySelectCalendar hasDatepicker" validationgroup="Form_Car" placeholder="dd/mm/yyyy">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Pick-up Time
                    </b>
                  </span>
                  <select name="Amadeus1$ddl_cars_pickuptime" id="Amadeus1_ddl_cars_pickuptime" class="form-control mySelectBoxClass hasCustomSelect style-Rp1HN">
                    <option value="12:00 AM">
                      12:00 AM
                    </option>
                    <option value="12:30 AM">
                      12:30 AM
                    </option>
                    <option value="01:00 AM">
                      01:00 AM
                    </option>
                    <option value="01:30 AM">
                      01:30 AM
                    </option>
                    <option value="02:00 AM">
                      02:00 AM
                    </option>
                    <option value="02:30 AM">
                      02:30 AM
                    </option>
                    <option value="03:00 AM">
                      03:00 AM
                    </option>
                    <option value="03:30 AM">
                      03:30 AM
                    </option>
                    <option value="04:00 AM">
                      04:00 AM
                    </option>
                    <option value="04:30 AM">
                      04:30 AM
                    </option>
                    <option value="05:00 AM">
                      05:00 AM
                    </option>
                    <option value="05:30 AM">
                      05:30 AM
                    </option>
                    <option value="06:00 AM">
                      06:00 AM
                    </option>
                    <option value="06:30 AM">
                      06:30 AM
                    </option>
                    <option value="07:00 AM">
                      07:00 AM
                    </option>
                    <option value="07:30 AM">
                      07:30 AM
                    </option>
                    <option value="08:00 AM">
                      08:00 AM
                    </option>
                    <option value="08:30 AM">
                      08:30 AM
                    </option>
                    <option value="09:00 AM">
                      09:00 AM
                    </option>
                    <option value="09:30 AM">
                      09:30 AM
                    </option>
                    <option value="10:00 AM">
                      10:00 AM
                    </option>
                    <option selected="selected" value="10:30 AM">
                      10:30 AM
                    </option>
                    <option value="11:00 AM">
                      11:00 AM
                    </option>
                    <option value="11:30 AM">
                      11:30 AM
                    </option>
                    <option value="12:00 PM">
                      12:00 PM
                    </option>
                    <option value="12:30 PM">
                      12:30 PM
                    </option>
                    <option value="01:00 PM">
                      01:00 PM
                    </option>
                    <option value="01:30 PM">
                      01:30 PM
                    </option>
                    <option value="02:00 PM">
                      02:00 PM
                    </option>
                    <option value="02:30 PM">
                      02:30 PM
                    </option>
                    <option value="03:00 PM">
                      03:00 PM
                    </option>
                    <option value="03:30 PM">
                      03:30 PM
                    </option>
                    <option value="04:00 PM">
                      04:00 PM
                    </option>
                    <option value="04:30 PM">
                      04:30 PM
                    </option>
                    <option value="05:00 PM">
                      05:00 PM
                    </option>
                    <option value="05:30 PM">
                      05:30 PM
                    </option>
                    <option value="06:00 PM">
                      06:00 PM
                    </option>
                    <option value="06:30 PM">
                      06:30 PM
                    </option>
                    <option value="07:00 PM">
                      07:00 PM
                    </option>
                    <option value="07:30 PM">
                      07:30 PM
                    </option>
                    <option value="08:00 PM">
                      08:00 PM
                    </option>
                    <option value="08:30 PM">
                      08:30 PM
                    </option>
                    <option value="09:00 PM">
                      09:00 PM
                    </option>
                    <option value="09:30 PM">
                      09:30 PM
                    </option>
                    <option value="10:00 PM">
                      10:00 PM
                    </option>
                    <option value="10:30 PM">
                      10:30 PM
                    </option>
                    <option value="11:00 PM">
                      11:00 PM
                    </option>
                    <option value="11:30 PM">
                      11:30 PM
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-q3ONH" id="style-q3ONH">
                    <span class="customSelectInner style-geseB" id="style-geseB">
                      10:30 AM
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Drop off date
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator10" class="style-aQmnE">
                      *
                    </span>
                  </span>
                  <input name="Amadeus1$cars_date_end" type="text" id="Amadeus1_cars_date_end" class="form-control mySelectCalendar hasDatepicker" validationgroup="Form_Car" placeholder="dd/mm/yyyy">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Drop-off Time
                    </b>
                  </span>
                  <select name="Amadeus1$ddl_cars_dropofftime" id="Amadeus1_ddl_cars_dropofftime" class="form-control mySelectBoxClass hasCustomSelect style-Kmoww">
                    <option value="12:00 AM">
                      12:00 AM
                    </option>
                    <option value="12:30 AM">
                      12:30 AM
                    </option>
                    <option value="01:00 AM">
                      01:00 AM
                    </option>
                    <option value="01:30 AM">
                      01:30 AM
                    </option>
                    <option value="02:00 AM">
                      02:00 AM
                    </option>
                    <option value="02:30 AM">
                      02:30 AM
                    </option>
                    <option value="03:00 AM">
                      03:00 AM
                    </option>
                    <option value="03:30 AM">
                      03:30 AM
                    </option>
                    <option value="04:00 AM">
                      04:00 AM
                    </option>
                    <option value="04:30 AM">
                      04:30 AM
                    </option>
                    <option value="05:00 AM">
                      05:00 AM
                    </option>
                    <option value="05:30 AM">
                      05:30 AM
                    </option>
                    <option value="06:00 AM">
                      06:00 AM
                    </option>
                    <option value="06:30 AM">
                      06:30 AM
                    </option>
                    <option value="07:00 AM">
                      07:00 AM
                    </option>
                    <option value="07:30 AM">
                      07:30 AM
                    </option>
                    <option value="08:00 AM">
                      08:00 AM
                    </option>
                    <option value="08:30 AM">
                      08:30 AM
                    </option>
                    <option value="09:00 AM">
                      09:00 AM
                    </option>
                    <option value="09:30 AM">
                      09:30 AM
                    </option>
                    <option value="10:00 AM">
                      10:00 AM
                    </option>
                    <option selected="selected" value="10:30 AM">
                      10:30 AM
                    </option>
                    <option value="11:00 AM">
                      11:00 AM
                    </option>
                    <option value="11:30 AM">
                      11:30 AM
                    </option>
                    <option value="12:00 PM">
                      12:00 PM
                    </option>
                    <option value="12:30 PM">
                      12:30 PM
                    </option>
                    <option value="01:00 PM">
                      01:00 PM
                    </option>
                    <option value="01:30 PM">
                      01:30 PM
                    </option>
                    <option value="02:00 PM">
                      02:00 PM
                    </option>
                    <option value="02:30 PM">
                      02:30 PM
                    </option>
                    <option value="03:00 PM">
                      03:00 PM
                    </option>
                    <option value="03:30 PM">
                      03:30 PM
                    </option>
                    <option value="04:00 PM">
                      04:00 PM
                    </option>
                    <option value="04:30 PM">
                      04:30 PM
                    </option>
                    <option value="05:00 PM">
                      05:00 PM
                    </option>
                    <option value="05:30 PM">
                      05:30 PM
                    </option>
                    <option value="06:00 PM">
                      06:00 PM
                    </option>
                    <option value="06:30 PM">
                      06:30 PM
                    </option>
                    <option value="07:00 PM">
                      07:00 PM
                    </option>
                    <option value="07:30 PM">
                      07:30 PM
                    </option>
                    <option value="08:00 PM">
                      08:00 PM
                    </option>
                    <option value="08:30 PM">
                      08:30 PM
                    </option>
                    <option value="09:00 PM">
                      09:00 PM
                    </option>
                    <option value="09:30 PM">
                      09:30 PM
                    </option>
                    <option value="10:00 PM">
                      10:00 PM
                    </option>
                    <option value="10:30 PM">
                      10:30 PM
                    </option>
                    <option value="11:00 PM">
                      11:00 PM
                    </option>
                    <option value="11:30 PM">
                      11:30 PM
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-xxXtW" id="style-xxXtW">
                    <span class="customSelectInner style-x16Zd" id="style-x16Zd">
                      10:30 AM
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Vehicle Type
                    </b>
                  </span>
                  <select name="Amadeus1$car_vehicle_type" id="Amadeus1_car_vehicle_type" class="form-control mySelectBoxClass hasCustomSelect style-6TVMW">
                    <option selected="selected" value="">
                      Select
                    </option>
                    <option value="J">
                      ALL Terrain
                    </option>
                    <option value="T">
                      Convertible
                    </option>
                    <option value="D">
                      Four Door Car
                    </option>
                    <option value="F">
                      Four Wheel Drive
                    </option>
                    <option value="L">
                      Limousine
                    </option>
                    <option value="P">
                      PickUp
                    </option>
                    <option value="R">
                      Recreational
                    </option>
                    <option value="X">
                      Special
                    </option>
                    <option value="S">
                      Sport
                    </option>
                    <option value="K">
                      Truck
                    </option>
                    <option value="B">
                      Two Door Car
                    </option>
                    <option value="C">
                      Two Or Four Door Car
                    </option>
                    <option value="V">
                      Van
                    </option>
                    <option value="W">
                      Wagon
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-zWoDk" id="style-zWoDk">
                    <span class="customSelectInner style-wJOS5" id="style-wJOS5">
                      Select
                    </span>
                  </span>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Vehicle Class
                    </b>
                  </span>
                  <select name="Amadeus1$car_vehicle_class" id="Amadeus1_car_vehicle_class" class="form-control mySelectBoxClass hasCustomSelect style-SBIY5">
                    <option selected="selected" value="">
                      Select
                    </option>
                    <option value="C">
                      Compact
                    </option>
                    <option value="E">
                      Economy
                    </option>
                    <option value="F">
                      FullSize
                    </option>
                    <option value="I">
                      Intermediate
                    </option>
                    <option value="L">
                      Luxury
                    </option>
                    <option value="M">
                      Mini
                    </option>
                    <option value="P">
                      Premium
                    </option>
                    <option value="X">
                      Special
                    </option>
                    <option value="S">
                      Standard
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-qOlG3" id="style-qOlG3">
                    <span class="customSelectInner style-3KGnC" id="style-3KGnC">
                      Select
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <input type="submit" name="Amadeus1$btn_Search_Car" value="Search" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Amadeus1$btn_Search_Car&quot;, &quot;&quot;, true, &quot;Form_Car&quot;, &quot;&quot;, false, false))" id="Amadeus1_btn_Search_Car" class="btn-search right mr30">
                </div>
              </div>
            </div>
          </div>
          <div id="vacations2" class="tab-pane fade style-CVrPW" tabindex="5003">
            <div class="col-md-12">
              <br>
              &nbsp;
            </div>
            <div class="col-md-4 pt-6">
              <span class="opensans size13">
                <b>
                  Where do you want to go?
                </b>
              </span>
              <select name="Amadeus1$ddl_vacation_goingto" id="Amadeus1_ddl_vacation_goingto" class="form-control mySelectBoxClass hasCustomSelect style-RAqHb">
                <option selected="selected" value="international-holidays.aspx">
                  Show all
                </option>
                <option value="africa-holidays.aspx">
                  Africa
                </option>
                <option value="far-east-holidays.aspx">
                  Asia / Far East
                </option>
                <option value="middle-east.aspx">
                  Middle East
                </option>
                <option value="eastern-europe.aspx">
                  Eastern Europe
                </option>
                <option value="europe-holidays.aspx">
                  Europe
                </option>
                <option value="usa-holidays.aspx">
                  America
                </option>
              </select>
              <span class="customSelect form-control mySelectBoxClass style-5awhP" id="style-5awhP">
                <span class="customSelectInner style-QWADw" id="style-QWADw">
                  Show all
                </span>
              </span>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <input type="submit" name="Amadeus1$btn_vacation" value="Search" id="Amadeus1_btn_vacation" class="btn-search right mr30">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Interest &amp; Holiday Type
                    </b>
                  </span>
                  <select name="Amadeus1$ddl_vacation_type" id="Amadeus1_ddl_vacation_type" class="form-control mySelectBoxClass hasCustomSelect style-OSsho">
                    <option selected="selected" value="international-holidays.aspx">
                      Show all
                    </option>
                    <option value="christmas-holidays.aspx">
                      Christmas
                    </option>
                    <option value="newyear-holidays.aspx">
                      New Year
                    </option>
                    <option value="midyear-holidays.aspx">
                      Midyear
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-5oEFO" id="style-5oEFO">
                    <span class="customSelectInner style-V9PQI" id="style-V9PQI">
                      Show all
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <input type="submit" name="Amadeus1$btn_vacation2" value="Search" id="Amadeus1_btn_vacation2" class="btn-search right mr30">
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="flighthotel2" class="tab-pane fade style-h4YBV" tabindex="5004">
            <div class="col-md-12">
              &nbsp;
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Flying from
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator11" class="style-yGb6o">
                      *
                    </span>
                  </span>
                  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                  </span>
                  <input name="Amadeus1$FlightHotel_Airport_From" type="text" id="Amadeus1_FlightHotel_Airport_From" class="form-control ui-autocomplete-input" placeholder="City or airport" validationgroup="Form_FlightHotel" autocomplete="off">
                  <div class="ac_results custom1 style-W78oq" id="style-W78oq">
                    <ul id="style-YCU67" class="style-YCU67">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      To
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator12" class="style-gx7im">
                      *
                    </span>
                  </span>
                  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                  </span>
                  <input name="Amadeus1$FlightHotel_Airport_To" type="text" id="Amadeus1_FlightHotel_Airport_To" class="form-control ui-autocomplete-input" placeholder="City or airport" validationgroup="Form_FlightHotel" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Departure Date
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator13" class="style-eLRGC">
                      *
                    </span>
                  </span>
                  <input name="Amadeus1$FlightHotel_Date_From" type="text" id="Amadeus1_FlightHotel_Date_From" class="form-control mySelectCalendar hasDatepicker" placeholder="dd/mm/yyyy">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Return Date
                    </b>
                    <span id="Amadeus1_RequiredFieldValidator14" class="style-MMRL6">
                      *
                    </span>
                  </span>
                  <input name="Amadeus1$FlightHotel_Date_To" type="text" id="Amadeus1_FlightHotel_Date_To" class="form-control mySelectCalendar hasDatepicker" placeholder="dd/mm/yyyy">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        Cabin Class
                      </b>
                    </span>
                    <select name="Amadeus1$FlightHotel_CabinClass" id="Amadeus1_FlightHotel_CabinClass" class="form-control mySelectBoxClass hasCustomSelect style-N48pR">
                      <option selected="selected" value="Y">
                        Economy
                      </option>
                      <option value="C">
                        Business
                      </option>
                      <option value="F">
                        First
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-Q1ivL" id="style-Q1ivL">
                      <span class="customSelectInner style-ynjlU" id="style-ynjlU">
                        Economy
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Hotel Rating
                      </b>
                    </span>
                    <select name="Amadeus1$FlightHotel_HotelCategory" id="Amadeus1_FlightHotel_HotelCategory" class="form-control mySelectBoxClass hasCustomSelect style-CUhCR">
                      <option selected="selected" value="">
                        Any
                      </option>
                      <option value="F">
                        First Class
                      </option>
                      <option value="L">
                        Luxury
                      </option>
                      <option value="S">
                        Standard
                      </option>
                      <option value="T">
                        Budget
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-VfAj5" id="style-VfAj5">
                      <span class="customSelectInner style-F7eh4" id="style-F7eh4">
                        Any
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        Hotel Location
                      </b>
                    </span>
                    <select name="Amadeus1$FlightHotel_HotelLocation" id="Amadeus1_FlightHotel_HotelLocation" class="form-control mySelectBoxClass hasCustomSelect style-21Jkb">
                      <option selected="selected" value="">
                        Select
                      </option>
                      <option value="A">
                        Airport
                      </option>
                      <option value="D">
                        Downtown
                      </option>
                      <option value="E">
                        East
                      </option>
                      <option value="N">
                        North
                      </option>
                      <option value="R">
                        Resort
                      </option>
                      <option value="S">
                        South
                      </option>
                      <option value="W">
                        West
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-dmE4N" id="style-dmE4N">
                      <span class="customSelectInner style-8azMb" id="style-8azMb">
                        Select
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Traveller
                      </b>
                    </span>
                    <select name="Amadeus1$FlightHotel_AdultNo" id="Amadeus1_FlightHotel_AdultNo" class="form-control mySelectBoxClass hasCustomSelect style-nyGG7">
                      <option selected="selected" value="1">
                        1
                      </option>
                      <option value="2">
                        2
                      </option>
                      <option value="3">
                        3
                      </option>
                      <option value="4">
                        4
                      </option>
                      <option value="5">
                        5
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-WbnhO" id="style-WbnhO">
                      <span class="customSelectInner style-8F4mR" id="style-8F4mR">
                        1
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Child (2-18 years)
                    </b>
                  </span>
                  <select name="Amadeus1$FlightHotel_ChildNo" id="Amadeus1_FlightHotel_ChildNo" class="form-control mySelectBoxClass hasCustomSelect style-xz9jv">
                    <option selected="selected" value="0">
                      0
                    </option>
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-eyf5i" id="style-eyf5i">
                    <span class="customSelectInner style-6b4pa" id="style-6b4pa">
                      0
                    </span>
                  </span>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Infant (0-2 year)
                    </b>
                  </span>
                  <select name="Amadeus1$FlightHotel_InfantNo" id="Amadeus1_FlightHotel_InfantNo" class="form-control mySelectBoxClass hasCustomSelect style-lZb43">
                    <option selected="selected" value="0">
                      0
                    </option>
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-hkLvw" id="style-hkLvw">
                    <span class="customSelectInner style-glOQp" id="style-glOQp">
                      0
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                      </b>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <input type="submit" name="Amadeus1$btn_Search_FlightHotel" value="Search" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Amadeus1$btn_Search_FlightHotel&quot;, &quot;&quot;, true, &quot;Form_FlightHotel&quot;, &quot;&quot;, false, false))" id="Amadeus1_btn_Search_FlightHotel" class="btn-search right mr30">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="cruise2" class="tab-pane fade style-Rj6nP" tabindex="5005">
            <div class="col-md-6">
              <span class="opensans size13">
                <b>
                  Going to
                </b>
              </span>
              <select class="form-control mySelectBoxClass hasCustomSelect style-YHtRj" id="style-YHtRj">
                <option selected="">
                  Show all
                </option>
                <optgroup label="Most Popular">
                  <option>
                    Caribbean
                  </option>
                  <option>
                    Bahamas
                  </option>
                  <option>
                    Mexico
                  </option>
                  <option>
                    Alaska
                  </option>
                  <option>
                    Europe
                  </option>
                  <option>
                    Bermuda
                  </option>
                  <option>
                    Hawaii
                  </option>
                </optgroup>
                <optgroup label="Other Destinations">
                  <option>
                    Africa
                  </option>
                  <option>
                    Arctic/Antartctic
                  </option>
                  <option>
                    Asia
                  </option>
                  <option>
                    Australia/New Zealand
                  </option>
                  <option>
                    Central America
                  </option>
                  <option>
                    Cruise to Nowhere
                  </option>
                  <option>
                    Galapagos
                  </option>
                  <option>
                    Greenland/Iceland
                  </option>
                  <option>
                    Middle East
                  </option>
                  <option>
                    Pacific Coastal
                  </option>
                  <option>
                    Panama Canal
                  </option>
                  <option>
                    South Africa
                  </option>
                  <option>
                    South Pacific
                  </option>
                  <option>
                    Tahiti
                  </option>
                  <option>
                    Transatlantic
                  </option>
                  <option>
                    World Cruises
                  </option>
                </optgroup>
              </select>
              <span class="customSelect form-control mySelectBoxClass style-BBR4o" id="style-BBR4o">
                <span class="customSelectInner style-pkbbn" id="style-pkbbn">
                  Show all
                </span>
              </span>
            </div>
            <div class="col-md-6">
              <span class="opensans size13">
                <b>
                  Departure
                </b>
              </span>
              <select class="form-control mySelectBoxClass hasCustomSelect style-Fochn" id="style-Fochn">
                <option selected="">
                  Show all
                </option>
                <option>
                  October 2013
                </option>
                <option>
                  November 2013
                </option>
                <option>
                  December 2013
                </option>
                <option>
                  January 2014
                </option>
                <option>
                  February 2014
                </option>
                <option>
                  March 2014
                </option>
                <option>
                  April 2014
                </option>
                <option>
                  May 2014
                </option>
                <option>
                  June 2014
                </option>
                <option>
                  July 2014
                </option>
                <option>
                  August 2014
                </option>
                <option>
                  September 2014
                </option>
                <option>
                  October 2014
                </option>
                <option>
                  November 2014
                </option>
                <option>
                  December 2014
                </option>
              </select>
              <span class="customSelect form-control mySelectBoxClass style-hGm4c" id="style-hGm4c">
                <span class="customSelectInner style-IFVpE" id="style-IFVpE">
                  Show all
                </span>
              </span>
            </div>
          </div>
          <div id="hotelcar2" class="tab-pane fade style-NemWv" tabindex="5006">
            <div class="col-md-4 pt-6">
              <span class="opensans size18">
                Where do you want to go?
              </span>
              <input type="text" class="form-control" placeholder="Greece">
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Check in date
                    </b>
                  </span>
                  <input type="text" class="form-control mySelectCalendar hasDatepicker" id="datepicker11" placeholder="mm/dd/yyyy">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Check in date
                    </b>
                  </span>
                  <input type="text" class="form-control mySelectCalendar hasDatepicker" id="datepicker12" placeholder="mm/dd/yyyy">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        ROOM 1
                      </b>
                    </span>
                    <br>
                    <div class="addroom1 block">
                      <a href="#room2" onclick="addroom2()" class="grey">
                        + Add room
                      </a>
                    </div>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <div class="w50percent">
                      <div class="wh90percent textleft left">
                        <span class="opensans size13">
                          <b>
                            Adult
                          </b>
                        </span>
                        <select class="form-control mySelectBoxClass hasCustomSelect style-JHJSz" id="style-JHJSz">
                          <option>
                            1
                          </option>
                          <option selected="">
                            2
                          </option>
                          <option>
                            3
                          </option>
                          <option>
                            4
                          </option>
                          <option>
                            5
                          </option>
                        </select>
                        <span class="customSelect form-control mySelectBoxClass style-eAC5K" id="style-eAC5K">
                          <span class="customSelectInner style-McXXE" id="style-McXXE">
                            2
                          </span>
                        </span>
                      </div>
                    </div>
                    <div class="w50percentlast">
                      <div class="wh90percent textleft right">
                        <span class="opensans size13">
                          <b>
                            Child
                          </b>
                        </span>
                        <select class="form-control mySelectBoxClass hasCustomSelect style-cVE6O" id="style-cVE6O">
                          <option>
                            0
                          </option>
                          <option selected="">
                            1
                          </option>
                          <option>
                            2
                          </option>
                          <option>
                            3
                          </option>
                          <option>
                            4
                          </option>
                          <option>
                            5
                          </option>
                        </select>
                        <span class="customSelect form-control mySelectBoxClass style-hw8Ub" id="style-hw8Ub">
                          <span class="customSelectInner style-LZxzN" id="style-LZxzN">
                            1
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="room2 none">
                <div class="clearfix">
                </div>
                <div class="line1">
                </div>
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        ROOM 2
                      </b>
                    </span>
                    <br>
                    <div class="addroom2 block grey">
                      <a href="#" onclick="addroom3()" class="grey">
                        + Add room
                      </a>
                      | 
                      <a href="#" onclick="removeroom2()" class="orange">
                        <img src="https://www.travcoholidays.travel/images/delete.png" alt="delete">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <div class="w50percent">
                      <div class="wh90percent textleft left">
                        <span class="opensans size13">
                          <b>
                            Adult
                          </b>
                        </span>
                        <select class="form-control mySelectBoxClass hasCustomSelect style-LMPHQ" id="style-LMPHQ">
                          <option>
                            1
                          </option>
                          <option>
                            2
                          </option>
                          <option selected="">
                            3
                          </option>
                          <option>
                            4
                          </option>
                          <option>
                            5
                          </option>
                        </select>
                        <span class="customSelect form-control mySelectBoxClass style-9NgWo" id="style-9NgWo">
                          <span class="customSelectInner style-4CZAk" id="style-4CZAk">
                            3
                          </span>
                        </span>
                      </div>
                    </div>
                    <div class="w50percentlast">
                      <div class="wh90percent textleft right">
                        <span class="opensans size13">
                          <b>
                            Child
                          </b>
                        </span>
                        <select class="form-control mySelectBoxClass hasCustomSelect style-JoYyR" id="style-JoYyR">
                          <option selected="">
                            0
                          </option>
                          <option>
                            1
                          </option>
                          <option>
                            2
                          </option>
                          <option>
                            3
                          </option>
                          <option>
                            4
                          </option>
                          <option>
                            5
                          </option>
                        </select>
                        <span class="customSelect form-control mySelectBoxClass style-j5NoK" id="style-j5NoK">
                          <span class="customSelectInner style-lfJZ3" id="style-lfJZ3">
                            0
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="room3 none">
                <div class="clearfix">
                </div>
                <div class="line1">
                </div>
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        ROOM 3
                      </b>
                    </span>
                    <br>
                    <div class="addroom3 block grey">
                      <a href="#" onclick="addroom3()" class="grey">
                        + Add room
                      </a>
                      | 
                      <a href="#" onclick="removeroom3()" class="orange">
                        <img src="https://www.travcoholidays.travel/images/delete.png" alt="delete">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <div class="w50percent">
                      <div class="wh90percent textleft left">
                        <span class="opensans size13">
                          <b>
                            Adult
                          </b>
                        </span>
                        <select class="form-control mySelectBoxClass hasCustomSelect style-HQlIE" id="style-HQlIE">
                          <option selected="">
                            1
                          </option>
                          <option>
                            2
                          </option>
                          <option>
                            3
                          </option>
                          <option>
                            4
                          </option>
                          <option>
                            5
                          </option>
                        </select>
                        <span class="customSelect form-control mySelectBoxClass style-zGC7w" id="style-zGC7w">
                          <span class="customSelectInner style-gMvJP" id="style-gMvJP">
                            1
                          </span>
                        </span>
                      </div>
                    </div>
                    <div class="w50percentlast">
                      <div class="wh90percent textleft right">
                        <span class="opensans size13">
                          <b>
                            Child
                          </b>
                        </span>
                        <select class="form-control mySelectBoxClass hasCustomSelect style-sYwBG" id="style-sYwBG">
                          <option selected="">
                            0
                          </option>
                          <option>
                            1
                          </option>
                          <option>
                            2
                          </option>
                          <option>
                            3
                          </option>
                          <option>
                            4
                          </option>
                          <option>
                            5
                          </option>
                        </select>
                        <span class="customSelect form-control mySelectBoxClass style-oZLjx" id="style-oZLjx">
                          <span class="customSelectInner style-bqL41" id="style-bqL41">
                            0
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="center size10 ca02 ">
              ! An economy car will be added to your search. (You may change your car options
              later.)
            </div>
          </div>
          <div id="flighthotelcar2" class="tab-pane fade style-2YOi2" tabindex="5007">
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Flying from
                    </b>
                  </span>
                  <input name="Amadeus1$Text5" type="text" id="Amadeus1_Text5" class="form-control" placeholder="City or airport">
                  <div class="ac_results custom1 style-UJO7p" id="style-UJO7p">
                    <ul id="style-3Oodr" class="style-3Oodr">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      To
                    </b>
                  </span>
                  <input name="Amadeus1$Text6" type="text" id="Amadeus1_Text6" class="form-control" placeholder="City or airport">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Departure Date
                    </b>
                  </span>
                  <input name="Amadeus1$Text7" type="text" id="Amadeus1_Text7" class="form-control mySelectCalendar" placeholder="dd/mm/yyyy">
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Return Date
                    </b>
                  </span>
                  <input name="Amadeus1$Text8" type="text" id="Amadeus1_Text8" class="form-control mySelectCalendar" placeholder="dd/mm/yyyy">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        Cabin Class
                      </b>
                    </span>
                    <select name="Amadeus1$Select6" id="Amadeus1_Select6" class="form-control mySelectBoxClass hasCustomSelect style-UBSw8">
                      <option selected="selected" value="Y">
                        Economy
                      </option>
                      <option value="C">
                        Business
                      </option>
                      <option value="F">
                        First
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-scWTU" id="style-scWTU">
                      <span class="customSelectInner style-XsXnG" id="style-XsXnG">
                        Economy
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Hotel Rating
                      </b>
                    </span>
                    <select name="Amadeus1$Select7" id="Amadeus1_Select7" class="form-control mySelectBoxClass hasCustomSelect style-xZ4VZ">
                      <option selected="selected" value="">
                        Any
                      </option>
                      <option value="F">
                        First Class
                      </option>
                      <option value="L">
                        Luxury
                      </option>
                      <option value="S">
                        Standard
                      </option>
                      <option value="T">
                        Budget
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-5EHAt" id="style-5EHAt">
                      <span class="customSelectInner style-8pBJx" id="style-8pBJx">
                        Any
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <br>
              <br>
              &nbsp;
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        Vehicle Type
                      </b>
                    </span>
                    <select name="Amadeus1$Select8" id="Amadeus1_Select8" class="form-control mySelectBoxClass hasCustomSelect style-5QfH6">
                      <option selected="selected" value="">
                        Select
                      </option>
                      <option value="J">
                        ALL Terrain
                      </option>
                      <option value="T">
                        Convertible
                      </option>
                      <option value="D">
                        Four Door Car
                      </option>
                      <option value="F">
                        Four Wheel Drive
                      </option>
                      <option value="L">
                        Limousine
                      </option>
                      <option value="P">
                        PickUp
                      </option>
                      <option value="R">
                        Recreational
                      </option>
                      <option value="X">
                        Special
                      </option>
                      <option value="S">
                        Sport
                      </option>
                      <option value="K">
                        Truck
                      </option>
                      <option value="B">
                        Two Door Car
                      </option>
                      <option value="C">
                        Two Or Four Door Car
                      </option>
                      <option value="V">
                        Van
                      </option>
                      <option value="W">
                        Wagon
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-izOCT" id="style-izOCT">
                      <span class="customSelectInner style-FWaNM" id="style-FWaNM">
                        Select
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <span class="opensans size13">
                      <b>
                        Vehicle Class
                      </b>
                    </span>
                    <select name="Amadeus1$Select12" id="Amadeus1_Select12" class="form-control mySelectBoxClass hasCustomSelect style-sPHaG">
                      <option selected="selected" value="">
                        Select
                      </option>
                      <option value="C">
                        Compact
                      </option>
                      <option value="E">
                        Economy
                      </option>
                      <option value="F">
                        FullSize
                      </option>
                      <option value="I">
                        Intermediate
                      </option>
                      <option value="L">
                        Luxury
                      </option>
                      <option value="M">
                        Mini
                      </option>
                      <option value="P">
                        Premium
                      </option>
                      <option value="X">
                        Special
                      </option>
                      <option value="S">
                        Standard
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-2rekq" id="style-2rekq">
                      <span class="customSelectInner style-FUdLP" id="style-FUdLP">
                        Select
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="w50percent">
                <div class="wh90percent textleft">
                  <span class="opensans size13">
                    <b>
                      Traveller
                    </b>
                  </span>
                  <select name="Amadeus1$Select9" id="Amadeus1_Select9" class="form-control mySelectBoxClass hasCustomSelect style-iUOZU">
                    <option selected="selected" value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-w4JEx" id="style-w4JEx">
                    <span class="customSelectInner style-OdKDW" id="style-OdKDW">
                      1
                    </span>
                  </span>
                </div>
              </div>
              <div class="w50percentlast">
                <div class="wh90percent textleft right">
                  <span class="opensans size13">
                    <b>
                      Child (2-18 years)
                    </b>
                  </span>
                  <select name="Amadeus1$Select10" id="Amadeus1_Select10" class="form-control mySelectBoxClass hasCustomSelect style-pDrIG">
                    <option selected="selected" value="0">
                      0
                    </option>
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                  </select>
                  <span class="customSelect form-control mySelectBoxClass style-2erk5" id="style-2erk5">
                    <span class="customSelectInner style-d4JTF" id="style-d4JTF">
                      0
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="room1">
                <div class="w50percent">
                  <div class="wh90percent textleft">
                    <span class="opensans size13">
                      <b>
                        Infant (0-2 year)
                      </b>
                    </span>
                    <select name="Amadeus1$Select11" id="Amadeus1_Select11" class="form-control mySelectBoxClass hasCustomSelect style-ITxYm">
                      <option selected="selected" value="0">
                        0
                      </option>
                      <option value="1">
                        1
                      </option>
                      <option value="2">
                        2
                      </option>
                      <option value="3">
                        3
                      </option>
                      <option value="4">
                        4
                      </option>
                      <option value="5">
                        5
                      </option>
                    </select>
                    <span class="customSelect form-control mySelectBoxClass style-UoA8m" id="style-UoA8m">
                      <span class="customSelectInner style-5VcZT" id="style-5VcZT">
                        0
                      </span>
                    </span>
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent textleft right">
                    <input type="submit" name="Amadeus1$Button2" value="Search" id="Amadeus1_Button2" class="btn-search right mr30">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
               
      </div>

      @endforeach

@endif
@endif













  
