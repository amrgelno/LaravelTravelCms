<style>
    .new_inquire_page {
        position: relative;
    }
    .new_inquire_page_form {
        position: relative;
        width: 100%;
        padding: 35px;
    }
    .new_inquire_page_form_title {
        font-size: 2.692rem;
        font-weight: bold;
        text-align: center;
        color: #09415d;
    }
    .new_inquire_page_form_text {
        font-size: 14px;
        line-height: 1.79;
        letter-spacing: 0.33px;
        text-align: left;
        color: #24253d;
    }
    .new_inquire_page_form form{
        margin: 30px 0px;
    }
    #quoteform label {
        font-size: 1.538rem;
        line-height: 1.25;
        letter-spacing: 0.82px;
        text-align: left;
        color: #343a40;
        padding-left: 35px;
    }

    #quoteform input,
    #quoteform select,
    #quoteform textarea {
        border-radius: 0px;
        box-shadow: 0 2px 4px 0 #b7b7b780;
        background-image: none;
        background-color: #ffffff;
        padding: 5px 10px;
    }

    #quoteform .form_select:before {
        font-family: 'bootstrap-icons';
        content: "\f282";
        position: absolute;
        pointer-events: none;
        color: #757575;
        bottom: 0;
        padding-top: 0;
        line-height: 1;
        right: 9px;
        width: 14px;
        text-align: center;
        z-index: 1;
        font-weight: bold;
        font-size: 1.154rem;
        top: 13px;
    }

    #quoteform .switch-field {
        overflow: hidden;
        width: 100%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    #quoteform .switch-field input, #quoteform .switch-field-month input, #quoteform .switch-field-long input {
        position: absolute !important;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        width: 1px;
        border: 0;
        overflow: hidden;
    }

    #quoteform .switch-field label, #quoteform .switch-field-month label {
        float: left;
    }

    #quoteform .switch-field label{
        box-shadow: 0 0 0 0 #b7b7b780;
        background-image: none;
        padding: 0;
        font-size: 14px;
        margin-right: 30px;
        margin-left: 30px;
        margin-bottom: 10px;
        border-radius: 0;
        border: 0;
        background-color: #ffffff;
        position: relative;
    }
    #quoteform .switch-field-month label {
        box-shadow: 0 0 0 0 #b7b7b780;
        background-image: none;
        padding: 0;
        font-size: 14px;
        margin: 25px 0;
        border-radius: 0;
        border: 0;
        background-color: #ffffff;
        position: relative;
        width: 100%;
        text-align: center;
    }
    #quoteform .switch-field-long label {
        box-shadow: 0 0 0 0 #b7b7b780;
        background-image: none;
        padding: 0;
        font-size: 14px;
        margin: 0 0 25px 0;
        border-radius: 0;
        background-color: #ffffff;
        position: relative;
        width: 100%;
    }

    #quoteform .switch-field label:hover, #quoteform .switch-field-month label:hover, #quoteform .switch-field-long label:hover {
        cursor: pointer;
    }

    #quoteform .form-control.error {
        border: 1px solid red;
    }

    #quoteform label.error {
        display: none;
        padding-left: 0px;
    }

    #quoteform label.new_inquire_page_form_main_label{
        margin: 0px 0px 15px 0px !important;
        padding-left: 0px;
        font-weight: 500;
        font-size: 1.154rem;
        color: #707070;
    }
    #quoteform .radio input[type=radio]:checked ~ .check {
        background-color: #184161;
    }
    #quoteform .radio input[type=radio]:checked ~ .circle {
        border-color: #184161;
    }
    #quoteform .radio label .circle {
        border: solid 1px #c0c5d2;
        background: #ffffff;
    }
    .has-error .error-sentence {
        display: block;
    }
    .error-sentence {
        color: #db2c24;
    }
    .has-error {
        border-left: 1px solid #db2c24;
        padding-left: 8px
    }
    .info-sentence, .error-sentence {
        display: none;
        position: relative;
        padding-left: 24px;
        line-height: 16px;
    }
    .quoteform-block{
        margin: 30px 0px;
    }
    #quoteform .checkbox, #quoteform .radio{
        margin-top: 0px;
    }
    #quoteform .btn-number {
        background-color: #757575;
        border: 0 solid #757575;
        color: #fff;
        font-size: 11px;
        height: 20px;
        line-height: 20px;
        width: 20px;
    }

    #quoteform .input-number {
        background-color: transparent !important;
        border: 0px !important;
        text-align: center;
        font-size: 16px !important;
        font-weight: bold !important;
        -webkit-appearance: none !important;
        -o-appearance: none !important;
        -moz-appearance: none !important;
        height: 35px !important;
        padding: 0px !important;
        margin: 0px !important;
        box-shadow: none !important;
    }

    #quoteform .btn-number[disabled] {
        color: lightgray;
        border-color: lightgray;
        cursor: not-allowed;
    }
    #quoteform #Arrival2 .ui-datepicker-trigger, #quoteform #Departure2 .ui-datepicker-trigger {
        position: absolute;
        bottom: 22px;
        right: 5px;
        border: none;
        background: none;
        color: #dddddd;
    }
    .new_btn_inquire_last{
        border-radius: 15px;
        box-shadow: none;
        background-color: #f5a31d;
        color: #fff !important;
        padding: 14px 100px;
        line-height: 30px;
        cursor: pointer;
        font-size: 1.538rem;
        border: 1px solid #f5a31d;
        margin: 0 10px;
    }
    a.back_link {
        border-radius: 15px;
        box-shadow: none;
        background-color: #fff;
        color: #757575 !important;
        padding: 14px 100px;
        line-height: 30px;
        cursor: pointer;
        font-size: 1.538rem;
        border: 1px solid #EEEEEE;
        margin: 0 10px;
    }
    .quoteform-step__submit {
        text-align: center;
    }
    .quoteform-step__submit a {
        border-radius: 15px;
        box-shadow: none;
        background-color: #09415D;
        color: #fff !important;
        padding: 14px 100px;
        line-height: 30px;
        cursor: pointer;
        font-size: 1.538rem;
        border: 1px solid #09415D;
        margin: 0 10px;
    }

    .new_inquire_page_img_bg {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        border: 2px solid #EEEEEE;
        padding: 0;
        margin: 0;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 2;
        position: relative;
    }
    .new_inquire_page_img_title {
        border: 2px solid #EEEEEE;
        width: 130px;
        padding: 75px 20px 25px 20px;
        margin-top: -65px;
        position: relative;
        z-index: 1;
        text-align: center;
        font-weight: normal;
        font-size: 1.154rem;
        color: #212121;
        border-radius: 0 0 50% 50%;
        height: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    #quoteform .switch-field input:checked+label .new_inquire_page_img_title, #quoteform .switch-field input:hover+label .new_inquire_page_img_title {
        background-color: #F5A31B;
        color: #fff;
    }

    #quoteform .switch-field-month {
        overflow: hidden;
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        border: 3px solid #EEEEEE;
        padding: 10px 30px;
    }
    .new_inquire_radio_month_title {
        font-weight: normal;
        font-size: 1.538rem;
        text-align: center;
        color: #707070;
    }
    #quoteform .switch-field-month input:checked+label .new_inquire_radio_month_title,#quoteform .switch-field-month input:hover+label .new_inquire_radio_month_title {
        color: #F5A31B;
    }

    #quoteform .switch-field-long {
        overflow: hidden;
        width: 100%;
    }
    .new_inquire_radio_long_title {
        font-weight: normal;
        font-size: 1.154rem;
        text-align: center;
        color: #707070;
        border: 3px solid #EEEEEE;
        width: 100%;
        height: 90px;
        vertical-align: middle;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #quoteform .switch-field-long input:checked+label .new_inquire_radio_long_title,#quoteform .switch-field-long input:hover+label .new_inquire_radio_long_title {
        background-color: #F5A31B;
        color: #fff;
    }
    .quoteform-actions {
        display: flex;
        justify-content: center;
        margin: 25px 0 0 0;
        position: relative;
        align-items: center;
    }
    #quoteform .btn-number:hover {
        background-color: #F5A31B;
    }
    #quoteform .input-group .input-group-btn {
        padding: 2px 0;
    }
    #quoteform .input-group {
        border: 1px solid #757575;
        padding: 7px;
    }
    #quoteform  .input-number {
        height: 24px !important;
    }
</style>




