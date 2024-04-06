<?php
header('Content-type:text/css; charset:utf-8');
?>
<?php
include("con_db2.php");
$selector="select * from view";
$exe=mysqli_query($connect,$selector);
while($column=mysqli_fetch_assoc($exe)){
?>
/*for xs screen*/

@media  (max-width:767px){
body {
background-image: url(http://wmh.github.io/circular-slides-generator/static/img/noise.png);
/*margin-left: 16px;*/
}

.preload {
position: fixed;
width: 50px;
height: 50px;
border: 5px solid rgba(0, 0, 0, 0);
border-top-color: <?php echo $column['ulcolor']?>;
border-radius: 100%;
margin-top: 81%;
margin-left: 50%;
animation: round 0.6s linear infinite;
}
/*roll animation display*/
@keyframes round{
from{transform:rotate(0deg)} 
to{transform :rotate(360deg)}
}
		 .preload2 {
position: fixed;
width: 50px;
height: 50px;
border: 5px solid rgba(0, 0, 0, 0);
border-bottom-color: yellow;
border-radius: 100%;
margin-top: 10%;
margin-left: 50%;
animation: rounda 5s cubic-bezier(0.58, 0, 1, 1) infinite;
}
/*roll animation display*/
@keyframes rounda{
from{transform:rotate(360deg)} 
to{transform :rotate(0deg)}
	}
	
	
	.preload3 {
position: fixed;
width: 50px;
height: 50px;
border: 5px solid rgba(0, 0, 0, 0);
border-left-color: #5a5a5a;
border-radius: 100%;
margin-top: 25%;
margin-left: 50%;
animation: roundx 4s linear infinite;
}
/*roll animation display*/
@keyframes roundx{
from{transform:rotate(0deg)} 
to{transform :rotate(180deg)}
	}
		  

.loadingbg {
position: fixed;
background: white;
width: 145%;
HEIGHT: 1850PX;
z-index: 50;
margin: -111px 0px 0px -14px;
}

.header {
margin-top: 44px;
background: #F1F1F1;
width: 100%;
/* margin-top: 30px; */
height: 133px;
padding: 50;
float: left;
/* position: absolute; */
}



.search {
    margin: -65px 100px 10px 20px;
    width: 94%;
    background: unset;
}

input.searcher {
    width: 33%;
    height: 26px;
    border-radius: 100px;
    font-size: 19px;
    margin-left: 117px;
    margin-top: -9px;
}

input.searchdis {
width: 33%;
height:26px;
margin-left:120px;
margin-top: 3px;
border-radius: 100px;
font-size: 20px;
}


button.searchbt {
border-radius: 100px;
margin-left: -38px;
font-size: 10px;
width: 40px;
height: 23px;
background: aliceblue;
}

.username {
    font-size: 18px;
    margin-top: 8px;
    margin-left: 10px;
}



button {
background: #0c94e8;
color: white;
border: 2px solid #000;
}

.menu {
    margin-top: -5px;
    margin-left: 51%;
    width: 120px;
    height: 70px;
    font-size: 31px;
    background: #fdfff02e;
    border: none;
    font-weight: lighter;
    z-index: 5;
}


ul.nav {
    position: absolute;
    width: 345px;
    height: 883px;
    background:<?php echo $column['ulcolor']?>;
    top: 4.5%;
    padding: 5px 0px;
    font-size: 8px;
    display: none;
    z-index: 12;
}

.contactform {
/* top: 50px; */
position: absolute;
/* background: cornflowerblue; */
width: 447px;
height: 519px;
margin: -566px 50px 1866px 20px;
padding: 5px 53px 78px 15px;
border-radius: 50px;
font-size: 27px;
background: #00000054;
z-index: 3;
display: none;
}

/* contact.php */

.massage {
width: 529px;
height: 150px;
text-align: center;
margin: 390px 179px 11px 4px;
padding: 66px 20px 30px 91px;
font-size: 30px;
color: #FFC107;
border: 2px solid #000;
background: #607D8B;
}

.round {
width: 88px;
height: 100px;
position: absolute;
border: 3px solid #ffc107;
border-radius: 50px;
margin: -32px 20px 30px -80px;
}

.right1 {
width: 74px;
height: 5px;
background: #ffc107;
transform: rotate(313deg);
margin: 46px 20px 30px 19px;
}
.right2 {
margin: -17px 20px 30px 8px;
width: 29px;
height: 5px;
background: #ffc107;
transform: rotate(39deg);
position: absolute;
}

.calclu {
position: absolute;
margin-top: -96px;
margin-left: 0px;
background: none;
color: white;
font-size: 25px;
border-radius: 50px;
border-style: dashed;
border-style: height;
/* border: none; */
border-raduis: 100px;
border-raduis: 50px;
z-index: 3;
display: block;
}

.calclures {
position:absolute;
top: 451px;
left: 0px;
width: 134px;
height: fit-content;
left: 122px;
z-index: 5;
background-color: #0000004d;
font-size: 25px;
}

.mobtext {
position:absolute;
font-size: 15px;
color: black;
margin-top: -26px;
margin-left: 37px;
z-index: 5;
}



.nav>li {
    padding: 45px 68px;
    list-style: none;
    float: none;
    font-size: 20px;
}

.nav>li a {
color:white;
}

li.Dropmenu{
position:relative;		
}

ul#submenu {
position: absolute;
margin: -46px 0px;
font-size: 29px;
width: 14px;
padding: 37px 31px;
color: #F00;
list-style: none;
display: none;
background: none;
}

li.Dropmenu:hover ul#submenu{

display:block;
}

li.sub1 {
padding: 18px 20px 10px 15px;
width: 450px;
/* color: red; */
}
#TREMENU {
position: absolute;
width: 50px;
height: 90px;
display: none;
font-size: 34px;
padding: 37px 0px;
margin: -46px 0px;
background: none;
list-style: none;
}

li.sub1:hover ul#TREMENU {
background:none;
display:block;
}

