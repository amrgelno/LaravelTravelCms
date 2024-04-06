
<style>
    .program_box_content{
        font-size: 1.154rem;
        margin: 15px 0;
        padding: 0 15px 15px 15px;
    }
    .program_box_content .program_box_data li:before{
        content: "\f111";
        color: #000000;
        font-size: 6px;
        top: -2px;
    }
    .program_box_title#include + .program_box_data li:before {
        color: #F5A31B;
        content: "\f272";
        font-family: 'bootstrap-icons';
        font-size: 19px;
        position: absolute;
        left: 0;
        top: -1px;
    }
    .program_box_title#exclude + .program_box_data li:before {
        color: #E8235E;
        content: "\f62a";
        font-family: 'bootstrap-icons';
        font-size: 19px;
        position: absolute;
        left: 0;
        top: -1px;
    }
    .program_box_data{
        margin: 12px 0;
    }
    .program_box_icons_img {
        width: 100px;
        height: 100px;
        border: 1px solid #707070;
        border-radius: 50%;
        padding: 18px;
        text-align: center;
    }
    .program_box_icons_img img{
        width: 65px;
        height: 65px;
    }
    .program_box_icons_text {
        font-weight: 500;
        font-size: 1.154rem;
        text-align: center;
        color: #f5a31b;
        margin-top: 20px;
    }
    .program_box_icons_subtext{
        font-weight: bold;
        font-size: 1.538rem;
        color: #09415d;
        text-align: center;
    }
    .program_box_icons_subtext_sub{
        font-weight: normal;
        font-size: 1.154rem;
        color: #09415d;
        text-align: center;
    }
    .program_box {

        width: 100%;
        margin-top: 30px;
    }
    .full_itinerary_box, .prices_box, .cruise_iti_repeat, #reviews2_boxes {
        border-radius: 5px;
        box-shadow: 0 2px 7px 0 rgba(155, 155, 155, 0.5);
        border: solid 0.5px #eeeeee;
        background-color: #ffffff;
        padding: 15px;
        cursor: pointer;
    }
    .full_itinerary_box .itinerary_title h3:after, .full_itinerary_box .itinerary_title h2:after, .iten:after {
        top: 12px;
    }
    .expand {
        padding: 0px 0px 0px 15px;
        margin-bottom: 15px;
    }
    .program_info_box_title{
        font-size: 16px;
        letter-spacing: -0.7px;
        color: #000000;
        cursor: pointer;
        font-weight: bold;
        position: relative;
    }
    .program_info_box_desc {
        padding-top: 10px;
    }
    .new_btn_book{
        border-radius: 20px;
        box-shadow: 0 2px 4px 0 rgba(216, 216, 216, 0.5);
        background-color: #ff9002;
        padding: 8px 20px;
        color: #fff !important;
        margin: 30px 0px 15px 0px;
    }
    .new-prices-tbl_title {

        width: 100%;
        font-size: 15px;
        font-weight: bold;
        color: #000;
        margin-bottom: 10px;
    }
    .new-prices-tbl_data {
        width: 100%;
        margin: 15px 0;
        font-size: 14px;
    }
    .prices_box_title {
        font-size: 1.125rem;
        font-weight: 600;
        color: #131313;
        margin: 15px 0px;

        width: 100%;
        padding: 0px;
    }
    .prices_all {
        width: 100%;

        margin-top: 30px;
    }
    .new-hotel-boxes {
        margin-top: 0px;
        margin-bottom: 15px;
    }
    .price_icon_content {
        width: 100%;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        border-right: 1px solid #e6e6e6;
        padding: 30px 0px;
    }
    .pricelarge2{
        color: #f5a623;
    }
    .program_box_title {
        font-size: 2.692rem;
        font-weight: bold;
        color: #09415D;
    }
    .program_box_data_book_form_tabs .nav-tabs {
        background: #fbfbfb;
        border-bottom: 0px;
        margin-bottom: 10px;

        width: 100%;
    }
    .program_box_data_book_form_tabs .nav-tabs li {
        width: 50%;
    }
    .program_box_data_book_form_tabs .nav-tabs li.active {
        background-color: #fbfbfb;
    }
    .program_box_data_book_form_tabs .nav-tabs>li.active>a, .program_box_data_book_form_tabs .nav-tabs>li.active>a:focus, .program_box_data_book_form_tabs .nav-tabs>li.active>a:hover {
        color: #ff9931 !important;
        background-color: #fbfbfb;
        border: 0px solid #ddd;
        text-align: center;
        font-size: 17px;
        font-weight: 600;
        border-bottom: solid 2px #ff9931 !important;

    }
    .program_box_data_book_form_tabs .nav-tabs > li > a, .program_box_data_book_form_tabs .nav-tabs > li > a:hover, .program_box_data_book_form_tabs .nav-tabs > li > a:focus {
        color: #969494 !important;
        text-align: center;
        font-size: 17px;
        font-weight: 600;
        border-bottom: 2px solid #969494 !important;

    }
    #ui-datepicker-div{
        z-index: 2 !important;
    }
    .program_box_title#include {
        font-size: 1.538rem;
        font-weight: bold;
        color: #212121;
    }
    .program_box_title#exclude {
        font-size: 1.538rem;
        font-weight: bold;
        color: #707070;
    }
    .program_box_data ul{
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
    }
    .program_box_data ul li {
        margin-bottom: 11px;
        padding-left: 25px;
        position: relative;
        line-height: normal;
    }
    .new_price_box {
        border-radius: 15px 15px 0 0;
        border: 1px solid #eee;
    }
    .new_price_box_title {
        border-radius: 15px 15px 0px 0px;
        background: #09415d;
        text-align: center;
        font-size: 1.538rem;
        color: #fff;
        font-weight: bold;
        padding: 13px 0;
    }
    .new_price_box_prices {
        padding: 20px 10px;
    }
    .new_price_box_hotels {
        padding: 20px 10px;
    }
    .new-hotel-boxes-title {
         font-size: 1rem;
         text-align: left;
         color: #212121;
         margin: 9px 0;
     }
    .new-hotel-boxes-img {
        height: 135px;
    }
    ul.list-inline {
        flex-direction: row;
    }
    .new-hotel-boxes ul li {
        margin-bottom: 0;
        padding-left: 0;
        position: relative;
        list-style: none;
        display: inline-block;
        margin-right: 5px;
    }
    .new-hotel-boxes img {
        height: 17px;
        width: 17px;
    }
    .new_price_box_hotels ul li:before {
        display: none;
    }
    .new_price_box_sub_title {
        font-weight: bold;
        font-size: 1.538rem;
        text-align: left;
        color: #212121;
        margin-bottom: 10px;
    }
    .new_price_box_price_text{
        background: #fafafa;
        padding: 12px 16px;
    }
    .new_price_box_price_price {
        font-size: 1.538rem;
        color: #F5A31B;
        padding: 0px 10px;
    }
    .new_price_box_price_price .new_price_box_price_price_discount {
        color: #757575;
        font-size: 1rem;
    }
    .program_info_tags {
        display: inline-block;
    }
    .program_info_box_tags_title {
        color: #757575;
        font-size: 1.154rem;
        border: 1px solid #eeeeee;
        padding: 5px 10px;
        cursor: pointer;
    }
    .program_info_box_tags_title:hover {
        color: #F5A31B;
        border: 1px solid #F5A31B;
    }
    .program_reviews_box_counts .progress {
        height: 20px;
        background: #EEEEEE;
        width: 50%;
        float: left;
    }
    .program_reviews_box_counts .progress .progress-bar {
        background: #09415D;
    }
    .program_reviews_box_rates {
        clear: both;
        display: inline-block;
        margin-bottom: 15px;
        width: 100%;
    }
    .program_reviews_box_rates_text{
        font-size: 1.154rem;
        float: left;
        font-weight: bold;
        width: 30%;
    }
    .program_reviews_box_rates_num{
        font-size: 1rem;
        float: right;
        width: 20%;
        text-align: center;
    }
    .program_reviews_box_avg {
        font-weight: bold;
        font-size: 8.076rem;
        color: #f5a31b;
        display: flex;
        justify-content: center;
        line-height: normal;
    }
    .program_reviews_box_stars {
        display: flex;
        justify-content: center;
        line-height: normal;
    }
    .program_reviews_box_stars ul{
        justify-content: center;
    }
    .program_reviews_box_stars ul li{
        padding: 0 5px;
        margin: 0;
    }
    .program_reviews_box_stars li:before{
        display: none;
    }
    .program_reviews_box_total {
        display: flex;
        justify-content: center;
        margin: 20px 0 35px 0;
        font-weight: normal;
        font-size: 1.538rem;
    }
    .program_reviews_box_data {
        margin: 0 20px 30px 20px;
        display: flex;
        flex-direction: column;
    }
    .program_reviews_box_title_content {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .program_reviews_box_title_content ul li {
        padding: 0 1px;
        margin: 0;
    }
    .program_reviews_box_title_content ul li:before {
        display: none;
    }
    .program_reviews_box_title {
        font-weight: bold;
        font-size: 1.538rem;
        color: #212121;
        margin-left: 10px;
    }
    .program_reviews_box_client {
        font-weight: normal;
        font-size: 1rem;
        color: #212121;
        border-bottom: 1px solid rgba(117,117,117,.3);
        margin: 11px 0 10px 0;
        padding-bottom: 8px;
    }
    .program_reviews_box_txt {
        height: 70px;
        font-weight: normal;
        font-size: 1.154rem;
        color: #212121;
        opacity: 0.85;
        overflow: hidden;
    }
    .program_reviews_box_all{
        font-weight: 500;
        font-size: 1.538rem;
        text-align: center;
        color: #212121;
    }
    .program_reviews_box_all a{
        color: #212121;
    }
    .program_new_right_side{
        margin-top: 25px;
        border: 1px solid #757575;
    }
    .program_new_right_side_price {
        position: relative;
        margin: 25px 0;
    }
    .program_new_right_side_price_discount{
        font-size: 1.154rem;
        font-weight: 400;
        padding: 3px 10px;
        background-color: #e8235e;
        color: #fff;
        width: max-content;
    }
    .program_new_right_side_price_data {
        font-size: 2.692rem;
        font-weight: bold;
        padding: 0 0 0 25px;
        color: #F5A31B;
    }
    .program_new_right_side_price_was {
        font-weight: normal;
        font-size: 1.154rem;
        color: #212121;
        opacity: 0.5;
    }
    .program_new_right_side_form{
        padding: 0 25px 25px 25px;
    }
    .program_new_right_side_form label{
        font-weight: 500;
        font-size: 1.154rem;
        color: #212121;
    }
    .program_new_right_side_form .form-control, .program_new_right_side_form .form-group .form-control {
        background: #ffffff;
        border: 1px solid #757575;
        border-radius: 0;
        padding: 5px 10px;
        font-size: 1.154rem;
        line-height: normal;
        background-image: none;
        height: 40px;
        font-weight: normal;
        color: #757575;
    }
    .program_new_right_side_form .form-group.has-error.is-focused .form-control{
        color: red;
        background: #ffffff;
    }
    .program_new_right_side_form .form_select:before {
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
    .program_new_right_side_form button#Enquire-btn {
        background-color: #09415D;
        border-radius: 15px;
        width: 100%;
    }
    .program_new_right_side_form .btn-number {
        background-color: #757575;
        border: 0 solid #757575;
        color: #fff;
        font-size: 11px;
        height: 20px;
        line-height: 20px;
        width: 20px;
    }
    .program_new_right_side_form .btn-number:hover {
        background-color: #F5A31B;
    }
    .program_new_right_side_form .input-group .input-group-btn {
        padding: 2px 0;
    }
    .program_new_right_side_form .input-group {
        border: 1px solid #757575;
        padding: 7px;
    }
    .program_new_right_side_form .input-number {
        height: 24px !important;
    }
    .program_reviews_box_expand{
        height: 440px;
        overflow-y: hidden;
    }
    #reviews_load_more {
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        font-weight: bold;
        padding: 15px 30px;
        cursor: pointer;
        background-color: #09415D;
        border-radius: 10px;
        border: 1px solid #09415D;
        overflow: hidden;
        margin: 15px auto;
        width: max-content;
    }

</style>