<div class="col-md-12">
<div class="new_inquire_page_form">
<form id="quoteform" action="{{route('Frontclient_req')}}" method="POST" data-form-steps="3" data-form-current-step="0" novalidate="novalidate">
    @csrf
    @method('POST')
<article data-step-name="maturity" data-step="0">
<div class="row">
<div class="col-md-8 offset-md-2">
<h1 class="new_inquire_page_form_title">

@if(empty(@$_GET['lang']))
    Where do you want to go?
@elseif(@$_GET['lang'] == 'fr')
    Where do you want to go?
@elseif(@$_GET['lang'] == 'ar')
    أين تريد أن تذهب؟
@endif



</h1>
<div class="quoteform-block" data-fieldname="travelling_to">
<div class="switch-field">
<input type="checkbox" id="sites_egypt" name="travelling_to[]" value="Egypt">
<label for="sites_egypt">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/egypt_2.jpg')"></div>
<div class="new_inquire_page_img_title">

@if(empty(@$_GET['lang']))
    Egypt
@elseif(@$_GET['lang'] == 'fr')
    Egypt
@elseif(@$_GET['lang'] == 'ar')
    مصر
@endif



 </div>
</label>
<input type="checkbox" id="sites_jordan" name="travelling_to[]" value="Jordan">
<label for="sites_jordan">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/jordan_2.jpg')"></div>
<div class="new_inquire_page_img_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
Jordan

                  

                  @elseif($_GET['lang'] =='ar')

               
                  الاردن

                  @endif




 </div>
</label>
<input type="checkbox" id="sites_dubai" name="travelling_to[]" value="Dubai">
<label for="sites_dubai">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/dubai_2.jpg')"></div>
<div class="new_inquire_page_img_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
Dubai

                  

                  @elseif($_GET['lang'] =='ar')

               
                  دبي

                  @endif




 </div>
</label>
<input type="checkbox" id="sites_oman" name="travelling_to[]" value="Oman">
<label for="sites_oman">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/oman_2.jpg')"></div>
<div class="new_inquire_page_img_title">


@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
Oman

                  

                  @elseif($_GET['lang'] =='ar')

               
                  عمان

                  @endif



 </div>
</label>
<input type="checkbox" id="sites_morocco" name="travelling_to[]" value="Morocco">
<label for="sites_morocco">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/morocco_2.jpg')"></div>
<div class="new_inquire_page_img_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
Morocco

                  

                  @elseif($_GET['lang'] =='ar')

               
               المغرب

                  @endif




 </div>
</label>
<input type="checkbox" id="sites_turkey" name="travelling_to[]" value="Turkey">
<label for="sites_turkey">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/turkey_2.jpg')"></div>
<div class="new_inquire_page_img_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
Turkey 

                  

                  @elseif($_GET['lang'] =='ar')

               
              تركيا

                  @endif




</div>
</label>
<input type="checkbox" id="sites_africa" name="travelling_to[]" value="African Safari">
<label for="sites_africa">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/africa_2.jpg')"></div>
<div class="new_inquire_page_img_title">


@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
African Safari

                  

                  @elseif($_GET['lang'] =='ar')

               
              أفريقيا سفاري

                  @endif



 </div>
</label>
<input type="checkbox" id="sites_india" name="travelling_to[]" value="India">
<label for="sites_india">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/india_2.jpg')"></div>
<div class="new_inquire_page_img_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

India

                  

                  @elseif($_GET['lang'] =='ar')

               
              الهند

                  @endif


 </div>
</label>
<input type="checkbox" id="sites_Greece" name="travelling_to[]" value="Greece">
<label for="sites_Greece">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/greece.jpg')"></div>
<div class="new_inquire_page_img_title">


@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

Greece 

                  

                  @elseif($_GET['lang'] =='ar')

               
             اليونان

                  @endif


</div>
</label>
<input type="checkbox" id="sites_saudi" name="travelling_to[]" value="Saudi Arabia">
<label for="sites_saudi">
<div class="new_inquire_page_img_bg" style="background-image: url('https://www.memphistours.com/theme/Com2018/img/home/saudi.jpg')"></div>
<div class="new_inquire_page_img_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

Saudi Arabia

                  

                  @elseif($_GET['lang'] =='ar')

               
            السعودية

                  @endif



 </div>
</label>
</div>
<p class="error-sentence"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Oops. You forgot to respond to this question.</p>
</div>
<div class="quoteform-actions">
<div class="quoteform-step__submit">
<a id="submit_step_maturity">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

Next Step 

                  

                  @elseif($_GET['lang'] =='ar')

               
            الخطوة التالية

                  @endif


</a>
</div>
</div>
</div>
</div>
</article>
<article class="d-none" data-step-name="profile" data-step="1">
<div class="row d-flex justify-content-center">
<div class="col-md-4" data-fieldname="flexible_dates">
<div class="new_inquire_page_form_title">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

When will you travel?
                  

                  @elseif($_GET['lang'] =='ar')

               
                  متى ستسافر؟

                  @endif



</div>
<div class="quoteform-block">
<label class="new_inquire_page_form_main_label">
</label>
<div class="radio">
<label>
<input type="radio" name="flexible_dates" id="flexible_date_no" value="no"><span class="circle"></span><span class="check"></span>


@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

I know the exact dates of my trip
                  

                  @elseif($_GET['lang'] =='ar')

               
                  أعرف التواريخ الدقيقة لرحلتي

                  @endif



 </label>
</div>
<div class="radio">
<label>
<input type="radio" name="flexible_dates" id="flexible_date_yes" value="yes"><span class="circle"></span><span class="check"></span>

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

I have approximate dates.
                  

                  @elseif($_GET['lang'] =='ar')

               
                  لدي مواعيد تقريبية


                  @endif


 </label>
</div>
<p class="error-sentence"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Oops. You forgot to respond to this question. </p>
</div>
</div>
<div class="col-md-8 d-none" data-flexible-date="0" data-fieldname="fixed_dates">
<div class="quoteform-block">
<div class="row">
<div class="col-md-6">
<div class="form-group label-floating is-empty">
<label class="new_inquire_page_form_main_label">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

Departure date
                  

                  @elseif($_GET['lang'] =='ar')

               
                  تاريخ المغادرة

                  
                  @endif




</label>
<div id="Arrival2">
<div id="datepickerArrival2" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">September</span>&nbsp;<span class="ui-datepicker-year">2023</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">21</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">22</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">23</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">24</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">25</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">26</span></td><td class=" ui-datepicker-unselectable ui-state-disabled  ui-datepicker-today"><span class="ui-state-default">27</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">28</span></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="8" data-year="2023"><a class="ui-state-default ui-state-active ui-state-hover" href="#">29</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2023"><a class="ui-state-default" href="#">30</a></td></tr></tbody></table></div></div>
<input name="arrival" value="29/09/2023" type="hidden" class="form-control datepicker" id="arrival" placeholder="From *" readonly="">
</div>
<span class="material-input"></span></div>
</div>
<div class="col-md-6">
<div class="form-group label-floating is-empty">
<label class="new_inquire_page_form_main_label">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

Return date
                  

                  @elseif($_GET['lang'] =='ar')

               
                  تاريخ العودة

                  
                  @endif




</label>
<div id="Departure2">
<div id="datepickerDeparture2" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">September</span>&nbsp;<span class="ui-datepicker-year">2023</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">21</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">22</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">23</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">24</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">25</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">26</span></td><td class="  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="8" data-year="2023"><a class="ui-state-default ui-state-highlight" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2023"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="8" data-year="2023"><a class="ui-state-default ui-state-active ui-state-hover" href="#">29</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2023"><a class="ui-state-default" href="#">30</a></td></tr></tbody></table></div></div>
<input name="departure" type="hidden" class="form-control datepicker" id="departure" placeholder="To" readonly="" value="29/09/2023">
</div>
<span class="material-input"></span></div>
</div>
</div>
<p class="error-sentence">
<i class="fa fa-exclamation-circle" aria-hidden="true"></i> 

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

Oops. You forgot to respond to this question.
                  

                  @elseif($_GET['lang'] =='ar')

               
                  أُووبس. لقد نسيت الرد على هذا السؤال

                  
                  @endif





 </p>
</div>
</div>
<div class="col-md-8 d-none" data-flexible-date="1" data-fieldname="appromixate_dates">
<div class="quoteform-block">
<div class="row">
<div class="col-md-6">
<label class="new_inquire_page_form_main_label" for="date_approximate_start">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