.sub2{
width: 150px;
height: 20px;
}

.contains {
background: unset;
width: 163%;
margin-left: 32px;
height: inherit;
margin-bottom: 6041px;
float: left;
}

.br {
margin-top: 85px;
width: 100%;
}


.btmenu {
background: orange;
width: 90px;
height: 50px;
display: inline-block;
margin: 10px 235px;
padding: 0px 0px 60px 0px;
font-size: 55px;
border: 3px solid #fff704;
font-weight: bolder;
color: white;
}

.close_res {
position: absolute;
top: 435px;
left: 258px;
color: white;
CURSOR: POINTER;
font-size: 19px;
font-weight: bold;
display:none;
}

.close {
position: absolute;
width: 30px;
height: 30px;
border-radius: 100%;
background:orange;
top: 0px;
left: 400px;
color:white;
text-align: center;
padding: 5px 5px;
/* margin: 5px; */
z-index: 5;
display: none;
}

.Image {
width: 100%;
height: 450px;
}



#contactform {
position: relative;
/* background: cornflowerblue; */
width: 542px;
height: 1052px;
margin: 391px auto 106px 10px;
margin-bottom: 20px;
padding: 99px 53px 78px 87px;
border-radius: 50px;
font-size: 27px;
}

.contactN {
font-size: 25px;
margin-left: 25px;
margin-bottom: 1190px;
}

.Banner {
/* position: absolute; */
/* margin: 10px 79px 34px 112px; */
/* margin-bottom: 126px; */
/* bottom: 38px; */
font-size: 29px;
left: -1px;
color: white;
/* background: #799e9e; */
text-align: center;
/* width: 150%; */
display: inline-block;
height: 0px;
padding: 50px 1px 80px 10px;
border-radius: 49px;
color: black;
}


.CSE {
width: 250px;
top: 35px;
right: 0px;
position: absolute;
}

.E-MAIL {
font-size: 24px;
margin-bottom: -10px;
width: 350px;
}

.sharebutton {
top: 90px;
position: absolute;
left: 80px;
}

body {
font-size: 62.5%;
font-family: arial, sans-serif;
}

#nttLogo{
height: 100px;
width: 100px;
}

#websiteTitle{
font-size: 10em;
vertical-align: middle;
font-family: 'Pacifico', cursive;
padding-left: 15px;
color: #191970;
}

#websiteSlogan{
font-size: 5.4em;
}
/* Carousel Styling */
.sliderimg {
position: relative;
margin-left: 0px;
width: 100%;
margin-top: 63px;
}

.carousel-caption {
background: rgba(0,0,0,.6);
position: absolute;right: 0%;
left: 4%;
width: 90%;
bottom: 14px;top: 342px;
height: 96px;
z-index: 5;
padding-top: 20px;
/* padding-bottom: 20px; */
color: #fff;
text-align: center;
text-shadow: 0 1px 2px rgba(0, 0, 0, .6);}

.slide1{
background-image:url("../img/karnak.jpg");
height: 500px;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}

.slide2{
background-image:url("../img/luxor (3).jpg");
height: 500px;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}

.slide3{
background-image:url("../img/original-2140316973675971750.jpg");
height: 500px;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}

.carousel-caption h1{
font-size: 5.4em;
font-family: 'Pacifico', cursive;
padding-bottom: .4em;
}

.carousel-caption p{
font-size: 2em;
}

.contacticon {
width: 200px;
left: 550px;
position: absolute;
margin-left: -20px;
margin-top: -40px;
font-size: 15px;
font-size: 15px;
font-weight: bold;
}

.whatsapp {
width: 380px;
font-size: 24.55px;
}

