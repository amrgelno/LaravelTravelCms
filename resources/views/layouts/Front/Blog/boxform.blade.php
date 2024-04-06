
<div class="pagecontainer2 testimonialbox">
            <div class="padding20">
                <h3>
                @include('layouts.Front.Blog.boxheader')
                </h3>
             <!--   <img id="ContentPlaceHolder1_Offer_Domestic_img_star" src="../../images/filter-rating-4.png">-->
             <br><br> <!-- Go to www.addthis.com/dashboard to customize your tools --> 
             <div class="addthis_inline_share_toolbox"></div>
            </div>
            <div class="line3">
         
            </div>


            <div class="hpadding20">
                <h4 class="opensans slim dark">
                    <i class="fa fa-building-o"></i>&nbsp;Description:
                        <br>
                    <br>
                   {{$Desc}} 
                </h4>


            <div class="line3 margtop20">
            </div>
            <div class="hpadding20">
                <h4 class="opensans slim dark">
                    <i class="fa fa-clock-o"></i>&nbsp; {{$Duration}} </h4>
            </div>

            <div class="hpadding20">
                <h4 class="opensans slim dark">
                    <i class="fa fa-map-marker"></i>&nbsp;{{$Country}}</h4>
            </div>


            <div class="line3 margtop20">
            </div>
        
            <div class="hpadding20">
                <h4 class="opensans slim dark">
                    <i class="fa fa-calendar"></i>&nbsp:{{$DayTime}}<br>
                    <br>
                   
                </h4>
            </div>
            <div class="line3 margtop20">
            </div>
          

               
            </div>
            <div class="clearfix">
            </div>
            <br>



            
        </div>


<br/>

<br/>




        <div >
            <div class="pagecontainer2 testimonialbox">
                <div class="cpadding1">
                    <h3 class="opensans">Book Now</h3>

                    <div class="wh90percent">
                        <input name="ctl00$ContentPlaceHolder1$Offer_Domestic$txt_CustomerName" type="text" id="ContentPlaceHolder1_Offer_Domestic_txt_CustomerName" class="form-control margtop10" placeholder="Name">
                        <span id="ContentPlaceHolder1_Offer_Domestic_RequiredFieldValidator1" style="color:Red;font-size:Small;display:none;">Enter your name</span>

                        <input name="ctl00$ContentPlaceHolder1$Offer_Domestic$txt_CustomerEmail" type="text" id="ContentPlaceHolder1_Offer_Domestic_txt_CustomerEmail" class="form-control margtop10" placeholder="Email Address">
                        <span id="ContentPlaceHolder1_Offer_Domestic_RequiredFieldValidator2" style="color:Red;font-size:Small;display:none;">Enter your email</span>
                        <span id="ContentPlaceHolder1_Offer_Domestic_RegularExpressionValidator1" style="color:Red;font-size:Small;display:none;">Enter valid email</span>
                        <input name="ctl00$ContentPlaceHolder1$Offer_Domestic$txt_CustomerMobile" type="text" id="ContentPlaceHolder1_Offer_Domestic_txt_CustomerMobile" class="form-control margtop10" placeholder="Phone / Mobile">
                        <span id="ContentPlaceHolder1_Offer_Domestic_RequiredFieldValidator3" style="color:Red;font-size:Small;display:none;">Enter your mobile</span>
                        <input name="ctl00$ContentPlaceHolder1$Offer_Domestic$txt_CustomerDate" type="text" id="ContentPlaceHolder1_Offer_Domestic_txt_CustomerDate" class="form-control margtop10" placeholder="Prefered Date">
                        <span id="ContentPlaceHolder1_Offer_Domestic_RequiredFieldValidator4" style="color:Red;font-size:Small;display:none;">Enter prefered date</span>
                        <select name="ctl00$ContentPlaceHolder1$Offer_Domestic$ddl_roomno" id="ContentPlaceHolder1_Offer_Domestic_ddl_roomno" class="form-control mySelectBoxClass margtop10 hasCustomSelect" style="appearance: menulist-button; width: 186px; position: absolute; opacity: 0; height: 34px; font-size: 14px;">
	<option value="1">1 Room</option>
	<option value="2">2 Rooms</option>
	<option value="3">3 Rooms</option>

</select><span class="customSelect form-control mySelectBoxClass margtop10 hasCustomSelect" style="display: inline-block;"><span class="customSelectInner" style="width: 170px; display: inline-block;">1 Room</span></span>

                        <select name="ctl00$ContentPlaceHolder1$Offer_Domestic$ddl_adultno" id="ContentPlaceHolder1_Offer_Domestic_ddl_adultno" class="form-control  mySelectBoxClass margtop10 hasCustomSelect" style="appearance: menulist-button; width: 186px; position: absolute; opacity: 0; height: 34px; font-size: 14px;">
	<option value="1">1 Adult</option>
	<option value="2">2 Adults</option>
	<option value="3">3 Adults</option>
	<option value="4">4 Adults</option>
	<option value="5">5 Adults</option>

</select><span class="customSelect form-control mySelectBoxClass margtop10 hasCustomSelect" style="display: inline-block;"><span class="customSelectInner" style="width: 170px; display: inline-block;">1 Adult</span></span>

                        <select name="ctl00$ContentPlaceHolder1$Offer_Domestic$ddl_childno" id="ContentPlaceHolder1_Offer_Domestic_ddl_childno" class="form-control mySelectBoxClass margtop10 hasCustomSelect" style="appearance: menulist-button; width: 186px; position: absolute; opacity: 0; height: 34px; font-size: 14px;">
	<option value="0">Child</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>

</select><span class="customSelect form-control mySelectBoxClass margtop10 hasCustomSelect" style="display: inline-block;"><span class="customSelectInner" style="width: 170px; display: inline-block;">Child</span></span>

                        <textarea name="ctl00$ContentPlaceHolder1$Offer_Domestic$txt_comment" rows="3" cols="20" id="ContentPlaceHolder1_Offer_Domestic_txt_comment" class="form-control margtop10" placeholder="Special Request"></textarea>
                        <input type="submit" name="ctl00$ContentPlaceHolder1$Offer_Domestic$btn_Send" value="book now" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$Offer_Domestic$btn_Send&quot;, &quot;&quot;, true, &quot;BookNow&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_Offer_Domestic_btn_Send" class="booknow margtop20 btnmarg">

                    </div>

                </div>
            </div>

        </div>