Which month?
                  

                  @elseif($_GET['lang'] =='ar')

               
                 مالشهر

                  
                  @endif





 </label>
<div class="form-group label-floating">
<div class="switch-field-month">
<div class="row">
<div class="col-4">
<input type="radio" id="month_1" name="date_approximate_start" value="January">
<label for="month_1">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

January
                  

                  @elseif($_GET['lang'] =='ar')

               
                 يناير

                  
                  @endif




 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_2" name="date_approximate_start" value="February">
<label for="month_2">
<div class="new_inquire_radio_month_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

February
                  

                  @elseif($_GET['lang'] =='ar')

               
                 فبراير

                  
                  @endif



 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_3" name="date_approximate_start" value="March">
<label for="month_3">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

March
                  

                  @elseif($_GET['lang'] =='ar')

               
                 مارس

                  
                  @endif





 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_4" name="date_approximate_start" value="April">
<label for="month_4">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

April
                  

                  @elseif($_GET['lang'] =='ar')

               
                 أبريل

                  
                  @endif



 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_5" name="date_approximate_start" value="May">
<label for="month_5">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

May
                  

                  @elseif($_GET['lang'] =='ar')

               
                مايو

                  
                  @endif



 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_6" name="date_approximate_start" value="June">
<label for="month_6">
<div class="new_inquire_radio_month_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  

June
                  

                  @elseif($_GET['lang'] =='ar')

               
              يونيو

                  
                  @endif


 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_7" name="date_approximate_start" value="July">
<label for="month_7">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
July
                  

                  @elseif($_GET['lang'] =='ar')

               
              يوليو

                  
                  @endif





 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_8" name="date_approximate_start" value="August">
<label for="month_8">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
  
August
                  

                  @elseif($_GET['lang'] =='ar')

               
             أغسطس

                  
                  @endif



 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_9" name="date_approximate_start" value="September">
<label for="month_9">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

September
                  

                  @elseif($_GET['lang'] =='ar')

               
           سبتمبر

                  
                  @endif




 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_10" name="date_approximate_start" value="October">
<label for="month_10">
<div class="new_inquire_radio_month_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

October
                  

                  @elseif($_GET['lang'] =='ar')

               
           أكتوبر

                  
                  @endif





 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_11" name="date_approximate_start" value="November">
<label for="month_11">
<div class="new_inquire_radio_month_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

November
                  

                  @elseif($_GET['lang'] =='ar')

               
           نوفمبر

                  
                  @endif


 </div>
</label>
</div>
<div class="col-4">
<input type="radio" id="month_12" name="date_approximate_start" value="December">
<label for="month_12">
<div class="new_inquire_radio_month_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

December
                  

                  @elseif($_GET['lang'] =='ar')

               
           ديسمبر

                  
                  @endif
 </div>
</label>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<label class="new_inquire_page_form_main_label" for="date_approximate_length">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

How long (approx)?
                  

                  @elseif($_GET['lang'] =='ar')

               
                  كم المدة (تقريبا)؟

                  
                  @endif



 </label>
<div class="form-group label-floating">
<div class="switch-field-long">
<div class="row">
<div class="col-6">
<input type="radio" id="long_1" name="date_approximate_length" value="Give me a suggestion">
<label for="long_1">
<div class="new_inquire_radio_long_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


Give me a suggestion 
                  

                  @elseif($_GET['lang'] =='ar')

               
                  أعطني اقتراحا

                  
                  @endif

</div>
</label>
</div>
<div class="col-6">
<input type="radio" id="long_2" name="date_approximate_length" value="Less than a week">
<label for="long_2">
<div class="new_inquire_radio_long_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


Less than a week
                  

                  @elseif($_GET['lang'] =='ar')

               
                  أقل من أسبوع

                  
                  @endif   

 </div>
</label>
</div>
<div class="col-6">
<input type="radio" id="long_3" name="date_approximate_length" value="1 week">
<label for="long_3">
<div class="new_inquire_radio_long_title">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


1 week
                  

                  @elseif($_GET['lang'] =='ar')

               
                  أسبوع

                  
                  @endif   



 </div>
</label>
</div>
<div class="col-6">
<input type="radio" id="long_4" name="date_approximate_length" value="2 weeks">
<label for="long_4">
<div class="new_inquire_radio_long_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


2 weeks 
                  

                  @elseif($_GET['lang'] =='ar')

               
                  أسبوعين

                  
                  @endif  


</div>
</label>
</div>
<div class="col-6">
<input type="radio" id="long_5" name="date_approximate_length" value="3 weeks">
<label for="long_5">
<div class="new_inquire_radio_long_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


3 weeks
                  

                  @elseif($_GET['lang'] =='ar')

               
                  اسابيع3 

                  
                  @endif  


 </div>
</label>
</div>
<div class="col-6">
<input type="radio" id="long_6" name="date_approximate_length" value="More than 3 weeks">
<label for="long_6">
<div class="new_inquire_radio_long_title">


@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

More than 3 weeks         

                  @elseif($_GET['lang'] =='ar')

               
                  أكثر من 3  أسابيع

                  
                  @endif 



 </div>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
<p class="error-sentence"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Oops. You forgot to respond to this question.        

                  @elseif($_GET['lang'] =='ar')

               
                  أُووبس. لقد نسيت الرد على هذا السؤال.
                  
                  @endif 


 </p>
</div>
</div>
</div>
<hr>
<div class="quoteform-actions">
<div class="text-center col-6">
<a class="back_link" id="go_back_to_maturity_step_button">
    

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Back
                  @elseif($_GET['lang'] =='ar')

               
الرجوع


                  @endif 
                </a>
</div>
<div class="quoteform-step__submit col-6">
<a id="submit_step_1">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Next Step
                  @elseif($_GET['lang'] =='ar')

               
                  الخطوة التالية
                  
                  @endif 


 </a>
</div>
</div>
</article>
<article class="d-none" data-step-name="trip" data-step="2">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="new_inquire_page_form_title">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Tell us about the travelers

                  @elseif($_GET['lang'] =='ar')

                  أخبرنا عن المسافرين     
                  
                  
                  @endif 





</div>
<div class="quoteform-block quoteform-step__info">
<div class="row mb-3">
<div class="col-12 col-md-6">
<div class="form-group label-floating is-empty">
<label class="new_inquire_page_form_main_label">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Name *

                  @elseif($_GET['lang'] =='ar')

                  الأسم    
                  
                  
                  @endif 


</label>
<input name="username" type="text" id="name" value="" class="form-control" required="" aria-required="true">
<span class="material-input"></span></div>
</div>
<div class="col-12 col-md-6">
<div class="form-group label-floating is-empty">
<label class="new_inquire_page_form_main_label">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

E-mail *

                  @elseif($_GET['lang'] =='ar')

                  الأيميل  
                  
                  
                  @endif 



</label>
<input name="UserEmail" value="" type="email" required="" class="form-control" id="UserEmail" onfocusout="validateMail()" aria-required="true">
<div id="mail-validation"></div>
<span class="material-input"></span></div>
</div>
</div>
<div class="row mb-3">
<div class="col-12 col-md-6">
<label class="new_inquire_page_form_main_label">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Nationality *

                  @elseif($_GET['lang'] =='ar')

                  الجنسية 
                  
                  
                  @endif 