.socialmedia {
position: fixed;
width: 50px;
height: 220px;
background:#66cdcc;
webkit-background: linear-gradient(135deg,#376f9d 0,#66cdcc 100%);
border-radius: 5px 5px;
box-shadow: inset 1px 0px 20px 3px;
top: 150px;
right: 0px; 
}
.socialposition {
    /* position: absolute; */
    right: 50%;
    margin-top: unset;
    margin-left: 0%;
    width: 70%;
}
.soc_icon {
    width: 40px;
    height: 40px;
}

.icon {
    
    display: contents;
}

.soicon {
position: absolute;
width: 35px;
/* float: left; */
}
.socicon {
width: 35px;   

}
.einfo{

padding-bottom:30px;

}

.email{

margin-left: 44px;


}


.mobile{

margin-left: 44px;


}

.Address{

margin-left: 44px;

}



h1{
text-shadow: -1px 0px 6px #ff8c0052;
}

.FRAME {
    position: static;
    background: #ffffff;
    width: 100%;
    height: 311px;
    margin-top: 1101px;
    margin-left: 0px;
    padding-left: -2px;
    float: unset;
}


.FRAME:hover {
box-shadow: 5px 5px 20px 2px;
/* border: 5px solid #000; */
}

.img1 {
    position: relative;
    width: 100%;
    height: 246px;
    padding-top: 9px;
    margin: -1077px -78px 1208px 19%;
    float: unset;
}


.member_img {
position: relative;
width: 139px;
height: 147px;
float: left;
TOP: 32PX;
left: 0px;
text-Align: right;
background-position: center;
background-size: cover;
border-radius: 100%;
}


.title {
    POSITION: absolute;
    top: 146px;
    BOTTOM: 0px;
    width: 3%;
    HEIGHT: 238PX;
    PADDING: 115PX 10% 115px 0%;
    color: red;
    FONT-SIZE: 310%;
    font-weight: bold;
    text-align-last: center;
    display: block;
}

.title a{

color:red;


}

.v_title {
POSITION: absolute;
top: 146px;
BOTTOM: 0px;
width: 361px;
HEIGHT: 238PX;
PADDING: 115PX 10px 115px 20px;
color: red;
FONT-SIZE: 33px;
font-weight: bold;
text-align-last: center;
display: block;
}



.categories {
    background: unset;
    width: 100%;
    margin-left: -1%;
    padding: 10%;
    margin-bottom: 85px;
    font-size: 10px;
    float: left;
}

.hidden-categories {
margin-left: 92px;
}


.v_categories {
width: 50%;
margin-left: 107px;
margin-bottom: -36px;
font-size: 10px;
float: left;
}


.Vido1 {
position: relative;
width: 358px;
height: 832px;
padding-top: 11px;
margin: -986px 85px 1196px 5%;
/* float: left; */
}


.V_FRAME {
position: static;
background: #ffffff;
width: 409px;
height: 426px;
margin-top: 1101px;
margin-left: -12px;
padding-left: -2px;
float: unset;
}



.windows {
background: #ffffff;
position: absolute;
display:none;
z-index: 5;
width: 150%;
height: 365px;
top: 1255px;
left: 9px;
border: 2px solid #000;
}

.w_close {
position: absolute;
width: 200px;
height: 200px;
z-index: 5;
font-size: 25px;
top: 1221px;
left: 91px;
display: none;
}

.black_W {
position: absolute;
width: 150%;
height: 3151px;
background: #c1c1c17a;
margin: 0px 0px;
z-index: 2;
display: none;
}


.front {
    width: 50%;
    margin-left: 3%;
    height: 246px;
}


.title a:hover{

color:white;


}

.logo {
    position: static;
    width: 170px;
    height: 111px;
    position: static;
    margin-top: -88px;
    margin-left: 13%;
    float: left;
    z-index: 3;
    background: unset;
}


.film { 
width: 500px;
margin: 0px 190px;
float: left;
}

.film2 {
width: 150%;
margin: 0px 190px;
font-size: 23.5px;
font-weight: bold;
text-align: justify;
}

.play {
width: 390px;
margin: 0px 20px;
}

.video {
width: 100%;
height: 370px;
margin-left: 50px;
/* background-color: #03f; */
margin-top: 500px;
/* font-size: 10000px; */
/* margin-left: 20px; */
/* box-shadow: 5px -4px 20px 0px; */
}
.info {
padding-top: 20px;
/*position: absolute;*/
margin-top: 31px;
margin-left: 0px;
font-size:29px;
color: white;
}


.footer {
/* position: absolute; */
background: <?php echo $column['ulcolor']?>;
width: 100%;
padding-left: 29px;
height: fit-content;
margin-top: unset;
/* left: 0; */
margin-left: 0px;
font-size: 13px;
float: left;
}


.Link_M {
    padding-top: 20px;
    list-style: none;
    font-size: 31px;
    border-bottom: 2px solid #fff;
    width: 200px;
}


.menu_v {
/* position: absolute; */
margin-left: 0px;
margin-top: 4px;
padding-bottom: 20px;
padding-top: 21px;
margin-bottom:0px;
left: unset;
top: 50px;
height: 109px;
COLOR: white;
background: <?php echo $column['ulcolor']?>;
/* float: left; */
}

#menu {
/*position: absolute;*/
left: 2%;
top: 290px;
COLOR: white;
font-size: 29px;
/* float: left; */
}


#menu a{
color:white;
}


<?PHP
}
?>


.copyright {
    margin: 174px 5% 1% 1%;
    padding: 0px;
    width: 182px;
    color: white;
    font-size: 24px;
}

.datatime{
width:350px;
font-size:20px;
height: 50px;	
margin: 5px;
color:#567273;		
}

.headline {
    margin: 125px 35% 463px 4%;
    width: 100%;
    /* height: 250px; */
    font-size: 3px;
    float: unset;
    float: unset;
    padding-left: 54px;
}


h3, .h3 {
font-size: 32px;
}
/*page 2*/
.ABOUTUS {
margin: 40px;
font-size: 23px;
font-weight: bold;
text-align: center;
width: 500px;
}
.ABOUT {
text-align: left;
margin-left: -30px;
color: #03F;
}
.Ourservice {
font-size: 23px;
font-weight: bold;
color: #03F;
}
.ourservicetext{
font-size:23px;
font-weight:bold;
text-align:justify;
}
.findus{
font-size:23px;
color:#03F;
font-weight:bold;	

}
.infocontact{
text-align:justify;
font-size:23px;
font-weight:bold;
}
.distantion{
font-size:23px;
font-weight:bold;
text-align:justify;
}
/*excrestion*/
#photo1 {
/* position: absolute; */
width: 50px;
margin-left: 0px;
margin-top: 11px;
height: 50px;
/* padding-left: 0px; */
/* padding-top: 160px; */
}
/*page3 excersion*/

#photo2 {
/* position: absolute; */
width: 50px;
margin-left: -50px;
margin-top: 5px;
height: 50px;
}

#photo3 {
position: absolute;
width: 50px;
height: 50px;
margin-left: 70px;
margin-top: 10px;
}
.describe {
padding-left: 2px;
width: 97%;
padding-left: 3px;
margin-top: 1px;
font-size: 36px;
margin-left: 0px;
font-size: 15px;
text-align: justify;
}

.title3 {
/* position: absolute; */
font-size: 45px;
height: 1950px;
width: 790px;
/* width: 999px; */
margin: 399px 10px;
text-align: center;
background:#9CF;
/* box-shadow: inset 0px 0px 0px 0px; */
color: #000;
/* border-radius: 10px 10px; */
/* padding: 30px; */
/* left: 50px; */
margin-left: 0 auto;
/* margin: 0 auto; */
/* margin-left: -150px; */
margin-left: 100px;
}


.DESCTITLE {
text-align: center;
font-size: 35px;
color: #000;
text-decoration: underline;
}

.slider {
box-shadow: #000;
background-size: cover;
margin-left: 0px;
margin-top: 5px;
margin-bottom: 192px;
padding: 3px 0px;
width: 100%;
height: 350px;
}


.carousel-control .glyphicon-chevron-right {
right: 102%;
background: #000;
width: 34px;
}