</label>
<div class="form-group label-floating form_select is-empty">
<select id="nationality" class="form-control" name="nationality" required="" aria-required="true">
<option value="" selected="selected">Select your Nationality</option>
<option value="American">American</option>
<option value="Afghan">Afghan</option>
<option value="Albanian">Albanian</option>
<option value="Algerian">Algerian</option>
<option value="Andorran">Andorran</option>
<option value="Angolan">Angolan</option>
<option value="Argentinian">Argentinian</option>
<option value="Armenian">Armenian</option>
<option value="Australian">Australian</option>
<option value="Austrian">Austrian</option>
<option value="Azerbaijani">Azerbaijani</option>
<option value="Bahamian">Bahamian</option>
<option value="Bahraini">Bahraini</option>
<option value="Bangladeshi">Bangladeshi</option>
<option value="Barbadian">Barbadian</option>
<option value="Belarusian">Belarusian</option>
<option value="Belgian">Belgian</option>
<option value="Belizean">Belizean</option>
<option value="Beninese">Beninese</option>
<option value="Bhutanese">Bhutanese</option>
<option value="Bolivian">Bolivian</option>
<option value="Bosnian">Bosnian</option>
<option value="Botswanan">Botswanan</option>
<option value="Brazilian">Brazilian</option>
<option value="British&nbsp;Indian Ocean">British&nbsp;Indian Ocean</option>
<option value="British Virgin">British Virgin</option>
<option value="Bruneian">Bruneian</option>
<option value="Bulgarian">Bulgarian</option>
<option value="Burkinese">Burkinese</option>
<option value="Burundian">Burundian</option>
<option value="Cambodian">Cambodian</option>
<option value="Cameroonian">Cameroonian</option>
<option value="Canadian">Canadian</option>
<option value="Cape Verdean">Cape Verdean</option>
<option value="Chadian">Chadian</option>
<option value="Chilean">Chilean</option>
<option value="Chinese">Chinese</option>
<option value="Colombian">Colombian</option>
<option value="Congolese">Congolese</option>
<option value="Costa Rican">Costa Rican</option>
<option value="Croatian">Croatian</option>
<option value="Cuban">Cuban</option>
<option value="Cypriot">Cypriot</option>
<option value="Czech">Czech</option>
<option value="Danish">Danish</option>
<option value="Djiboutian">Djiboutian</option>
<option value="Dominican">Dominican</option>
<option value="East Timorese">East Timorese</option>
<option value="Ecuadorean">Ecuadorean</option>
<option value="Egyptian">Egyptian</option>
<option value="Salvadorean">Salvadorean</option>
<option value="Guinean">Guinean</option>
<option value="Eritrean">Eritrean</option>
<option value="Estonian">Estonian</option>
<option value="Ethiopian">Ethiopian</option>
<option value="Fijian">Fijian</option>
<option value="Finnish">Finnish</option>
<option value="French">French</option>
<option value="Guyanese">Guyanese</option>
<option value="Gabonese">Gabonese</option>
<option value="Gambian">Gambian</option>
<option value="Georgian">Georgian</option>
<option value="German">German</option>
<option value="Ghanaian">Ghanaian</option>
<option value="Greek">Greek</option>
<option value="Grenadian">Grenadian</option>
<option value="Guatemalan">Guatemalan</option>
<option value="Guinean">Guinean</option>
<option value="Haitian">Haitian</option>
<option value="Honduran">Honduran</option>
<option value="Hungarian">Hungarian</option>
<option value="Icelander">Icelander</option>
<option value="Indian">Indian</option>
<option value="Indonesian">Indonesian</option>
<option value="Iranian">Iranian</option>
<option value="Iraqi">Iraqi</option>
<option value="Irish">Irish</option>
<option value="Israeli">Israeli</option>
<option value="Italian">Italian</option>
<option value="Jamaican">Jamaican</option>
<option value="Japanese">Japanese</option>
<option value="Jordanian">Jordanian</option>
<option value="Kazakh">Kazakh</option>
<option value="Kenyan">Kenyan</option>
<option value="Kuwaiti">Kuwaiti</option>
<option value="Laotian">Laotian</option>
<option value="Latvian">Latvian</option>
<option value="Lebanese">Lebanese</option>
<option value="Liberian">Liberian</option>
<option value="Libyan">Libyan</option>
<option value="Lithuanian">Lithuanian</option>
<option value="Macedonian">Macedonian</option>
<option value="Madagascan">Madagascan</option>
<option value="Malawian">Malawian</option>
<option value="Malaysian">Malaysian</option>
<option value="Maldivian">Maldivian</option>
<option value="Malian">Malian</option>
<option value="Maltese">Maltese</option>
<option value="Mauritanian">Mauritanian</option>
<option value="Mauritian">Mauritian</option>
<option value="Mexican">Mexican</option>
<option value="Moldovan">Moldovan</option>
<option value="Monacan">Monacan</option>
<option value="Mongolian">Mongolian</option>
<option value="Moroccan">Moroccan</option>
<option value="Mozambican">Mozambican</option>
<option value="Namibian">Namibian</option>
<option value="Nepalese">Nepalese</option>
<option value="Dutch">Dutch</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaraguan">Nicaraguan</option>
<option value="Nigerien">Nigerien</option>
<option value="Nigerian">Nigerian</option>
<option value="North Korean">North Korean</option>
<option value="Norwegian">Norwegian</option>
<option value="Omani">Omani</option>
<option value="Pakistani">Pakistani</option>
<option value="Panamanian">Panamanian</option>
<option value="Guinean">Guinean</option>
<option value="Paraguayan">Paraguayan</option>
<option value="Peruvian">Peruvian</option>
<option value="Filipino">Filipino</option>
<option value="Polish">Polish</option>
<option value="Portuguese">Portuguese</option>
<option value="Qatari">Qatari</option>
<option value="Romanian">Romanian</option>
<option value="Russian">Russian</option>
<option value="Rwandan">Rwandan</option>
<option value="Saudi">Saudi</option>
<option value="Senegalese">Senegalese</option>
<option value="Serbian">Serbian</option>
<option value="Sierra Leonian">Sierra Leonian</option>
<option value="Singaporean">Singaporean</option>
<option value="Slovak">Slovak</option>
<option value="Slovenian">Slovenian</option>
<option value="Somali">Somali</option>
<option value="South African">South African</option>
<option value="South Korean">South Korean</option>
<option value="Spanish">Spanish</option>
<option value="Sri Lankan">Sri Lankan</option>
<option value="Sudanese">Sudanese</option>
<option value="Surinamese">Surinamese</option>
<option value="Swazi">Swazi</option>
<option value="Swedish">Swedish</option>
<option value="Swiss">Swiss</option>
<option value="Syrian">Syrian</option>
<option value="Taiwanese">Taiwanese</option>
<option value="Tajik">Tajik</option>
<option value="Tanzanian">Tanzanian</option>
<option value="Thai">Thai</option>
<option value="Togolese">Togolese</option>
<option value="Trinidadian">Trinidadian</option>
<option value="Tunisian">Tunisian</option>
<option value="Turkish">Turkish</option>
<option value="Turkmen">Turkmen</option>
<option value="Tuvaluan">Tuvaluan</option>
<option value="Ugandan">Ugandan</option>
<option value="Ukrainian">Ukrainian</option>
<option value="Emirati">Emirati</option>
<option value="British">British</option>
<option value="Uruguayan">Uruguayan</option>
<option value="Uzbek">Uzbek</option>
<option value="Vanuatuan">Vanuatuan</option>
<option value="Venezuelan">Venezuelan</option>
<option value="Vietnamese">Vietnamese</option>
<option value="Yemeni">Yemeni</option>
<option value="Zambian">Zambian</option>
<option value="Zimbabwean">Zimbabwean</option>
</select>
<span class="material-input"></span></div>
</div>
<div class="col-12 col-md-6">
<label class="new_inquire_page_form_main_label">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Mobile

                  @elseif($_GET['lang'] =='ar')

                 موبايل
                  
                  
                  @endif 


</label>
<div class="row g-0">
<div class="col-5">
<div class="form-group form_select label-floating is-empty">
<select name="phone_ext" id="phone_ext" class="required form-control" aria-required="true">
<option value="">Code</option>
<option data-countrycode="DZ" value="213">Algeria (+213)</option>
<option data-countrycode="AD" value="376">Andorra (+376)</option>
<option data-countrycode="AO" value="244">Angola (+244)</option>
<option data-countrycode="AI" value="1264">Anguilla (+1264)</option>
<option data-countrycode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
<option data-countrycode="AR" value="54">Argentina (+54)</option>
<option data-countrycode="AM" value="374">Armenia (+374)</option>
<option data-countrycode="AW" value="297">Aruba (+297)</option>
<option data-countrycode="AU" value="61">Australia (+61)</option>
<option data-countrycode="AT" value="43">Austria (+43)</option>
<option data-countrycode="AZ" value="994">Azerbaijan (+994)</option>
<option data-countrycode="BS" value="1242">Bahamas (+1242)</option>
<option data-countrycode="BH" value="973">Bahrain (+973)</option>
<option data-countrycode="BD" value="880">Bangladesh (+880)</option>
<option data-countrycode="BB" value="1246">Barbados (+1246)</option>
<option data-countrycode="BY" value="375">Belarus (+375)</option>
<option data-countrycode="BE" value="32">Belgium (+32)</option>
<option data-countrycode="BZ" value="501">Belize (+501)</option>
<option data-countrycode="BJ" value="229">Benin (+229)</option>
<option data-countrycode="BM" value="1441">Bermuda (+1441)</option>
<option data-countrycode="BT" value="975">Bhutan (+975)</option>
<option data-countrycode="BO" value="591">Bolivia (+591)</option>
<option data-countrycode="BA" value="387">Bosnia Herzegovina (+387)</option>
<option data-countrycode="BW" value="267">Botswana (+267)</option>
<option data-countrycode="BR" value="55">Brazil (+55)</option>
<option data-countrycode="BN" value="673">Brunei (+673)</option>
<option data-countrycode="BG" value="359">Bulgaria (+359)</option>
<option data-countrycode="BF" value="226">Burkina Faso (+226)</option>
<option data-countrycode="BI" value="257">Burundi (+257)</option>
<option data-countrycode="KH" value="855">Cambodia (+855)</option>
<option data-countrycode="CM" value="237">Cameroon (+237)</option>
<option data-countrycode="CA" value="1">Canada (+1)</option>
<option data-countrycode="CV" value="238">Cape Verde Islands (+238)</option>
<option data-countrycode="KY" value="1345">Cayman Islands (+1345)</option>
<option data-countrycode="CF" value="236">Central African Republic (+236)</option>
<option data-countrycode="CL" value="56">Chile (+56)</option>
<option data-countrycode="CN" value="86">China (+86)</option>
<option data-countrycode="CO" value="57">Colombia (+57)</option>
<option data-countrycode="KM" value="269">Comoros (+269)</option>
<option data-countrycode="CG" value="242">Congo (+242)</option>
<option data-countrycode="CK" value="682">Cook Islands (+682)</option>
<option data-countrycode="CR" value="506">Costa Rica (+506)</option>
<option data-countrycode="HR" value="385">Croatia (+385)</option>
<option data-countrycode="CU" value="53">Cuba (+53)</option>
<option data-countrycode="CY" value="90392">Cyprus North (+90392)</option>
<option data-countrycode="CY" value="357">Cyprus South (+357)</option>
<option data-countrycode="CZ" value="42">Czech Republic (+42)</option>
<option data-countrycode="DK" value="45">Denmark (+45)</option>
<option data-countrycode="DJ" value="253">Djibouti (+253)</option>
<option data-countrycode="DM" value="1809">Dominica (+1809)</option>
<option data-countrycode="DO" value="1809">Dominican Republic (+1809)</option>
<option data-countrycode="EC" value="593">Ecuador (+593)</option>
<option data-countrycode="EG" value="20">Egypt (+20)</option>
<option data-countrycode="SV" value="503">El Salvador (+503)</option>
<option data-countrycode="GQ" value="240">Equatorial Guinea (+240)</option>
<option data-countrycode="ER" value="291">Eritrea (+291)</option>
<option data-countrycode="EE" value="372">Estonia (+372)</option>
<option data-countrycode="ET" value="251">Ethiopia (+251)</option>
<option data-countrycode="FK" value="500">Falkland Islands (+500)</option>
<option data-countrycode="FO" value="298">Faroe Islands (+298)</option>
<option data-countrycode="FJ" value="679">Fiji (+679)</option>
<option data-countrycode="FI" value="358">Finland (+358)</option>
<option data-countrycode="FR" value="33">France (+33)</option>
<option data-countrycode="GF" value="594">French Guiana (+594)</option>
<option data-countrycode="PF" value="689">French Polynesia (+689)</option>
<option data-countrycode="GA" value="241">Gabon (+241)</option>
<option data-countrycode="GM" value="220">Gambia (+220)</option>
<option data-countrycode="GE" value="7880">Georgia (+7880)</option>
<option data-countrycode="DE" value="49">Germany (+49)</option>
<option data-countrycode="GH" value="233">Ghana (+233)</option>
<option data-countrycode="GI" value="350">Gibraltar (+350)</option>
<option data-countrycode="GR" value="30">Greece (+30)</option>
<option data-countrycode="GL" value="299">Greenland (+299)</option>
<option data-countrycode="GD" value="1473">Grenada (+1473)</option>
<option data-countrycode="GP" value="590">Guadeloupe (+590)</option>
<option data-countrycode="GU" value="671">Guam (+671)</option>
<option data-countrycode="GT" value="502">Guatemala (+502)</option>
<option data-countrycode="GN" value="224">Guinea (+224)</option>
<option data-countrycode="GW" value="245">Guinea - Bissau (+245)</option>
<option data-countrycode="GY" value="592">Guyana (+592)</option>
<option data-countrycode="HT" value="509">Haiti (+509)</option>
<option data-countrycode="HN" value="504">Honduras (+504)</option>
<option data-countrycode="HK" value="852">Hong Kong (+852)</option>
<option data-countrycode="HU" value="36">Hungary (+36)</option>
<option data-countrycode="IS" value="354">Iceland (+354)</option>
<option data-countrycode="IN" value="91">India (+91)</option>
<option data-countrycode="ID" value="62">Indonesia (+62)</option>
<option data-countrycode="IR" value="98">Iran (+98)</option>
<option data-countrycode="IQ" value="964">Iraq (+964)</option>
<option data-countrycode="IE" value="353">Ireland (+353)</option>
<option data-countrycode="IL" value="972">Israel (+972)</option>
<option data-countrycode="IT" value="39">Italy (+39)</option>
<option data-countrycode="JM" value="1876">Jamaica (+1876)</option>
<option data-countrycode="JP" value="81">Japan (+81)</option>
<option data-countrycode="JO" value="962">Jordan (+962)</option>
<option data-countrycode="KZ" value="7">Kazakhstan (+7)</option>
<option data-countrycode="KE" value="254">Kenya (+254)</option>
<option data-countrycode="KI" value="686">Kiribati (+686)</option>
<option data-countrycode="KP" value="850">Korea North (+850)</option>
<option data-countrycode="KR" value="82">Korea South (+82)</option>
<option data-countrycode="KW" value="965">Kuwait (+965)</option>
<option data-countrycode="KG" value="996">Kyrgyzstan (+996)</option>
<option data-countrycode="LA" value="856">Laos (+856)</option>
<option data-countrycode="LV" value="371">Latvia (+371)</option>
<option data-countrycode="LB" value="961">Lebanon (+961)</option>
<option data-countrycode="LS" value="266">Lesotho (+266)</option>
<option data-countrycode="LR" value="231">Liberia (+231)</option>
<option data-countrycode="LY" value="218">Libya (+218)</option>
<option data-countrycode="LI" value="417">Liechtenstein (+417)</option>
<option data-countrycode="LT" value="370">Lithuania (+370)</option>
<option data-countrycode="LU" value="352">Luxembourg (+352)</option>
<option data-countrycode="MO" value="853">Macao (+853)</option>
<option data-countrycode="MK" value="389">Macedonia (+389)</option>
<option data-countrycode="MG" value="261">Madagascar (+261)</option>
<option data-countrycode="MW" value="265">Malawi (+265)</option>
<option data-countrycode="MY" value="60">Malaysia (+60)</option>
<option data-countrycode="MV" value="960">Maldives (+960)</option>
<option data-countrycode="ML" value="223">Mali (+223)</option>
<option data-countrycode="MT" value="356">Malta (+356)</option>
<option data-countrycode="MH" value="692">Marshall Islands (+692)</option>
<option data-countrycode="MQ" value="596">Martinique (+596)</option>
<option data-countrycode="MR" value="222">Mauritania (+222)</option>
<option data-countrycode="YT" value="269">Mayotte (+269)</option>
<option data-countrycode="MX" value="52">Mexico (+52)</option>
<option data-countrycode="FM" value="691">Micronesia (+691)</option>
<option data-countrycode="MD" value="373">Moldova (+373)</option>
<option data-countrycode="MC" value="377">Monaco (+377)</option>
<option data-countrycode="MN" value="976">Mongolia (+976)</option>
<option data-countrycode="MS" value="1664">Montserrat (+1664)</option>
<option data-countrycode="MA" value="212">Morocco (+212)</option>
<option data-countrycode="MZ" value="258">Mozambique (+258)</option>
<option data-countrycode="MN" value="95">Myanmar (+95)</option>
<option data-countrycode="NA" value="264">Namibia (+264)</option>
<option data-countrycode="NR" value="674">Nauru (+674)</option>
<option data-countrycode="NP" value="977">Nepal (+977)</option>
<option data-countrycode="NL" value="31">Netherlands (+31)</option>
<option data-countrycode="NC" value="687">New Caledonia (+687)</option>
<option data-countrycode="NZ" value="64">New Zealand (+64)</option>
<option data-countrycode="NI" value="505">Nicaragua (+505)</option>
<option data-countrycode="NE" value="227">Niger (+227)</option>
<option data-countrycode="NG" value="234">Nigeria (+234)</option>
<option data-countrycode="NU" value="683">Niue (+683)</option>
<option data-countrycode="NF" value="672">Norfolk Islands (+672)</option>
<option data-countrycode="NP" value="670">Northern Marianas (+670)</option>
<option data-countrycode="NO" value="47">Norway (+47)</option>
<option data-countrycode="OM" value="968">Oman (+968)</option>
<option data-countrycode="PW" value="680">Palau (+680)</option>
<option data-countrycode="PA" value="507">Panama (+507)</option>
<option data-countrycode="PG" value="675">Papua New Guinea (+675)</option>
<option data-countrycode="PY" value="595">Paraguay (+595)</option>
<option data-countrycode="PE" value="51">Peru (+51)</option>
<option data-countrycode="PH" value="63">Philippines (+63)</option>
<option data-countrycode="PL" value="48">Poland (+48)</option>
<option data-countrycode="PT" value="351">Portugal (+351)</option>
<option data-countrycode="PR" value="1787">Puerto Rico (+1787)</option>
<option data-countrycode="QA" value="974">Qatar (+974)</option>
<option data-countrycode="RE" value="262">Reunion (+262)</option>
<option data-countrycode="RO" value="40">Romania (+40)</option>
<option data-countrycode="RU" value="7">Russia (+7)</option>
<option data-countrycode="RW" value="250">Rwanda (+250)</option>
<option data-countrycode="SM" value="378">San Marino (+378)</option>
<option data-countrycode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
<option data-countrycode="SA" value="966">Saudi Arabia (+966)</option>
<option data-countrycode="SN" value="221">Senegal (+221)</option>
<option data-countrycode="CS" value="381">Serbia (+381)</option>
<option data-countrycode="SC" value="248">Seychelles (+248)</option>
<option data-countrycode="SL" value="232">Sierra Leone (+232)</option>
<option data-countrycode="SG" value="65">Singapore (+65)</option>
<option data-countrycode="SK" value="421">Slovak Republic (+421)</option>
<option data-countrycode="SI" value="386">Slovenia (+386)</option>
<option data-countrycode="SB" value="677">Solomon Islands (+677)</option>
<option data-countrycode="SO" value="252">Somalia (+252)</option>
<option data-countrycode="ZA" value="27">South Africa (+27)</option>
<option data-countrycode="ES" value="34">Spain (+34)</option>
<option data-countrycode="LK" value="94">Sri Lanka (+94)</option>
<option data-countrycode="SH" value="290">St. Helena (+290)</option>
<option data-countrycode="KN" value="1869">St. Kitts (+1869)</option>
<option data-countrycode="SC" value="1758">St. Lucia (+1758)</option>
<option data-countrycode="SD" value="249">Sudan (+249)</option>
<option data-countrycode="SR" value="597">Suriname (+597)</option>
<option data-countrycode="SZ" value="268">Swaziland (+268)</option>
<option data-countrycode="SE" value="46">Sweden (+46)</option>
<option data-countrycode="CH" value="41">Switzerland (+41)</option>
<option data-countrycode="SI" value="963">Syria (+963)</option>
<option data-countrycode="TW" value="886">Taiwan (+886)</option>
<option data-countrycode="TJ" value="7">Tajikstan (+7)</option>
<option data-countrycode="TH" value="66">Thailand (+66)</option>
<option data-countrycode="TG" value="228">Togo (+228)</option>
<option data-countrycode="TO" value="676">Tonga (+676)</option>
<option data-countrycode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
<option data-countrycode="TN" value="216">Tunisia (+216)</option>
<option data-countrycode="TR" value="90">Turkey (+90)</option>
<option data-countrycode="TM" value="7">Turkmenistan (+7)</option>
<option data-countrycode="TM" value="993">Turkmenistan (+993)</option>
<option data-countrycode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
<option data-countrycode="TV" value="688">Tuvalu (+688)</option>
<option data-countrycode="UG" value="256">Uganda (+256)</option>
<option data-countrycode="GB" value="44">UK (+44)</option>
<option data-countrycode="UA" value="380">Ukraine (+380)</option>
<option data-countrycode="AE" value="971">United Arab Emirates (+971)</option>
<option data-countrycode="UY" value="598">Uruguay (+598)</option>
<option data-countrycode="US" value="1">USA (+1)</option>
<option data-countrycode="UZ" value="7">Uzbekistan (+7)</option>
<option data-countrycode="VU" value="678">Vanuatu (+678)</option>
<option data-countrycode="VA" value="379">Vatican City (+379)</option>
<option data-countrycode="VE" value="58">Venezuela (+58)</option>
<option data-countrycode="VN" value="84">Vietnam (+84)</option>
<option data-countrycode="VG" value="84">Virgin Islands - British (+1284)</option>
<option data-countrycode="VI" value="84">Virgin Islands - US (+1340)</option>
<option data-countrycode="WF" value="681">Wallis &amp; Futuna (+681)</option>
<option data-countrycode="YE" value="969">Yemen (North)(+969)</option>
<option data-countrycode="YE" value="967">Yemen (South)(+967)</option>
<option data-countrycode="ZM" value="260">Zambia (+260)</option>
<option data-countrycode="ZW" value="263">Zimbabwe (+263)</option>
</select>
<span class="material-input"></span></div>
</div>
<div class="col-7">
<div class="form-group label-floating is-empty">
<input type="text" class="form-control" value="" placeholder="Mobile" name="UserPhone" id="UserPhone" required="" minlength="6" maxlength="16" aria-required="true">
<span class="material-input"></span></div>
</div>
</div>
</div>
</div>
<div class="row mb-3">
<div class="col-12 col-md-4">
<div class="form-group label-floating">
<label class="new_inquire_page_form_main_label">Adults <span style="font-weight: normal" class="small">( + 12 )</span></label>
<div class="input-group">
<span class="input-group-btn">
<button type="button" class="btn-number book_all" data-type="minus" data-field="adults_book">
<span class="fa fa-minus"></span>
</button>
</span>
<input id="adults_book" type="text" name="adults" class="form-control input-number book_all" value="2" min="1" max="100" readonly="">
<span class="input-group-btn">
<button type="button" class="btn-number book_all" data-type="plus" data-field="adults_book">
<span class="fa fa-plus"></span>
</button>
</span>
</div>
<span class="material-input"></span></div>
</div>
<div class="col-12 col-md-4">
<div class="form-group label-floating">
<label class="new_inquire_page_form_main_label">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Children *

                  @elseif($_GET['lang'] =='ar')

                 الأطفال
                  
                  
                  @endif 




 <span style="font-weight: normal" class="small">( 2 to 11 )</span></label>