.carousel-control .glyphicon-chevron-left {
left: 29%;
width: 39px;
background: #000;
height: 38px;
}





marquee {
margin-top: -21px;
width: 381px;
margin-left: 157px;
}

.news {
width: 150px;
margin-top: -1px;
float: left;
/* padding-left: 87px; */
margin-left: 4px;
background: aliceblue;
}


.marque {
margin-left: 0px;
width: 100%;
font-size: 10px;
margin-bottom:20px;
POSITION: static;
FONT-SIZE: 2;
}



.slide4{
background-image:url("../img/sofitel-karnak-luxor-hotel-luxor-egypt-holidays-2018-0.jpg");
height: 500px;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}
.slide5{
background-image:url("../img/2.jpg");
height: 500px;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}
.slide6{
background-image:url("../img/building1.jpg");
height: 500px;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}
.slide7{
background-image:url("../img/GettyImages-154260931-596476875f9b583f1813d736.jpg");
height: 500px;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}
#description {
font-size: 35px;
display: block;
}
#inclusion{
font-size: 35px;	
display:none;		
}
#exclusion{
font-size: 35px;
display:none;
}
#price{
display:none;
font-size:35px;
text-align:center;
}
.tableprice{
width:93%;
}
.nav-tab{
background:#8fc7dc;
width:100%;
}
#btt1{
background: none;
outline: none;
border: none;
font-size:32PX;
}
#btt2{
background: none;
outline: none;
border: none;
font-size:32PX;
}
#btt3{
background: none;
outline: none;
border: none;
font-size:32PX;
}
#btt4{
background: none;
outline: none;
border: none;
font-size:32PX;
}
hr{
margin-left:0px;
width:150px;
}
.inclusionline{
margin-left:0px;
width:60px;
}
/*photogallery*/
.img {
top: 12px;
position: relative;
width: 151px;
height: 120px;
float: left;
}



.Img:hover {
transform: scale(1.1,1.1);
}
.footerp2 {
position: relative;
margin-top: 11100px;
background: #74adda;
width: 400px;
height: 90px;
/* left: 0; */
/* margin-top: 1%; */
left: 0px;
width: 890px;
COLOR: #fff;
}
.photogallery {
width: 250px;
font-size: 30px;
margin: 50px 280px;
}
/*luxor excrustion*/
.dev1 {
width: 690px;
height: 35px;
font-size: 39px;
text-align: center;
margin-left: 140px;
text-shadow: -1px 0px 6px #6ec7e8;
/* padding: 50px; */
}


.Dcontant {
width: 100%;
height: 160px;
margin-top: 30px;
padding-top: 15px;
padding-left: 10px;
}

.fultopic {
width: 97%;
height: fit-content;
margin-bottom: 40px;
margin-left: 10px;
background:#cccccc0a;
padding-bottom: 20px;
padding-top: 58px;
margin-top: unset;
float: left;
}

.content {
margin-bottom: 480px;
margin-top: 47px;
margin-left: 10px;
/* background: #64646b; */
width: 100%;
height: 1500px;
/* margin: 5500px; */
font-size: 21px;
margin-left: 0px;
float:left;
}


.img {
top: 23px;
position: relative;
width: 151px;
height: 120px;
float: left;
text-Align:unset;
}

.text {
    background: #f5f5f5;
    width: 52%;
    height: 207px;
    /* padding-top: 650px; */
    margin-left: 155px;
    margin-top: 40px;
    margin-bottom: 192px;
    font-size: 16px;
    text-Align: unset;
    /*position: relative;*/
}

  optgroup, select, textarea {
    width: 70%;
    margin: 5;
    font: inherit;
    color: inherit;
}

.title2 {
POSITION: absolute;
BOTTOM: 0px;
font-size: 15px;
width: 200px;
HEIGHT: 20PX;
PADDING: 15PX;
color: red;
FONT-SIZE: 15PX;
text-align-last: center;
background: rgba(0,0,0,0.5);
}
.seemore {
width: 290px;
/* padding: 100px; */
margin-left: 620px;
margin-top: 40px;
font-size: 28px;
}
.t1 {
margin-top: -10px;
color:#FFF;
}
/*Nile Cruise page*/
.content2 {
WIDTH: 100%;
HEIGHT: 3599PX;
}
.movetext {
margin-top: 980px;
}
.Des {
width: 900px;
font-size: 29px;
height: 18px;
margin-top: 30px;
font-family: serif;
font-weight: bold;
color: #292929;
}
.cover {
/*background: antiquewhite;*/
margin-top: -77px;
margin-bottom: -1px;
width: 100%;
height: 533px;
float: left;
/* background-image: url(../img/ms_sunrise_semiramis_nile_cruises_egypt.jpg); */
background-repeat: no-repeat;
/* background-size: cover; */
background-position: center;
padding-top: 50px;
background-position: 0px -180px;
/* backface-visibility: hidden; */
background-blend-mode: saturation;
}


.dev2 {
margin-left: 110%;
width: 100%;
height: 80px;
font-size: 35px;
text-align: left;
text-shadow: -1px 0px 6px #6ec7e8;
/* padding-left: 0px; */
}
#br {
width: 100%;
}
.texttitle{
font-size:25px;
}
.text2 {
position: relative;
background: #f5f5f5;
width: 554px;
height: 400px;
/* padding-top: 650px; */
margin-left: 10px;
margin-top: 2px;
font-size: 20px;
border: 1px solid #000;
font-size: 29px;
font-weight: bold;
box-shadow: 0px 7px 20px #000;
padding: 10px;
}
#seemore {
position: absolute;
/* padding: 100px; */
left: 420px;
/* padding-top: 180px; */
top: 359px;
font-size: 25px;
}
.category {
position: relative;
width: 850px;
height: 40px;
left: 10%;
top: 80px;
float: left;
}