<div class="input-group">
<span class="input-group-btn">
<button type="button" class="btn-number book_all" disabled="disabled" data-type="minus" data-field="children_book">
<span class="fa fa-minus"></span>
</button>
</span>
<input id="children_book" type="text" name="children" class="form-control input-number book_all" value="0" min="0" max="10" readonly="" onchange="paxOnChangeAll('1', this.value, 'Child', this, 9);">
<span class="input-group-btn">
<button type="button" class="btn-number book_all" data-type="plus" data-field="children_book">
<span class="fa fa-plus"></span>
</button>
</span>
</div>
<span class="material-input"></span></div>
</div>
<div class="col-12 col-md-4">
<div class="form-group label-floating">
<label class="new_inquire_page_form_main_label">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Infants 

                  @elseif($_GET['lang'] =='ar')

                  الرضع
                  
                  
                  @endif


<span style="font-weight: normal" class="small">( 0 to 2 )</span></label>
<div class="input-group">
<span class="input-group-btn">
<button type="button" class="btn-number book_all" disabled="disabled" data-type="minus" data-field="infants_book">
<span class="fa fa-minus"></span>
</button>
</span>
<input id="infants_book" type="text" name="infants" class="form-control input-number book_all" value="0" min="0" max="10" readonly="" onchange="paxOnChangeAll('1', this.value, 'Infant', this, 9);">
<span class="input-group-btn">
<button type="button" class="btn-number book_all" data-type="plus" data-field="infants_book">
<span class="fa fa-plus"></span>
</button>
</span>
</div>
<span class="material-input"></span></div>
</div>
<div class="row">
<div class="col-12">
<div id="ageInputDiv" class="form-group label-floating d-none">
<div class="unit size4of7">
<div class="mrm mts div-0"> </div>
</div>
<div id="input" class="unit size3of7 lastUnit div-1"> </div>
</div>
<div id="1" agedesc="child"> </div>
<div id="1" agedesc="infant"> </div>
</div>
</div>
</div>
</div>
<div class="quoteform-block quoteform-step__budget">
<div class="row">
<div class="col-12">
<label class="new_inquire_page_form_main_label">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Your average budget per person

                  @elseif($_GET['lang'] =='ar')

                  متوسط ​​ميزانيتك للشخص الواحد
                  
                  
                  @endif 



 </label>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="row">