#navbar{
list-style:none;
font-size:32px;
}
#navbar>li{
background: #6ea1fd;
font-size:30px;
list-style:none;
}
ul#nav-category {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category1 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category2 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category3 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category4 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category5 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category6 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category7 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category8 {
background:  #c0e5f3bd;
display:none;
}
ul#nav-category1:target {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category2:target {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category3:target {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category4:target {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category5:target {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category6:target {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category7:target {
background:  #c0e5f3bd;
display:block;
}
ul#nav-category8:target {
background:  #c0e5f3bd;
display:block;
}



.category2 {
position: relative;
width: 898px;
height: 250px;
left: 5px;
top: 390px;
}
.content3 {
margin-top: 290px;
WIDTH: 100%;
HEIGHT: 1990PX;
/* background: #0c0; */
}
.dev3 {
/* MARGIN-TOP: 80PX; */
MARGIN-TOP: 290PX;
margin-left: 10px;
width: 150%;
height: 40px;
font-size: 29px;
text-align: left;
text-shadow: -1px 0px 6px #6ec7e8;
Border-bottom: 1px solid #000;
/* padding-left: 0px; */
}
#Image {
background: #fff;
width: 33.2%;
height: 150px;
margin: 50px 0px;
padding: 0px 3.99px;
float: left;
/* padding: 20px; */
/* float: left; */
}
.clear {
clear: both;
}
.table1 {
margin: 20px 190px;
float: left;
width: 350p;
}
#Image:hover {
opacity: 0.5;
}
.table2 {
float: left;
margin: 20px 190px;
}
.profilepicture {
margin-top: -30px;
width: 298px;
height: 258px;
margin-left: 196%;
border: 2px solid #000;
}
.Des2 {
position: absolute;
font-size: 21.5px;
width: 640px;
height: 18px;
top: 195px;
/* font-family: serif; */
font-weight: bold;
color: #4a4949;
/* float: left; */
}
.dev4 {
margin-top: 20px;
width: 569px;
height: 30px;
padding-bottom: 40px;
font-size: 22.98px;
padding-left: 10px;
font-weight: bold;
text-align: left;
text-shadow: -1px 0px 6px #6ec7e8;
/* Border-bottom: 1px solid #000; */
/* padding-left: 0px; */
}
.category3 {
position: relative;
width: 850px;
height: 250px;
left: 10%;
top: 390px;
}
.content4 {
margin-top: 300px;
WIDTH: 100%;
HEIGHT: 2100PX;
/* background: #0c0; */
}
.topic {
margin-top: 90px;
background: #f5f5f5;
width: 555px;
font-size: 22.5px;
}
/*long Cruise 12 days*/
.content5 {
margin-top: 950px;
WIDTH: 100%;
HEIGHT: 5500PX;
/* background: #0c0; */
}
/*Nile Dahabiya*/
.content6 {
WIDTH: 100%;
height: 4130px;
margin-top: -650px;
}
/*sandal*/
.category4 {
position: relative;
width: 850px;
height: 40px;
left: 10%;
top: 80px;
}
/*Dahabiya Nile Dream*/
.category5 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}
/*Dalida Dahabiya*/
.category6 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 550px;
}
/*Dahabiya Jasmine*/
.category7 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}
/*Dahabiya Nebyt*/
.category8 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}

.category10 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}
/*Dahabiya El khedewi*/
.category9 {
position: relative;
width: 898px;
height: 150px;
left: 0px;
top: 250px;
}
/*Dahabiya MS DONIA*/
.category11 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}
/*dahabiya Naema*/
.category12 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 650px;
}
/*sandal&felcui type type */
.category13 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}
.category14 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}
.category15 {
position: relative;
width: 898px;
height: 250px;
left: 0px;
top: 350px;
}
/*corsola*/

h2 {
padding: 0;
margin: 0 0 10px 0;
}

#forkme_banner {
display: block;
position: absolute;
top: 0;
right: 10px;
z-index: 10;
padding: 10px 50px 10px 10px;
color: white;
background: url("../img/blacktocat.png") #6A3 no-repeat 95% 50%;
font-weight: 700;
box-shadow: 0 0 10px rgba(0, 0, 0, .5);
border-bottom-left-radius: 2px;
border-bottom-right-radius: 2px;
text-decoration: none;
}

.head {
padding: 30px 0;
width: 960px;
margin: auto;
}

.head h1 {
font-weight: 200;
font-family: Helvetica,Arial,Verdana,sans-serif;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.9);
text-transform: uppercase;
color: #999;
}

.container {
width: 100%;
margin: auto;
}

.actions {
margin-top: 10px;
}

.track {
left: 0px;
/*margin-top: -591px;*/
top: -1076px;
width: 102%;
position: relative;
float: left;
}


.Brands {
width: 200px;
margin-top: unset;
margin-left: 120px;
}


button#demo5-forward {
position: relative;
top: -62px;
left: 330px;
}

button#demo5-backward {
position: relative;
left: 133px;
top: -62px;
}


.scroll-img {
/* border: 1px solid red; */
width: 238px;
height: 99px;
overflow: hidden;
font-size: 0;
}

.scroll-text {
border: 1px solid red;
width: 400px;
height: 4.5em;
overflow: hidden;
}
.scroll-text ul {
width: 800px;
height: 100px;
overflow: hidden;
margin: 0;
}
.scroll-text ul li {
height: 1.5em;
}
.scroll-img ul {
width: 700px;
height: 600px;
margin: 0;
}
.scroll-img ul li {
display: inline-block;
margin: 10px 0 10px 10px;
}
#demo4.scroll-img ul,
#demo5.scroll-img ul {
width: 1500px;
}

#demo6 {
width: 412px;
}
#demo6-queue {
width: 680px;
}
#demo6 p, #demo6-queue p {
width: 124px;
height: 124px;
background-color: lightgray;
font-family: 'Amaranth', sans-serif;
font-size: 82px;
text-align: center;
display: table-cell;
vertical-align:middle;
}

.view-port, .track .inner {
width: 240px;
}

.axis-y .view-port,
.axis-y .track .inner {
width: 240px;
height: 660px;
}


.view-port {
overflow: hidden;
position: relative;
}

.product {
position: relative;

}


.track .inner {
position: absolute;
margin: 20px 75px 20px 39px;
margin-bottom: 30px;
width: fit-content;
padding: 10px 20px 30px 81px;
background: #F1F1F1;
border-radius: 4px;
height: 405px;
}

.track .inner h2 {
font-weight: 200;
font-family: Helvetica,Arial,Verdana,sans-serif;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.9);
text-transform: uppercase;
color: #999;
}

.track .inner h2:hover {
color: #6A3;
}



.track a.prev{
display:none;
position: absolute;
top: 153px;
right: 958px;
margin-top: -32px;
width: 64px;
height: 64px;
background: url("../img/arrows.png");
background-repeat: no-repeat;   
}


.track a.next{
display:none;
position: absolute;
top: 153px;
left: 1007px;
transform: rotate(180deg);
margin-top: -32px;
width: 64px;
height: 64px;
background: url("../img/arrows.png");
background-repeat: no-repeat;   
}





li.prix {
/* position: RELATIVE; */
MARGIN-TOP: 189PX;
WIDTH: 192PX;
Z-INDEX: 3;
list-style:none;  
/* BACKGROUND: white; */
margin-top: 200px;
margin-left: 43px;
float: left;
/* padding: 36px; */
/* padding-left: 250px; */
border: 250px;
font-size: 16px;
color: red;
list-style: none;
}

.track a.prev.disabled,
.track a.next.disabled {
display: none;
}



.track a.prev:hover {
background-position: 0 -66px;
}

.track a.prev:active {
background-position: 0 -132px;
}



.slider-container {
position: relative;
margin: 0;
padding: 0;

height: 166px;
}

.slider-container.big {
height: 288px;
}

.slider-container.huge {
height: 432px;
}

.slider-container .item {
position: absolute;
width: 224px;
height: 150px;
margin-right: 16px;
margin-bottom: 16px;
top: -18px;
list-style: none;
}

.slider-container .item img {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: 2px solid white;
list-style: none;
}




.slider-container.big .item,
.slider-container.big .item .img-area {
height: 288px;
}

.slider-contaiber.huge .item {
margin-bottom: 12px;
}

.slider-container .item p {
padding: 0;
margin: 0;
}

.slider-container .item.cover {
width: 940px;
}

.slider-container .item.cover-2 {
height: 432px;
}


.slider-container .item.cover img {
float: left;
}

.slider-container .item.cover-2 img {
float: none;
}

.slider-container .item.cover .img-area {
float: right;
margin-left: 16px;
}

.slider-container .item.cover-2 .img-area {
float: none;
margin-left: 0;
margin-top: 12px;
}

.slider-container .item.cover-2 .img-area .img-block:first-child {
margin-right: 14px;
}

.slider-container .item.cover .img-block {
height: 128px;
}

.slider-container .item.cover-2 .img-block {
float: left;
}

.img-block {
margin-bottom: 16px;
}

.editorial {
float: right;
width: 200px;

padding-right: 20px;
height: 272px;
background: white;
}

.editorial .title {
font-size: 24px;
margin: 20px 0 0 20px;
}

.editorial .desc {
font-size: 14px;
line-height: 18px;
padding-top: 8px;
margin-left: 20px;
}

.side-a, .side-b {
float: left;
width: 462px;
}

.side-a {
margin-right: 16px;
}

.side-a > img, .side-b > img {
width: 462px;
height: 272px;
}

.bullet-pagination {
width: 100%;
text-align: center;
margin-top: 15px;
}

.paginationc {
position: absolute;
display: inline-block;
padding-left: 0;
margin: 20px 0;
border-radius: 4px;
}


.bullet {
display: inline-block;
background: #999;
padding: 4px;
border-radius: 6px;
margin-right: 5px;
opacity: 0.4;

-webkit-transition: opacity 0.5s linear;
-moz-transition: opacity 0.5s linear;
-ms-transition: opacity 0.5s linear;
-o-transition: opacity 0.5s linear;
transition: opacity 0.5s linear;
}

.bullet.active {
opacity: 1;
}

.bullet:last-child {
margin-right: 0;
}

#example-4 img {
width: 228px;
height: 132px;
}

.example-4 .loading {
width: 100%;
height: 100%;
position: absolute;
top: 0;
left: 0;
background: rgba(255, 255, 255, 0.8);
border-radius: 4px;
text-align: center;
line-height: 140px;
padding: 4px 0;
z-index: 1;
}

.example-4 .loading:before {
content: "loading...";
}

.example-4 .bullet {
cursor: default;
}

.example-1 a.prev,
.example-1 a.next {
margin-top: -69px;
}

.example-2 a.prev,
.example-2 a.next {
margin-top: -58px;
}

.example-3 a.prev,
.example-3 a.next {
margin-top: -53px;
}

.example-4 a.prev,
.example-4 a.next {
margin-top: -68px;
}

/*member cms */

ul#nav {
display:none;
text-decoration:none;
position: absolute;
background:linear-gradient(135deg,#a94442  0,#66cdcc 100%);
margin-left:-50px;		
margin-Top: 60px;
/* float: left; */
width: 299px;
height: 1280px;
z-index:5;
}
li {
padding-top: 60px;
list-style:none;
font-size:15px;

}

li a{
color:#000;
}



li a:hover{
text-decoration:none;
color:#03F;
font-weight:bold;
}

.btt1 {
position: absolute;
Width: 50px;
height: 40px;
box-shadow: 1px 1px 5px 3px rgba(113, 114, 117, 0.62);
font-weight: bold;
font-size: 36px;
padding-bottom: 40px;
}
.btt1 a{
text-decoration:none;
}

.profilepic {
position: absolute;
width: 230px;
height: 212px;
background: #fffefe;
margin: -159px 17px 6px 413px;
z-index: 3;
top: 332px;
border-radius: 100%;
border: 9px solid #60a8e7;
background-image: url(../img/profilepic/60565107_400479780546533_2239188015882698752_n.png);
background-size: cover;
}