<div class="col-12 col-sm-5">
<div class="form-group label-floating form_select is-empty">
<select id="budget" class="form-control" name="budget">
<option value="" selected="selected">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


Budget
                  @elseif($_GET['lang'] =='ar')

                  الميزانية
                  
                  
                  @endif 


</option>
<option value="Per person $1000 - $2000">Per person $1000 - $2000</option>
<option value="Per person $2000 - $3000">Per person $2000 - $3000</option>
<option value="Per person $3000 &amp; up">Per person $ 3000 &amp; up</option>
</select>
<span class="material-input"></span></div>
</div>
<div class="col-12 col-sm-7">
<div style="float: left;color: #7c8495;margin-top: 10px;font-style: italic">
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


Per person (international flights NOT included)


                  @elseif($_GET['lang'] =='ar')

                  للشخص الواحد (الرحلات الدولية غير مشمولة)

                  
                  
                  @endif 




</div>
</div>
</div>
</div>
</div>
</div>
<div class="quoteform-block quoteform-step__style">
<div class="row">
<div class="col-12">
<div class="form-group">
<div class="checkbox">
<label class="new_inquire_page_form_main_label">
<input class="flight" name="flight" type="checkbox" value="Yes" onchange="valueChanged()"><span class="checkbox-material"><span class="check"></span></span>
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


Add flight offer to your vacation package

                  @elseif($_GET['lang'] =='ar')

                  أضف عرض طيران إلى باقة عطلتك
                  
                  
                  @endif 


 </label>
</div>
</div>
</div>
<div class="flight_from" style="display:none">
<div class="col-12">
<div class="form-group label-floating is-empty">
<input id="departure_airport" class="form-control" name="departure_airport" value="" placeholder="Departure Airport">
<span class="material-input"></span></div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<label class="new_inquire_page_form_main_label" for="project">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


Additional Info *
                  @elseif($_GET['lang'] =='ar')

                  معلومات إضافية *
                  
                  
                  @endif 



</label>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-9">
<div class="form-group label-floating is-empty">
<textarea minlength="40" placeholder="Additional information might help us create a better package that meets your needs *" style="text-align: left; line-height:1.7em; height:150px;" class="form-control" name="comment" id="comment" autocomplete="off" required="" aria-required="true"></textarea>
<span class="material-input"></span></div>
</div>
</div>
</div>
<hr>
<div id="recaptcha" class="g-recaptcha" data-sitekey="6LegDoYUAAAAALe9PVEiSlLyX3RzYBzKmoKrxMEz" data-callback="SubmitRegistration" data-size="invisible"><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LegDoYUAAAAALe9PVEiSlLyX3RzYBzKmoKrxMEz&amp;co=aHR0cHM6Ly93d3cubWVtcGhpc3RvdXJzLmNvbTo0NDM.&amp;hl=en&amp;v=Ai7lOI0zKMDPHxlv62g7oMoJ&amp;size=invisible&amp;cb=n45q5nyify82" width="256" height="60" role="presentation" name="a-1uwg1mbjvxrn" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
<input type="hidden" id="url_goal" name="url_goal" value="Inquire">
<input type="hidden" id="program_id" name="program_id" value="Inquire">
<div class="quoteform-actions">
<a class="back_link" id="go_back_to_step_1_button">
    
@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 

Back
                  @elseif($_GET['lang'] =='ar')

               
الرجوع


                  @endif 



</a>

<button type="submit" class="new_btn_inquire_last" id="SubmitButton">

@if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 


Inquire Now 
                  @elseif($_GET['lang'] =='ar')

                  أستعلم  الأن
                  
                  
                  @endif 


</button> 

<!-- <input  class="new_btn_inquire_last" type="submit"  id="SubmitButton" value="Inquire Now "> -->

</div>
</div>
</div>
</article>
</form>
</div>
</div>




<script async="true" type="text/javascript" src="Front/JS/Com2021-all-jquery-combined.js"></script>