.profilepic_1 {
    position: absolute;
    width: 230px;
    height: 212px;
    background: #fffefe;
    margin: 20px 17px 6px 54px;
    z-index: 3;
    top: 332px;
    border-radius: 100%;
    border: 9px solid #60a8e7;
    background-image: url(../img/profilepic/60565107_400479780546533_2239188015882698752_n.png);
    background-size: cover;
}



.profilepicV {
    position: absolute;
    width: 230px;
    height: 212px;
    background: #fffefe;
    margin: 329px 17px 6px 150px;
    z-index: 3;
    top: 332px;
    border-radius: 100%;
    border: 9px solid #60a8e7;
    background-image: url(../img/profilepic/60565107_400479780546533_2239188015882698752_n.png);
    background-size: cover;
}

.cover_prof {
    margin-top: 50px;
    margin-left: 0px;
    margin-bottom: 89px;
    width: 100%;
    height: 435px;
    border: 5px solid #000;
}
.cover_profV {
margin-bottom: 161px;
width: 100%;
height: 435px;
}

img.logo2 {
width: 122px;
height: 101px;
margin-top: -29px;
margin-left: 388px;
}

.ful_info {
margin-top: 162px;
font-size: 16px;
margin-left: 50px;
}

.ful_info_1 {
margin-top: 162px;
font-size: 16px;
margin-left: 50px;
}

img.camera {
margin-top: 133px;
margin-left: 162px;

}

img.camera2 {
    margin-left: 123px;
}
input#save {
    font-size: 20px;
}
#prod_dt {
background: gainsboro;
width: 682px;
height: 825px;
position: absolute;
z-index: 100;
top: 3296px;
left: -2px;
border: 5px solid #6c7f1e;
box-shadow: -14px -20px 350px 100px;
display: none;
}


input.closet1 {
-webkit-appearance: none;
width: 44px;
height: 45px;
margin-left: 641px;
font-size: 30px;
margin-top: -834px;
position: relative;
border-raduis: 100px;
border-raduis: 150px;
border-radius: 500px;
background: #ccc;
font-weight: bolder;
box-sizing: none;
}

.product_sc1 {
margin-top: 12px;
margin-left: 4px;
}

.product_sc2 {
margin-top: 192px;
}

.product_sc3 {
position: absolute;
top: 576px;
left: 224px;
}

.product_sc4 {
position: absolute;
top: 577px;
left: 446px;
}

.product_ver {
margin-left: 340px;
font-size: 28px;
width: 304px;
padding-left: -98px;
margin-top: -219px;
position: absolute;
background: aliceblue;
}

.product_dis {
width: 649px;
border: 1px solid #fff;
/* position: absolute; */
margin-left: 9px;
margin-top: 30px;
padding-bottom: 14px;
padding-left: 50px;
font-size: 31px;
border-radius: 12px;
}


.seller_info {
/* position: absolute; */
margin-top: -175px;
margin-left: 424px;
font-size: 24px;
}

span.pic_sc {
MARGIN-LEFT: 50PX;
FONT-SIZE: 26PX;
}
.product_sc3 {
position: absolute;
top: 576px;
left: 234px;
}
.product_sc4 {
position: absolute;
top: 577px;
left: 454px;
}

.prof_links {
padding-top: 5px;
padding-left: 116px;
font-size: 25px;
margin-left: 208px;
POSITION: absolute;
MARGIN-TOP: -160PX;
BACKGROUND: #b5c7d7;
WIDTH: 83%;
HEIGHT: 43PX;
border-radius: 50p;
box-shadow: inset -1px -1px 20px 2px #fffbfb;
}

.prof_linksv {
    padding-top: 9px;
    padding-left: 36px;
    font-size: 12px;
    font-weight: bolder;
    margin-left: 0px;
    /* POSITION: absolute; */
    MARGIN-TOP: -51PX;
    BACKGROUND: #e5ecf2;
    WIDTH: 99%;
    HEIGHT: 43PX;
    border-radius: 50p;
    box-shadow: inset -1px -1px 20px 2px #fffbfb;
}

div#massanger {
    background: aliceblue;
    width: 700px;
    left: 0px;
    position: absolute;
    top: 447px;
}


.button_form {
width: 250px;
font-size: 18px;
margin-left: 26px;
margin-top: 5px;
}
div#Delete_Offer {
left: 221px;
position: absolute;
top: px;
padding-top: 9px;
}

.loadingsc {
    position: absolute;
    background: #ffffff;
    width: 100%;
    height: 3699PX;
    z-index: 50;
    top: 268px;
    display: block;
    left: 0%;
}


.imgload {
background: #f5f5f5;
border-radius: 100%;
top: 10px;
left: 4px;
position: relative;
width: 60px;
height: 57px;
float: left;
}
.textload {
background: #f5f5f5;
width: 80%;
height: 76px;
/* padding-top: 650px; */
margin-left: 81px;
margin-top: 5px;
font-size: 15px;
/* justify-content: center; */
text-align: center;
padding: 60px;
}


.logo_siginin {
position: absolute;
margin-left: 188px;
margin-top: -74px;
width: 153px;
border-radius: 104px;
background: white;
}

.contentload{
opacity:0;
animation:load 5s infinite ease-in-out;
}
@keyframes load{	
0%{
opacity:0;
}
100%{
opacity:100;
}
}



<?php
include("con_db2.php");

date_default_timezone_set("Africa/Cairo");

$Date= date("Y-m-d");

$time=date("h:i");

#$selectx="select *  from   member_pr  WHERE  Data ='$Date'  ";

$selectx="select *  from   member_pr   ORDER BY  `ID` ASC     ";

$boxqueryx=mysqli_query($connect,$selectx);

while($column=mysqli_fetch_array($boxqueryx)){ 
?>

#btm<?php echo $column['ID']?> {
background:url(png/empty_heart.jpg);
width: 58px;
height: 59px;
background-size: cover;
position: absolute;
z-index: 10;
top: -136px;
left: -1px;
}

#btf<?php echo $column['ID']?> {
background:url(png/love_heart.jpg);
width: 58px;
height: 59px;
background-size: cover;
position: absolute;
z-index: 10;
top: -136px;
left: -1px;
}

#btmx<?php echo $column['ID']?> {
width: 165px;
height: 33px;
background: wheat;
position: static;
left: 290px;
top: 181px;
background: antiquewhite;

}

#btfx<?php echo $column['ID']?> {

width: 165px;
height: 33px;
background: wheat;
position: static;
left: 290px;
top: 181px;
font-size: 15px;
background: antiquewhite;

}


<?php
}
?>

.Ads-title {
font-size: 28px;
padding-left: 0px;
}

.Time_zone {
margin-left: 20px;
margin-top: 113px;
font-size: 31px;
}

.mssg_Bob {
BACKGROUND: #03A9F4;
WIDTH: 542PX;
HEIGHT: 66PX;
MARGIN-LEFT: 23%;
MARGIN-TOP: -63PX;
TEXT-ALIGN: center;
FONT-SIZE: 20PX;
}

.cre_market {
margin-top: -63px;
position: absolute;
width: 272px;
font-size: 19px;
margin-left: 32px;
}

.market_bt {
width: 85px;
height: 37px;
background: #b90e0e;
color: white;
border-radius: 100px;
margin-left: 0px;
margin-top: -4px;
}

.mark_form {
background: #7955488a;
padding-top: 56px;
padding-left: 59px;
position: absolute;
margin-top: 415px;
margin-left: 118px;
width: 339px;
height: 360px;
z-index:8;
font-size: 20px;
display:none;
}


input.sub_bt {
margin-top: 50px;
}

input.close_bt {
border-radius: 100px;
width: 50px;
height: 50px;
margin-left: 251px;
margin-top: -66px;
position: absolute;
border-raduis: 100px;
}

.pur_Basket {
margin-left: 84px;
margin-top: 1px;
}


button.card_bt {
margin-top: -55px;
margin-left: -69px;
background-color: unset;
color: antiquewhite;
border: none;
}

#count_fav {
width: 16px;
height: 20px;
margin-top: -41px;
left: -36px;
position: relative;
border-radius: 100px;
BACKGROUND: #9E9E9E;
FONT-SIZE: 20PX;
border-raduis: 100px;
}

#prod_dtt {
width: 16px;
height: 20px;
margin-top: -41px;
left: -36px;
position: relative;
border-radius: 100px;
BACKGROUND: #9E9E9E;
FONT-SIZE: 20PX;
border-raduis: 100px;
display: none;
}


.Imgfo {
width: 176px;
height: 166px;
margin-left: -26px;
}

#seemore_bt {
position: absolute;
margin-top: 65px;
left: 125px;
width: 100px;
font-size: 27px;
/*left: 235px;*/
background: #07b0ff;
color: wheat;
width: 119px;
height: 328px;
border-radius: 100px;
height: 50px;
box-shadow: 1px 2px 0px 4px;
box-shadow: 100px;
border: ;
}

#up_arrow {
/* position: absolute; */
/* top: 350px; */
margin-left: 622px;
margin-bottom: 13px;
border-radius: 100px;
background: chocolate;
width: 39px;
height: 45px;
/* top: 200px; */
float: left;
padding-top: 0px;
padding-left: -15px;
}

.logo_fo {
position: relative;
right: 375px;
top: -39px;
float: left;
}


.nav_f {
font-size: 19px;
color: white;
}


#pt_seen {
background: url(icon/seen_icon%20copy.png);
background-position: center;
background-size: cover;
top: 216px;
left: 264px;
position: absolute;
width: 28px;
height: 25px;
border: none;
z-index: 20;
display: block;
}


#pt_seen1{
background: url(icon/pass_icon%20copy2.png);
background-position: center;
background-size: cover;
top: 216px;
left: 264px;
position: absolute;
width: 28px;
height: 25px;
border: none;
z-index: 10;
display:none;	
}


#total_info{
display:none;
}

#total_info:target{
display:block;
}

#evaluate{
display:none;
}

#evaluate:target{
margin-right: 69px;
display:block;
}

#product_cat{
display:block;
}




#Buyform{
display:none;
}

#Buyform:target{
display:block;
}


#MaiinM{

display:none;

}


#MaiinM:target{

display:block;

}




#client_MASSAGE {
margin-left: -185px;
display: none;
width: 50;
text-align: center;
display: none;
margin-top: -278px;
background-color:#ffc107;
}

#Mssg {
color: blue;
padding-top: 39px;
padding-left: 121px;
margin-left: 70px;
margin-top: 7px;
position: absolute;
width: 474px;
height: 102px;
font-size: 20px;
background: aliceblue;
display: none;
}


.close_but {
position: absolute;
top: -7px;
left: 457px;
}

#total_info{
display:none;
}

#total_info:target{
display:block;
}

#evaluate{
display:none;
}

#evaluate:target{
margin-right: 69px;
display:block;
}

#product_cat{
display:block;
}

#product_cat:target{
display:block;
}
Buyform

#Buyform{
display:none;
}

#Buyform:target{
display:block;
}


#MaiinM{

display:none;

}


#MaiinM:target{

display:block;

}


#orders{

display:none;


}


#orders:target{

display:block;


}


#product_div{
display:block;
}

#product_div:target{
display:block;
}

#subscrib{

display:none;

}

#unsubscrib{

display:none;

}


#comp{

display:none;

}


#HOW{

display:none;

}

img.Micon {
    margin-left: 0PX;
    margin-right: 0px;
    padding-left: 20p;
    padding-top: 14px;
    margin-top: -13px;
    position: static;
    width: 24px;
    height: 36px;
    float: left;
}

}