<script>
    $(document).ready(function () {
        function onload() {
            var element = document.getElementById('SubmitButton');

            element.onclick = validate;
        }
        onload();
        jQuery("#quoteform").validate();
        // jQuery('#example-getting-started').multipleSelect({});
    });

    function SubmitRegistration(data) {

        if ($("#gRecaptchaResponse").val() == '') {
            $("#gRecaptchaResponse").val(data);
        }
        document.getElementById("quoteform").submit();
    }

    function validate(event) {
       // event.preventDefault();
        jQuery("#quoteform").validate();

        var isFormValid = jQuery("#quoteform").valid();

        var phoneNumber = document.getElementById('UserPhone').value;
        var phoneRGEX = /[\d]{10}/;
        var phoneResult = phoneRGEX.test(phoneNumber);

        if(!phoneResult){
            $("[for='UserPhone']").css("display","inline-block");
        }
        if (isFormValid) {
            isFormValid = phoneResult;
        }

        if (isFormValid) {
            grecaptcha.execute();
        }
    }

    jQuery(function () {
        jQuery("#datepickerArrival2").datepicker({
            defaultDate: '+2d',
            dateFormat: 'dd/mm/yy',
            showOn: "both",
            buttonImageOnly: false,
            minDate: 2,
            inline : true,
            altField : '#arrival',
            onSelect: function (selectedDate) {
                jQuery("#datepickerDeparture2").datepicker("option", "minDate", selectedDate);
            }
        });
        jQuery("#datepickerDeparture2").datepicker({
            defaultDate: "+2d",
            dateFormat: 'dd/mm/yy',
            showOn: "both",
            buttonImageOnly: false,
            minDate: 0,
            inline : true,
            altField : '#departure',
        });
    });

    function valueChanged(){
        if(jQuery('.flight').is(":checked")) {
            jQuery("#departure_airport").attr("required", true);
            jQuery(".flight_from").show();
        }else{
            jQuery(".flight_from").hide();
            jQuery("#departure_airport").attr("required", false);
        }
    }

    function updateAgeFieldsAll(a, b, c) {
        var d = $("[ageDesc='" + c + "']");
        d.find(".age-input-div").length && d.find(".age-input-div").remove();
        for (var e = 0; b > e; e++) {
            if( c == "infant"){
                var f = $("#ageInputDiv").clone().removeAttr("id").addClass("d-none age-input-div").removeClass("form-group label-floating");
                f.find(".div-1").html("<input id='" + c + e + "' type='hidden' size='3' class='form-control' maxlength='2'  min='1' value='1.99' max='11.99' name='infants_age[" + c + "_" + e + "]' />"), d.append(f.removeClass("d-none"))
            }else{
                var f = $("#ageInputDiv").clone().removeAttr("id").addClass("col-md-4 age-input-div");
                f.find(".div-0").html("<label  class='new_inquire_page_form_main_label' for='" + c + e + "'>Age of Child "+ (e+1) +"</label>"), f.find(".div-1").html("<input id='" + c + e + "' type='number' size='3' class='form-control' value=''  maxlength='2' required min='2' max='11.99' name='children_age[" + c + "_" + e + "]' />"), d.append(f.removeClass("d-none"))
            }
        }
    }

    function updateAgeSelectionAll(a) {
        var b = 0,
            c = 0,
            d = $('[id^="ageBands\\["]');
        d.each(function() {
            b += parseInt($(this).val())
        }), c = a - b, d.each(function() {
            var a = $(this),
                b = parseInt(a.val()) + c,
                d = a.val(),
                e = 0;
            a.val(d)
        })
    }

    function paxOnChangeAll(a, b, c, d, e) {
        "Adult" === c ? updateAgeSelectionAll(e) : (updateAgeFieldsAll(a, b, c.toLowerCase()), updateAgeSelectionAll(e))
    }

    jQuery('.btn-number.book_all').click(function(e){
       // e.preventDefault();

        fieldName = jQuery(this).attr('data-field');
        type      = jQuery(this).attr('data-type');
        var input = jQuery("input[id='"+fieldName+"']");

        var currentVal = parseInt(input.val());

        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    jQuery(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    jQuery(this).attr('disabled', true);
                }

            }
        } else {
            input.val(1);
        }
    });
    jQuery('.input-number.book_all').focusin(function(){
        jQuery(this).data('oldValue', jQuery(this).val());
    });
    jQuery('.input-number.book_all').change(function() {

        minValue =  parseInt(jQuery(this).attr('min'));
        maxValue =  parseInt(jQuery(this).attr('max'));
        valueCurrent = parseInt(jQuery(this).val());

        name = jQuery(this).attr('id');
        if(valueCurrent >= minValue) {
            jQuery(".btn-number.book_all[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            jQuery(this).val(jQuery(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            jQuery(".btn-number.book_all[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            jQuery(this).val(jQuery(this).data('oldValue'));
        }


    });
    jQuery(".input-number.book_all").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          //  e.preventDefault();
        }
    });


    jQuery("#submit_step_maturity").click(function() {
        var travellingToValues = [];
        jQuery('input[name="travelling_to[]"]:checked').each(function() {
            travellingToValues.push(jQuery(this).val());
        });

        if(travellingToValues.length === 0){
            $("[data-fieldname='travelling_to[]']").addClass("has-error");
        }else{
            $("[data-fieldname='travelling_to[]']").removeClass("has-error");
        }

        if(travellingToValues.length !== 0){
            $("[data-step-name='maturity']").addClass("d-none");
            $("[data-step-name='profile']").removeClass("d-none");
        }
    });
    jQuery("#go_back_to_maturity_step_button").click(function() {
        $("[data-step-name='maturity']").removeClass("d-none");
        $("[data-step-name='profile']").addClass("d-none");
    });

    jQuery("#submit_step_1").click(function() {


        let flexible_dates = jQuery('input[name="flexible_dates"]:checked');
        let flexibleDatesValues = jQuery('input[name="flexible_dates"]:checked').val();
        let priceValid = false;

        if(flexible_dates.length === 0){
            $("[data-fieldname='flexible_dates']").addClass("has-error");
            priceValid = false;
        }else{
            $("[data-fieldname='flexible_dates']").removeClass("has-error");
            priceValid = true;
        }

        if(flexibleDatesValues === "no"){
            let arrival = jQuery('input[name="arrival"]').val();
            if (!arrival) {
                $("[data-fieldname='fixed_dates']").addClass("has-error");
                priceValid = false;
            } else {
                $("[data-fieldname='fixed_dates']").removeClass("has-error");
                priceValid = true;
            }
        }

        if(flexibleDatesValues === "yes"){
            let date_approximate_start = jQuery('input[name="date_approximate_start"]:checked');
            let date_approximate_length = jQuery('input[name="date_approximate_length"]:checked');

            if (date_approximate_start.length === 0 || date_approximate_length.length === 0) {
                $("[data-fieldname='appromixate_dates']").addClass("has-error");
                priceValid = false;
            } else {
                $("[data-fieldname='appromixate_dates']").removeClass("has-error");
                priceValid = true;
            }
        }

        if(priceValid) {
            $("[data-step-name='profile']").addClass("d-none");
            $("[data-step-name='trip']").removeClass("d-none");
        }
    });

    jQuery('input[name="flexible_dates"]').change(function () {
        flexible_dates = jQuery('input[name="flexible_dates"]:checked').val();

        if(flexible_dates === "no"){
            $("[data-fieldname='fixed_dates']").removeClass("d-none");

            $("[data-fieldname='appromixate_dates']").addClass("d-none");
        }else{
            $("[data-fieldname='appromixate_dates']").removeClass("d-none");

            $("[data-fieldname='fixed_dates']").addClass("d-none");
        }
    });

    jQuery("#go_back_to_step_1_button").click(function() {
        $("[data-step-name='profile']").removeClass("d-none");
        $("[data-step-name='trip']").addClass("d-none");
    });

    function validateMail() {

        let mailValue = jQuery('#UserEmail').val();
        var settings = {
            "url": "https://api.sendgrid.com/v3/validations/email",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer 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",
                "Content-Type": "text/plain"
            },
            "data": "{\r\n    \"email\": \""+mailValue+"\",\r\n     \"source\": \"Inquire\"\r\n}",
        };

        if(mailValue.length > 1) {
            $.ajax(settings).done(function (response) {
                if (response.result.verdict == "Invalid") {
                    jQuery('#UserEmail').css({"border": "1px solid red", "color": "red"});
                    jQuery('#SubmitButton').attr('disabled', 'disabled')
                    jQuery('#mail-validation').html('Please enter a Valid Email');
                    jQuery('#mail-validation').css({"margin-bottom": "10px", "color": "red"});
                } else {
                    jQuery('#UserEmail').css({"border": "1px solid #757575", "color": "#757575"});
                    jQuery('#SubmitButton').removeAttr('disabled');
                    jQuery('#mail-validation').html('');
                    jQuery('#mail-validation').css({"margin-bottom": "10px", "color": "red"});
                }
            });
        }

    }


</script>
<script type="text/javascript">
                                                        updateAgeSelectionAll(9);
                                                    </script>
<script type="text/javascript">
    var currenciesExArray = new Array();
    var currenciesSignArray = new Array();
    var currenciesAbbrevArray = new Array();
    var currenciesAbbrevTextArray = new Array();

            currenciesExArray['1'] = "1";
        currenciesSignArray['1'] ="US$";
        currenciesAbbrevArray['1'] ="USD (US$)";
        currenciesAbbrevTextArray['1'] ="USD";


            currenciesExArray['2'] = "0.92610";
        currenciesSignArray['2'] ="&euro;";
        currenciesAbbrevArray['2'] ="EUR (&euro;)";
        currenciesAbbrevTextArray['2'] ="EUR";


            currenciesExArray['3'] = "0.79430";
        currenciesSignArray['3'] ="&pound;";
        currenciesAbbrevArray['3'] ="GBP (&pound;)";
        currenciesAbbrevTextArray['3'] ="GBP";


            currenciesExArray['4'] = "1.55930";
        currenciesSignArray['4'] ="AU$";
        currenciesAbbrevArray['4'] ="AUD (AU$)";
        currenciesAbbrevTextArray['4'] ="AUD";


    
    function updateSiteRatesTop(current_currency,session_update){
        jQuery(".curr_contain#currency").find('li').show();
        jQuery("#e"+current_currency).hide();
        jQuery(".convertable").each(function(){
                var id = jQuery(this).attr('id');
                var current_value = jQuery('#h'+id).val();

                if(!isNaN(parseFloat(current_value))){

                    var new_value = parseFloat(current_value) * parseFloat(currenciesExArray[current_currency]);
                    var rounded_value = Math.round(new_value*Math.pow(10,0))/Math.pow(10,0);;
                    jQuery(this).html(rounded_value);
                }
        });

        jQuery(".currencySign").html(currenciesSignArray[current_currency]);
        jQuery(".currencySign3").html(currenciesAbbrevArray[current_currency]);
        jQuery(".currencySignText").html(currenciesAbbrevTextArray[current_currency]);

        if(session_update){
            jQuery.ajax({ url: '/ajax/dashboard/update_currency_session/'+current_currency });
        }
    }


    jQuery(document).ready(function(){
        jQuery("ul.subnav_top").parent().append(""); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.subnav*)
        jQuery("ul.topnav_top li .hover").mouseover(function() { //When trigger is clicked...
            //Following events are applied to the subnav itself (moving subnav up and down)

            jQuery(this).parent().find("ul.subnav_top").slideDown('fast').show(); //Drop down the subnav on click
            jQuery(this).parent().hover(function() {
            }, function(){
                jQuery(this).parent().find("ul.subnav_top").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
            });

            //Following events are applied to the trigger (Hover events for the trigger)
            }).hover(function() {
                jQuery(this).addClass("subhover"); //On hover over, add class "subhover"
            }, function(){  //On Hover Out
                jQuery(this).removeClass("subhover"); //On hover out, remove class "subhover"
        });

    });


    jQuery(document).ready(function(){
        updateSiteRatesTop('1',false);
    });
    </script>
