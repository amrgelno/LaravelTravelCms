<?php
header('Content-type:text/css; charset:utf-8');
?>
<?php
include("con_db2.php");
$selector="select * from  view ";
$exe=mysqli_query($connect,$selector);
while($column=mysqli_fetch_assoc($exe)){
?>

/*for large screen*/
@media (min-width:1200px)
{
body {
background-image: url(http://wmh.github.io/circular-slides-generator/static/img/noise.png);
}



*{
    font-family: 'Roboto', sans-serif;
  
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
    /*font-size:10px;*/
}

/*home page*/
.preload {
position: fixed;
width: 50px;
height: 50px;
border: 5px solid rgba(0, 0, 0, 0);
border-top-color: <?php echo $column['ulcolor']?>;
border-radius: 100%;
margin-top: 25%;
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
position: absolute;
background:white;
width: 100%;
height: 576%;
z-index: 50;
margin: -5px -36px 0px 2px;
			  }
.menu {
display:none;
}

div#demo5 {
width: 1025px;
height: 110px;
}

.Brands {
/*position: relative;*/
margin-left: 21px;
width: 942px;
margin-bottom: 31px;
/*margin-top: unset;*/
/*background: aqua;*/ 
}

.username {
    margin-top: 42px;
    margin-left: 46px;
    position: absolute;
    width: 10px;
    font-size: 21px;
}


button#demo5-backward {
left: 19px;
top: -97px;
position: relative;
font-weight: bolder;
display:block;
}

button#demo5-forward {
position: relative;
left: 93%;
top: -135px;
font-weight: bolder;
display: block;
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
.scroll-img {
/*border: 1px solid red;*/
width: 680px;
height: 142px;
overflow: hidden;
font-size: 0;
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


.contains {
position: sticky;
/* position: absolute; */
margin-top: 20px;
margin-bottom: 4539px;
margin-left:5px;
/* margin-bottom: 500px; */
/* position: absolute; */
background: unset;
width: 105%;
height: inherit;
z-index: 0;
float:left;
margin-bottom: 282px;
}


input.searcher {
position: absolute;
margin-top: 9px;
margin-left: -14px;
width: 178px;
height: 19px;
}

.search {
position: static;
margin: 5px 454px 0px 301px;
width: 748px;
height: 315px;
}

.logo {
width: 125px;
height: 67px;
position: absolute;
top: 22px;
left: 13px;
z-index: 15;
background:unset;
}

.header {
/* margin-top: 23px; */
background: #F1F1F1;
width: 100%;
margin-top: 7px;
margin-bottom: -46px;
padding-top: 13px;
height: 89px;
padding: 50;
/* position: absolute; */
}

.mobtext {
    position: absolute;
    font-size: 19px;
    color: black;
    margin-top: -28px;
    margin-left: 37px;
    z-index: 5;
}


.mob {
    margin-top: -12px;
}


.menu_v {
/* position: absolute; */
margin-left: -1px;
margin-top: 53px;
padding-bottom: 0px;
padding-top: 10px;
left: unset;
top: unset;
COLOR: white;
background:<?php echo $column['ulcolor']?>;
/* float: left; */
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


li.Link_M {
width: 300px;
LIST-STYLE: NONE;
PADDING: 5PX;
BORDER-BOTTOM: 1px solid #f5f5f5;
}


ul.nav {
position: static;
display: block;
width: 90%;
Height:35px;
list-style: none;
background: <?php echo $column['ulcolor']?>;
font-size:<?php echo $column['Fontsize']?>;
font-style:<?php echo $column['Fontstyle']?>;
font-family:<?php echo $column['FontType']?>;
margin-left:112px;
margin-top: 0px;
padding-left: 8px;
top: 10px;
left: -1px;
font-weight: Bold;
}




.nav>li {
    width: 200px;
    float: left;
    padding: 6px 26px 22px 68px;
    display: inline-block;
    font-size: 16px;
}
   
   
		
.nav>li:hover {

background: unset;
padding: 15px;
opacity: 1;
height: 45px;

}
   .nav > li > a {
   text-decoration:none;
   background:none;
   color:<?php echo $column['Fontcolor']?>;
   }       
   

li.Dropmenu{
position:relative;
	   }


ul#submenu {
position: absolute;
width: 16px;
height: 102px;
display:none;
margin: unset;
padding: unset;
z-index:6;
font-size:16px;
color: white;
}

ul#submenu:before {
width: 1px;
content: "";
border-left: 5px solid rgba(0, 0, 0, 0.05);
border-right: 5px solid rgba(0, 0, 0, 0);
border-bottom: 6px solid #FFF;
position: absolute;
top: -6px;
}

ul#submenu a{
   text-decoration:none;
   background:none;
   color:<?php echo $column['Fontcolor']?>;
   }    

li.Dropmenu:hover ul#submenu{
background:none;	
display:block;
}

li.sub1 {
width: 243px;
height: 22px;
font-size: medium;
background:<?php echo $column['sub1color']?>;
padding: 0px 16px 16px;
height: 30px;
  }
 
  
  li.sub1:hover {
width: 246px;
height: 22px;
font-size: medium;
background:<?php echo $column['ulcolor']?>;
padding: 0px 16px 16px;
height: 30px;
  }

ul#TREMENU {
position:absolute;
width: 41px;
height: 90px;
display:none;
margin: 0px 0px 2px -116px;
padding: unset;
z-index:5;
font-size:16px;
background:<?php echo $column['sub2color']?>;
display:none;
}

ul#TREMENU a{
color:<?php echo $column['Fontcolor']?>;
}

li.sub1:hover ul#TREMENU {
background:none;
	display:block;
}

.sub2 {
position: relative;
width: 150px;
 height: 30px;
font-size: 20px;  
background:<?php echo $column['sub2color']?>;
z-index:5;
padding: 0px 16px 16px 0px;

   }
   
   .sub2 {
position: relative;
width: 150px;
height: 30px;
font-size: 20px;
margin: 0px 143px 0px;
ackground:<?php echo $column['sub2color']?>;
z-index: 5;
padding: 0px 16px 16px 20px;
}

input.btmenu {
margin: 10px 100px;
display:none;
}
.sharebutton {
position: absolute;
width: 250px;
top: 60px;
left: 200px;
}

.socicon {
width: 35px;   

}
.soicon {
margin-top:-7px;
    position: absolute;
    width: 35px;
    /* float: left; */
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


input.searcher {
width: 383px;
height: 26px;
border-radius: 100px;
font-size: 19px;
margin-left: 263px;
margin-top: -9px;
}


input.searchdis {
position: sticky;
width: 150;
height: 23px;
margin-left: 656px;
margin-top: -15px;
border-radius: 100px;
font-size: 20px;
}





button.searchbt {
    font-size: 10px;
    margin-left: 837px;
    width: 37px;
    height: 24px;
    background: aliceblue;
    border: 2px solid #000;
    background-image: url(bgdesert.jpg);
    margin-top: -20px;
    border-radius: 100px;
    font-weight: bolder;
}


.calclu {
position: absolute;
margin-top: -143px;
margin-left: 519px;
background: none;
color: white;
font-size: 25px;
border-radius: 50px;
border-style: dashed;
border-style: height;
/* border: none; */
border-raduis: 100px;
border-raduis: 50px;
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


.massage {
width: 747px;
height: 194px;
text-align: center;
margin: 485px 179px 11px 343px;
padding: 82px 20px 30px 0px;
font-size: 30px;
color: #FFC107;
border: 2px solid #000;
background: #607D8B;
}



.round {
width: 100px;
height: 100px;
/* position: absolute; */
border: 3px solid #ffc107;
border-radius: 50px;
margin: -32px 20px 30px 36px;
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



/* contact.php  style */

.massage {
width: 609px;
height: 194px;
text-align: center;
margin: 485px 179px 11px 343px;
padding: 82px 20px 30px 35px;
font-size: 30px;
color: #FFC107;
border: 2px solid #000;
background: #607D8B;
}
.round {
width: 100px;
height: 100px;
position: absolute;
border: 3px solid #ffc107;
border-radius: 50px;
margin: -32px 20px 30px -6px;
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

.headline {
margin: 63px 315px 14px 497px;
width: 500px;
z-index: 1;
}

.Image {
width: 100%;
height: 419px;
}
.carousel-caption h1{
font-size: 5.4em;
font-family: 'Pacifico', cursive;
padding-bottom: .4em;
}
.carousel-caption p{
font-size: 2em;
}

.carousel-caption {
position: absolute;
right: 15%;
bottom: 20px;
left: 15%;
z-index: 10;
padding-top: 20px;
padding-bottom: 20px;
color: #fff;
text-align: center;
text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}

.CSE {
width: 400px;
top: 5px;
left: 66%;
color: #000;
position: absolute;
}

.contactN {
position: absolute;
left: 468px;
top: 1003px;
font-size: 24px;
}

.contacticon {
position: absolute;
width: 300px;
left: 68%;
margin-top: -20px;
}
.whatsapp {
margin-top: 35px;
font-size: 15px;
}
.E-MAIL {
width: 190px;
margin: -20px 210px;
font-size: 15px;
}
.pen {
margin-left: 30px;
margin-top: 10px;
font-size: 12px;
}
.link{
	color:red;
}

.luxorTour {
box-shadow: 1px 2px #000;
background: #e23c3c;
border: 1px dashed #000;
font-size: 20px;
/* border-bottom: #000; */
width: 250px;
padding: 0px 32px;
border-bottom: 1px thick #000;
}

.otherExcrustion {
box-shadow: 1px 2px #000;
background: #47ce90;
border: 1px dashed #000;
font-size: 20px;
/* border-bottom: #000; */
width: 250px;
padding: 0px 32px;
border-bottom: 1px thick #000;
}

.RedseaTour {
box-shadow: 1px 2px #000;
background: #b8d4ff;
border: 1px dashed #000;
font-size: 20px;
/* border-bottom: #000; */
width: 250px;
padding: 0px 32px;
border-bottom: 1px thick #000;
}
 .socialposition {
    position: static;
    margin-left: 46%;
    margin-top: 42px;
    padding: 0px;
    width: 308px;
    color: #567273;
    font-size: 20px;
}

.soc_icon {
    width: 40px;
    height: 40px;
}

.icon {
    width: 0px;
    /* float: initial; */
    display: contents;
}

h1{
text-shadow: -1px 0px 6px #ff8c0052;

}




.img1 {
position: relative;
width: 100%;
height: 269px;
float: left;
padding-top: 51px;
TOP: -36PX;
left: -9px;
}

.member_img {
position: relative;
width: 139px;
height: 147px;
float: left;
TOP: 32PX;
left: 59px;
text-Align: right;
background-position: center;
background-size: cover;
border-radius: 100%;
}

.FRAME {
background: #ffffff;
/* width: 20px; */
/* height: 4px; */
margin-top: 50px;
margin-left: 93px;
padding-left: 28px;
float: left;
}

.FRAME:hover {
box-shadow: 5px 5px 20px 2px;
/* border: 5px solid #000; */
}

.categories {
margin-bottom: 147px;
/* padding-bottom: 525px; */
float: left;
}


.Vido1 {
position: relative;
width: 100%;
height: 350px;
float: left;
padding-top: 51px;
TOP: -36PX;
left: -9px;
}




.V_FRAME {
background: #ffffff;
width: 252px;
height: 345px;
margin-top: 50px;
margin-left: 93px;
padding-left: 28px;
float: left;
}

.v_title {
position: absolute;
font-size: 27PX;
top: 181px;
width: 226px;
height: 202px;
PADDING: 82PX 10PX;
color: red;
text-align-last: center;
background: none;
display: block;
}



.v_categories {
margin-bottom: 689px;
/*float:left;*/
}


.windows {
background: #ffffff;
display:none;
position: absolute;
z-index: 5;
top: 1249px;
left: 88px;
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
width: 100%;
height: 3151px;
background: #c1c1c17a;
margin: 0px 0px;
z-index: 2;
display:none;
}

.front{
widthlp: 227px;
height: 200px;		
}

.title {
width: 91%;
/*border-top: 2px solid #FFF;*/
position: absolute;
/* margin-bottom: 9500px; */
/* padding-bottom: 950px; */
padding-left: 20px;
top: 183px;
/* padding-top: 10px; */
font-weight: bold;
}



.title a {
color: red;
}

.title a:hover{
text-transform:uppercase;
	color:blue;
	text-decoration:none;	
}



.video {
width: 100%;
height: 370px;
background-color: #26b4e8;
margin-top: 150px;
box-shadow: 5px -4px 20px 0px;
}
.film{
width:500px;
margin:0px 20px;
float:left;
}
.film2 {
width: 96%;
margin: 10px 10px;
font-size: 25px;
text-align: justify;
color: #FFF;
}
.play {
width: 450px;
margin: 80px 20px;
}


.footer {
/*position: relative;*/
/* position: absolute; */
background:<?php echo $column['ulcolor']?>;
/* width: 990px; */
margin-left: -5px;
/* left: 0; */
margin-top: unset;
left: 0px;
width: 100%;
COLOR:white;
float:left;
height: 438px;
}


#menu {
position: unset;
margin-top: 18px;
COLOR: white;
margin-left: 46%;
font-size: 23px;
/* float: left; */
}

#menu a:hover {

color:red;
text-decoration: none;
}

.contactform {
top: 113px;
left: 15px;
position: absolute;
width: 547px;
height: fit-content;
/* margin: 50px 49px 187px 0px; */
padding: 5px 52px 59px 50px;
border-radius: 50px;
background: #00000054;
z-index: 4;
font-size: 25px;
display: none;
}


.close {
position: absolute;
width: 30px;
height: 30px;
border-radius: 100%;
background:orange;
top: 0px;
left: 498px;
color:white;
text-align: center;
padding: 5px 5px;
/* margin: 5px; */
z-index: 5;
display: none;
}

.calclures {
position:absolute;
top: 151px;
left: 0px;
width: 134px;
height: fit-content;
left: 122px;
z-index: 5;
background-color: #0000004d;
font-size: 25px;
}


.close_res {
position: absolute;
top: 135px;
left: 258px;
color: white;
CURSOR: POINTER;
font-size: 19px;
font-weight: bold;
display:none;
}

#contactform {
 position:unset;
background: unset;
width: 480px;
margin: -603px 49px -32px;
padding: 90px 52px 78px 50px;
border-radius: 50px;
font-size: 25px;
}

.Banner {
position: unset;
/* margin: -90px 79px 34px 112px; */
margin-top: unset;
margin-bottom: 7px;
font-size: 23px;
left: -29px;
color: white;
background: unset;
text-align: center;
width: 100%;
height: 11px;
padding: 50px 1px 70px 10px;
border-radius: 49px;
color: black;
}



#menu a{

color:white;

}

.info {
position: absolute;
margin-top: 41px;
margin-left: 46px;
color: white;
font-size: 15px;
}

<?PHP
}
?>
.footerex1 {
/* position: relative; */
/* position: absolute; */
background: #74adda;
/* width: 990px; */
height: 90px;
/* left: 0; */
margin-top: 50%;
left: 0px;
width: 100%;
COLOR: #fff;
}

.copyright {
    margin: 40px 5% 1% 1%;
    padding: 0px;
    width: 178px;
    color: white;
    font-size: 34px;
}


.datatime{
width:350px;
height: 50px;	
margin: 5px;
color:#567273;
font-size:20px;		
}
.up {
position:relative;
width: 30px;
height: 30px;
border-radius: 100%;
background: #09C;
/* top: 1000px; */
/* margin-right: 0px; */
margin-top: 10%;
/* float: right; */
margin-left: 97%;
}
.uparrow {
position:absolute;
border-bottom: 16px solid #000;
border-left: 10px solid rgba(0, 0, 0, 0);
border-right: 10px solid rgba(0, 0, 0, 0);
border-top: 10px solid rgba(0, 0, 0, 0);
width: 1px;
top: -5px ;
right:5px;
}
.br {
margin-top: 20px;
width: 100%;
}
/*about us*/
.ABOUTUS{
text-align:left;
font-size:25px;
font-weight:bold;

}
.ABOUT{
color:#03F;
}
.Ourservice{
text-align:left;
font-size:25px;
font-weight:bold;
color:#03F;	
}
.ourservicetext{
font-size:25px;
font-weight:bold;
}
.finus{
text-align:left;
font-size:25px;
color:#03F;
font-weight:bold;		
}
.infocontact{
font-size:35px;
font-weight:bold;
}
.distantion{
font-size:25px;
font-weight:bold;
}
/*page3 excersion*/
.contant {
/* position: absolute; */
font-size: 35px;
height: 2000px;
/* margin: 0 20px; */
text-align: center;
background: linear-gradient(135deg,#00000066 0,#e57a7a45 100%);
box-shadow: inset 0px 0px 0px 0px;
color: #FFF;
border-radius: 10px 10px;
padding: 20px;
/* left: 50px; */
margin: 0 auto;
/* margin: 0 auto; */
margin-left: 200px;
width: 1500px;
margin-top: 150px;
z-index:1;
}

#photo1 {
position: absolute;
width: 80px;
left: 550px;
top: 438px;
height: 70px;
/* padding-left: 0px; */
/* padding-top: 160px; */}
#photo1:hover{
	border:1px solid #0F0;
}

#photo2 {
position: absolute;
width: 80px;
left: 665px;
top: 438px;
height: 70px;
}

#photo2:hover{
	border:1px solid #0F0;
}
	
#photo3 {
position: absolute;
width: 80px;
height: 70px;
left: 800px;
top: 438px;
}

#photo3:hover{
	border:1px solid #0F0;
}
.describe {
margin-top: 50px;
font-size: 10px;
width: 850px;
padding-left: 60px;
font-size: 40px;
margin-left:-70px;
width: 960px;
text-align:justify;
}
.DESCTITLE {
margin: 20px;
text-align: center;
font-size: 28px;
color: #000;
text-decoration: underline;
}
.title3 {
/* position: absolute; */
font-size: 40px;
height: 960px;
/* margin: 0 20px; */
text-align: center;
background:#9CF;
box-shadow: inset 0px 0px 0px 0px;
color:#000;
border-radius: 10px 10px;
padding: 20px;
/* left: 50px; */
/* margin: 0 auto; */
 margin-left: 15%;
 width: 950px;
margin-top: 90px;
}
.slider {
box-shadow: #000;
background-size: cover;
margin-left: 0px;
margin-top: 19px;
margin-bottom: 130px;
padding: 3px 0px;
width: 1139px;
height: 302px;
z-index: 5;
}

.carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-prev, .carousel-control .icon-next {
width: 30px;
height: 30px;
margin-top: -1081px;
margin-left: -15px;
font-size: 30px;
}
.cover {
position: unset;
background-size: cover;
margin-left: 14px;
margin-top: 9px;
margin-bottom: 222px;
padding: 3px 0px;
width: 100%;
height: 290px;
margin-bottom: 50px;
/* margin-top: 70px; */
margin-bottom: 98px;
z-index: 1;
float: left;
}


marquee {
margin-top: -21px;
width: 1065px;
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
font-size: 25px;
POSITION: static;
FONT-SIZE: 2;
}

.footerp2{
/* position: absolute; */
background: #56727382;
/* width: 990px; */
height: 50px;
/* left: 0; */
margin-top: 10%;
margin-left: 0px;
width: 100%;
}
#description{
font-size:20px;
display:block;	
}
#inclusion{
font-size:20px;
display:none;		
}
#exclusion{
font-size:20px;
display:none;
}
#price{
display:none;
font-size:16px;
text-align:center;
}
.tableprice{
width:60%;
}
.nav-tab{
background:#8fc7dc;
width:100%;
}

#btt1{
background: none;
outline: none;
border: none;
}

#btt2{
background: none;
outline: none;
border: none;
}
#btt3{
background:none;
outline: none;
border: none;
}
#btt4{
background:none;
outline: none;
border: none;
}
.inclusionline{
margin-left:0px;
width:60px;
}
.hr{
margin-left:0px;
width:200px;
}
#socialposition{

margin-right: 20px;
margin-top: 80px;	

}
/*photogallery*/


.Img:hover {
transform: scale(1.1,1.1);
}
.footerp2 {
position: relative;
margin-top: 220%;
background: #74adda;
/* width: 990px; */
height: 90px;
/* left: 0; */
/* margin-top: 1%; */
left: 0px;
width: 100%;
COLOR: #fff;
}
.photogallery {
	width:200px;
font-size: 30px;
margin: 20px 590px;
}
div#loading {
width: 50px;
height: 50px;
position: fixed;
/* background: #000; */
border-radius: 50px;
/* margin: 50%auto; */
top: 90%;
left: 45%;
border-right: 5px solid #5a5a5a;
border-left: 5px solid #5a5a5a;
border-bottom: 5px solid #5a5a5a;
border-top: 5px solid #06F;
animation:round 2s linear infinite;
}
@keyframes round{
from{transform:rotate(0deg)} 
to{transform :rotate(360deg)}
}
/*luxor excrustion*/
.dev1 {
width: 100%;
height: 80px;
font-size: 29px;
text-align: center;
text-shadow: -1px 0px 6px #6ec7e8;
/* padding: 50px; */
}


.content {
margin-top: 98px;
margin-bottom: 77px;
/* background: #64646b; */
width: 1048px;
height: fit-content;
/* margin: 5500px; */
margin-left: 20px;
font-size: 20px;
FONT-WEIGHT: LIGHTER;
FONT-FAMILY: itc-avant-garde-gothic-pro, sans-serif;
}

.fultopic {
margin-top: 50px;
margin-bottom: 57px;
/* position: relative; */
width: 98%;
background: #cccccc0a;
/* z-index: 1; */
height: fit-content;
margin-left: 28px;
padding-top: 4px;
float: left;
/* margin-bottom: initial; */
}



.Dcontant {
width: 100%;
height: 160px;
margin-top: 30px;
padding-top: 15px;
padding-left: 10px;
}
.img {
position: relative;
width: 200px;
height: 120px;
float: left;
TOP: 5PX;
left: 2px;
text-Align:right;
}
.text {
position:relative;
background: #f5f5f5;
width: 81%;
height: 244px;
/* padding-top: 650px; */
margin-left: 210px;
margin-top: 14px;
font-size: 25px;
margin-bottom: 50px;
text-Align: right;
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
WIDTH: 200PX;
/* padding: 100px; */
margin-left: 82%;
margin-top: 5px;
font-size: 20px;
}
.t1 {
margin-top: -10px;
color:#FFF;
}
#hoteltitle {
text-align: center;
color: #000;
margin: 10px;
font-size: 35px;
}

.content2 {
WIDTH: 100%;
HEIGHT: 2030PX;
margin-top: 399px;
}
.movetext {
margin-top: 320px;
}
.Des {
font-size: 25px;
height: 18px;
margin-top: 30px;
font-family: serif;
color: #292929;
width: 99%;
}

.dev2 {
margin-left: 45%;
width: 25%;
height: 80px;
font-size: 29px;
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
position:relative;
background: #f5f5f5;
width: 860px;
height: 214px;
/* padding-top: 650px; */
margin-left: 70px;
margin-top: 2px;
font-size: 15px;
border: 1px solid #a5a5a5;
font-size: 18px;
box-shadow: none;
padding: 10px;
}
#seemore {
position: absolute;
/* padding: 100px; */
left: 750px;
/* padding-top: 180px; */
top: 170px;
font-size: 20px;
}
.category {
margin-bottom: 50px;
}

<!--.categories {
margin-bottom: 689px;
/*float:left;*/
}-->

#navbar{
list-style:none;
font-size:32px;
}
#navbar>li{
background:
#6ea1fd;
font-size:24px;
}
#navbar>li:hover{
background: #f7f7f7;
font-size:24px;
}


ul#nav-category {
background: #c0e5f3bd;
display: block;
font-size: 19px;
/* color: #0c0; */
}
ul#nav-category1 {
background: #c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category2 {
background: #c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category3 {
background: #c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category4 {
background:#c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category5 {
background: #c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category6 {
background: #c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category7 {
background: #c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category8 {
background: #c0e5f3bd;
display:none;
font-size: 19px;
}
ul#nav-category1:target {
background: #c0e5f3bd;
display:block;
font-size: 19px;
}
ul#nav-category2:target {
background: #c0e5f3bd;
display:block;
font-size: 19px;
}
ul#nav-category3:target {
background:#c0e5f3bd;
display:block;
font-size: 19px;
}
ul#nav-category4:target {
background: #c0e5f3bd;
display:block;
font-size: 19px;
}
ul#nav-category5:target {
background: #c0e5f3bd;
display:block;
font-size: 19px;
}
ul#nav-category6:target {
background:#c0e5f3bd;
display:block;
font-size: 19px;
}
ul#nav-category7:target {
background: #c0e5f3bd;
display:block;
font-size: 19px;
}
ul#nav-category8:target {
background: #c0e5f3bd;
display:block;
font-size: 19px;
}
/*cruise type*/
.category2 {
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 950px;
}
.content3 {
margin-top: 190px;
WIDTH: 100%;
HEIGHT: 1800PX;
/* background: #0c0; */
}
.dev3 {
margin-left: 10px;
width: 35%;
height: 40px;
font-size: 29px;
text-align: left;
text-shadow: -1px 0px 6px #6ec7e8;
Border-bottom:1px solid #000;
/* padding-left: 0px; */
}
#Image {
width: 200px;
height: 150px;
margin: 20px 50px;
/* float: left; */
/* padding: 20px; */
float: left;
}
.clear {
clear: both;
}
.table1 {
margin: 0px 45px;
float: left;
}
#Image:hover {
opacity: 0.5;
}
.table2 {
float: left;
margin: 0px 45px;
}
/*intro Nile Cruise programme*/
.profilepicture {
margin-top: -30px;
width: 298px;
height: 258px;
margin-left: 77%;
border:2px solid #000;
}
.Des2 {
/* position: absolute;*/
font-size: 19px;
width: 994px;
height: 18px;
MARGIN-top: 5px;
font-family: serif;
font-weight: bold;
color: #292929;
/* float: left; */
}
.dev4 {
padding-right: 10px;
padding-right: 20px;
padding-top: 10px;
padding-left: 10px;
width: 37%;
font-weight: bold;
height: 40px;
font-size: 19px;
text-align: left;
text-shadow: -1px 0px 6px #6ec7e8;
/* padding-left: 0px; */
}
.category3 {
position: absolute;
width: 350px;
height: 750px;
left: 74%;
top: 450px;
}
.content4 {
/* position: relative; */
margin-top: 140px;
WIDTH: 100%;
HEIGHT: 1900PX;
/* background: #0c0; */
}
.topic {
margin-top: 20px;
background: #f5f5f5;
width: 990px;
font-size: 25px;
}
/*long Cruise 12 days*/
.content5 {
margin-top: 400px;
WIDTH: 100%;
HEIGHT: 3800PX;
/* background: #0c0; */
}
/*dahabiya*/
.content6 {
margin-top: 180px;
WIDTH: 100%;
HEIGHT: 2055PX;
}
/*sandal*/
.content7 {
margin-top: -90px;
WIDTH: 100%;
HEIGHT: 2015PX;
}
.category4 {
position: absolute;
width: 350px;
height: 750px;
left: 999px;
top: 1000px;
}
/*Dahabiya Nile Dream*/
.category5 {
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 2260px;
}
/*Dahabiya Dalida*/
.category6 {
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 850px;
}
/*Dahabiya jasmine*/
.category7 {
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 850px;
}
/*Dahabiya Nebyt*/
.category8 {
position: absolute;
width: 350px;
height: 750px;
left: 74%;
top: 2900px;
}
/* Dahabiya El Khedewi*/
.category9 {
position: absolute;
width: 350px;
height: 550px;
left: 74%;
top: 2299px;
}
/*Dahabiya Ms Donia*/
.category11{
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 850px;
}
/*Dahabiya Naema*/
.category12 {
position: absolute;
width: 350px;
height: 750px;
left: 74%;
top: 2390px;
}
/*Dahabiya Ms Judi*/
.category10 {
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 850px;
}
/*Sandal*/
.category13 {
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 850px;
}
.category14 {
position: absolute;
width: 350px;
height: 750px;
left: 75%;
top: 1050px;
}
.category15 {
position: absolute;
width: 350px;
height: 750px;
left: 74%;
top: 950px;
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
width: 94%;
}

.actions {
margin-top: 10px;
}

.track {
left: -41px;
margin-top: unset;
width: 100%;
position: relative; 
float:left;
}
.view-port, .track .inner {
width: 946px;
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
margin: 20px 75px 20px 96px;
margin-bottom: 30px;
width: fit-content;
padding: 10px;
background: #F1F1F1;
border-radius: 4px;
height: 309px;
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
display: block;
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
display: block;
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

/*MEMBER CMS*/
.prof_img {
    position: absolute;
    margin-top: -21px;
    margin-left: -52px;
}

#loader{
position:absolute;
background:#FFF;
z-index:10;
width:100%;
height:1950px;	
}
img.loading-logo {
width: 450px;
height: 360px;
}


#dev1 {
margin: 38px 590px;
width: 40px;
height: 10px;
background: aliceblue;
float: left;
border-radius:50px;
}
#dev2 {
margin: 38px 653px;
width: 40px;
height: 10px;
background: aliceblue;
border-radius: 50px;
}
#dev3 {
margin: -49px 720px;
width: 40px;
height: 10px;
background: aliceblue;
float: left;
border-radius:50px;
}
.enime {
position: absolute;
/* margin: -5px; */
background:#00F;
width: 40px;
height: 10px;
animation:animate 6s  running 50 ease;
border-radius:50px;
}
#loading {
margin: 150px 0px 1px 610px;
width: 520px;
height: 3px;
padding: 1px 0px 0px 20px;
font-size: 20px;
font-weight:bold;
font-style:italic;
}

.logo {
    width: 255px;
    height: 165px;
    position: static;
    margin-top: -149px;
    margin-left: 64%;
    /* float: left; */
    z-index: 3;
    padding: unset;
    
}

.loading-screen {
margin-top: -140px;
}
body {
background: cornsilk;
}

@keyframes animate{
5%{transform:translateX(65px)}
 
92%{transform:translateX(65px)}

95%{transform:translateX(130px)}	
}
#loading {
margin: 150px 0px 1px 610px;
width: 520px;
height: 3px;
padding: 1px 0px 0px 20px;
font-size: 20px;
font-weight:bold;
font-style:italic;
}
.loading-screen {
margin-top: -140px;
}
body {
height:300px;
background: #fcfdfb;
}
hr {
width: 100%;
margin-top: 50px;
}
.first1 {
position:relative;
float:left;
margin: 50px;
width: 200px;
height: 200px;
border: 2px solid #24c1f1;
border-radius: 50px;
}

.first1 a{
text-decoration:none;
color:#000;
}

.first1 a:hover{
text-decoration:none;
color:#000;
}

.hrtitle {
width: 100%;
margin-top: 150px;
}

.first1:hover{
background:linear-gradient(135deg,#376f9d 0,#66cdcc 100%);		
}
.img {
/*top: 40px;*/
/* margin: 10px 20px 150px 20px; */
/*position: absolute;*/
/*left: 80px;*/
}

ul#nav {
display:none;
text-decoration:none;
position: absolute;
background:linear-gradient(135deg,#a94442  0,#66cdcc 100%);
margin-left:-50px;		
margin-Top: -36px;
/* float: left; */
width: 299px;
height: 2457px;
z-index:10;
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
position: static;
Width: 50px;
height: 40px;
box-shadow: 1px 1px 5px 3px rgba(113, 114, 117, 0.62);
font-weight: bold;
font-size: 36px;
padding-bottom: 40px;
margin-bottom: 54px;
}
.btt1 a{
text-decoration:none;
}

.btt1 a:hover{
text-decoration:none;
}

span.copyright {
font-weight:bold;
margin-left: 450px;
font-size:26px;
}
.clear{
clear:both;
}
#loading {
margin: 150px 0px 1px 610px;
width: 520px;
height: 3px;
padding: 1px 0px 0px 20px;
font-size: 20px;
font-weight:bold;
font-style:italic;
}
.Brand {
width: 50px;
height: 65px;
margin: 0px 522px 0px;
padding-bottom: 141px;
}
.logo2{
width:290px;
height:180px;
margin-top:-30px;
margin-left:390px;		
}

.loading-screen {
margin-top: -140px;
}
body {
height:300px;
background: #fcfdfb;
}
hr {
width: 100%;
margin-top: 50px;
}
.first1 {
	position:relative;
	float:left;
margin: 50px;
width: 200px;
height: 200px;
border: 2px solid #24c1f1;
border-radius: 50px;
}
.hrtitle {
width: 100%;
margin-top: 150px;
}

.first1:hover{
background:linear-gradient(135deg,#376f9d 0,#66cdcc 100%);		
}

.btt1 a{
text-decoration:none;
}

.clear{
clear:both;
}
.character {
position:absolute;
float: left;
background: aliceblue;
border-radius: 100%;
margin-left: 50px;
width: 100px;
height: 100px;
border-left: 5px solid #000fbd;
border-right: 5px solid #ef0000;
z-index:3;
}
.imgprofile{
width:100%;
border-radius: 100%;
}

.ti3 {
position: absolute;
top: 9px;
left: 87%;
font-size: 20px;
}
.containercharacter {
margin-left: 250px;
/* background: aliceblue; */
}
span.rate {
margin-left: 90px;
font-size: 20px;
}

.profilepic {
position: relative;
width: 223px;
height: 212px;
background: #fffefe;
margin: 30px 17px 6px 3px;
z-index: 5;
top: -165px;
left: 41%;
border-radius: 100%;
border: 9px solid #60a8e7;
background-image: url(../img/profilepic/60565107_400479780546533_2239188015882698752_n.png);
background-size: cover;
}

.profilepic_1 {
position:relative;
width: 223px;
height: 212px;
background: #fffefe;
margin: 30px 17px 6px 3px;
z-index: 5;
top: 332px;
border-radius: 100%;
border: 9px solid #60a8e7;
background-image:url(../img/profilepic/60565107_400479780546533_2239188015882698752_n.png);
background-size:cover;
}

.profilepicV {
position: static;
width: 223px;
height: 212px;
background: #fffefe;
margin: 368px 17px 6px 2px;
z-index: 3;
top: 313px;
border-radius: 100%;
border: 9px solid #60a8e7;
background-image: url(../img/profilepic/60565107_400479780546533_2239188015882698752_n.png);
background-size: cover;
}


.bt_pic {
border-raduis: 114px;
position: absolute;
margin-top: 159px;
margin-left: 180px;
border-radius: 100px;
height: 25px;
background:url(../../unnamed%20(1).png);
}

.bt_pic2 {
position: absolute;
margin-top: 467px;
margin-left: 95%;
border-radius: 100px;
background:url(../../unnamed%20(1).png);
content:'';

}

.cover_prof {
WIDTH: 100%;
height: 507px;
/* position: relative; */
border: 5px solid #000;
position: relative;
margin-bottom: 160px;
}

.cover_profv {
WIDTH: 100%;
height: 507px;
/* position: relative; */
border: 5px solid #000;
position: relative;
margin-bottom: 160px;
}



#save{
font-size:15px;
}

.Buyform {
border: 4px solid #FF9800;
margin-top: 598px;
margin-bottom: 456px;
margin-left: 50px;
font-size: 20px;
padding: 20px;
}


.ful_info {
position: static;
font-family: monospace;
border: 1px solid #080808;
font-size: 30px;
margin-top: -286px;
padding: 36px 0px 0px 50px;
background: #fcfdfb;
}

.ful_info_1 {
font-family: monospace;
border: 1px solid #080808;
font-size: 30px;
margin-top: 98px;
padding: 36px 0px 0px 50px;
background: #fcfdfb;
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



.pr_ITEM {
border: 2px solid #000;
width: 294px;
}


.pr_info {
margin-top: 26px;
margin-left: 182px;
}

.IMG_ITEM {
width: 293px;
background: azure;
height: 247px;
padding: 28px;
border: 2px solid #000;
}
img.camera {
margin-top: 133px;
margin-left: 162px;

}
img.camera2 {
margin-left: 10px;
}
#prod_dt {
background: gainsboro;
width: 1179px;
height: 816px;
position: absolute;
z-index: 109;
top: 233px;
left: 105px;
border: 5px solid #6c7f1e;
box-shadow: -14px -20px 350px 100px;
display: none;
}


input.closet1 {
-webkit-appearance: none;
width: 35px;
height: 38px;
font-size: 26px;
margin-left: 1152px;
margin-top: -815px;
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
margin-top: 223px;
margin-left: 50px;
}

.product_ver {
margin-left: 825px;
font-size: 28px;
width: 304px;
padding-left: 25px;
margin-top: -219px;
position: absolute;
background: aliceblue;
}

.product_dis {
width: 884px;
border: 1px solid #fff;
/* position: absolute; */
margin-left: 250px;
margin-top: 30px;
padding-bottom: 14px;
padding-left: 50px;
font-size: 31px;
border-radius: 12px;
}
.seller_info {
/* position: absolute; */
margin-top: -175px;
margin-left: 857px;
font-size: 24px;
}
span.pic_sc {
MARGIN-LEFT: 861PX;
FONT-SIZE: 26PX;
}
.product_sc3 {
position: absolute;
top: 576px;
left: 307px;
}
.product_sc4 {
position: absolute;
top: 577px;
left: 568px;
}
img.logo2 {
width: 250px;
margin-left: 854%;
}
span.list_item {
width: 226px;
margin-left: 82%;
font-weight: bold;
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
padding-top: 5px;
padding-left: 116px;
font-size: 25px;
margin-left: 208px;
/* POSITION: absolute; */
MARGIN-TOP: 0PX;
BACKGROUND: #b5c7d7;
WIDTH: 83%;
HEIGHT: 43PX;
border-radius: 50p;
box-shadow: inset -1px -1px 20px 2px #fffbfb;
}

div#massanger {
    background: antiquewhite;
    top: 189px;
    position: absolute;
    left: 14px;
    height: fit-content;
    width: 98%;
    height: 405p;
    z-index: 5;
}





.mssgbt {
position: absolute;
margin-left: 18px;
}


.button_form {
margin-top: 3px;
margin-left: 32px;
font-size: 20px;
}

div#Delete_Offer {
left: 4px;
position: absolute;
top: unset;
}

.loadingsc {
position: absolute;
background: #ffffff;
width: 100%;
height: 4974PX;
z-index: 50;
TOP: 155PX;
display: BLOCK;
}

.imgload {
background: #f5f5f5;
border-radius: 100%;
position: relative;
top: 10px;
left: 5px;
width: 132px;
height: 120px;
float: left;

}
.textload {
background: #f5f5f5;
width: 82%;
height: 130px;
/* padding-top: 650px; */
margin-left: 169px;
margin-top: 14px;
font-size: 25px;
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

.logo_siginin {
position: absolute;
margin-left: 260px;
margin-top: -74px;
border-radius: 104px;
background: white;
}


<?php
include("con_db2.php");

date_default_timezone_set("Africa/Cairo");

$Date= date("Y-m-d");

$time=date("h:i");


#$selectx="select *  from   member_pr  WHERE  Data ='$Date'  ";

$selectx="select *  from   member_pr   ";

$boxqueryx=mysqli_query($connect,$selectx);
while($column=mysqli_fetch_array($boxqueryx)){ 
?>  


#btm<?php echo $column['ID']?> {
background: url(png/empty_heart.jpg);
width: 38px;
height: 37px;
background-size: cover;
position: absolute;
z-index: 11;
top: -132px;
left: -12px;
}

#btf<?php echo $column['ID']?> {
background: url(png/love_heart.jpg);
width: 38px;
height: 37px;
background-size: cover;
position: absolute;
z-index: 10;
top: -132px;
left: -12px;
}


#btmx<?php echo $column['ID']?> {
width: 167px;
height: 34px;
top: 17px;
font-size: 15px;
position: absolute;
left: 8px;
background: antiquewhite;
}


#btfx<?php echo $column['ID']?> {
width: 165px;
height: 33px;
background: wheat;
position: absolute;
left: 9px;
top: 18px;
font-size: 15px;
}



<?php
}
?>

.Ads-title {
font-size: 28px;
padding-left: 502px;
}

.Time_zone {
font-size: 25px;
}

.mssg_Bob {
BACKGROUND: #03A9F4;
WIDTH: 542PX;
HEIGHT: 66PX;
MARGIN-LEFT: 30%;
MARGIN-TOP: -63PX;
TEXT-ALIGN: center;
FONT-SIZE: 20PX;
}

.cre_market {
position: absolute;
width: 367px;
font-size: 19px;
margin-left: 191px;
}

.market_bt {
width: 87px;
height: 39px;
background: #b90e0e;
color: white;
border-radius: 100px;
margin-left: 0px;
margin-top: -13px;
}

.mark_form {
background: #7955488a;
padding-top: 56px;
padding-left: 59px;
position: absolute;
margin-top: 235px;
margin-left: 118px;
width: 339px;
height: 360px;
z-index: 12;
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
    /* position: inherit; */
    width: 178px;
    height: 63px;
    /*background: aquamarine;*/
    margin-left: 0px;
    margin-top: -34px;
}


button.card_bt {
    position: absolute;
    margin-top: 0px;
    margin-left: 19px;
    background-color: unset;
    color: #ffc107;
    z-index: 100;
    border: none;
}

#count_fav {
    position: absolute;
    border-radius: 100px;
    BACKGROUND: #9E9E9E;
    FONT-SIZE: 20PX;
    width: 19px;
    margin-top: 1px;
    margin-left: 55px;
    border-raduis: 100px;
    z-index: 50;
}

#prod_dtt {
    position: absolute;
    border-radius: 100px;
    BACKGROUND: #9E9E9E;
    FONT-SIZE: 20PX;
    width: 19px;
    margin-top: 1px;
    margin-left: 55px;
    border-raduis: 100px;
    z-index: 50;
}



.Imgfo {
width: 207px;
height: 166px;
margin-left: 20px;
}

.logo_fo {
position: static;
margin-right: 937px;
top: 10px;
float: right;
}


#seemore_bt {
position: absolute;
margin-top: 65px;
left: 30px;
width: 100px;
font-size: 27px;
left: 641px;
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
margin-left: 1154px;
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

.nav_f {
width: 149px;
position: absolute;
margin-left: 23px;
margin-top: -139px;
background: unset;
color: antiquewhite;
padding-top: 25px;
}



#pt_seen {
background: url(icon/seen_icon%20copy.png);
background-position: center;
background-size: cover;
top: 232px;
left: 590px;
position: absolute;
width: 28px;
height: 25px;
border: none;
z-index: 20;
display: block;
}

#pt_seen:active{
border:none;
}	

	
	
   #pt_seen1 {
 background: url(icon/pass_icon%20copy2.png);
background-position: center;
background-size: cover;
top: 232px;
left: 590px;
position: absolute;
width: 28px;
height: 25px;
border: none;
z-index: 20;
display: block;
}


#page_control{
display:none;
}

#client_MASSAGE {
margin-top: 10px;
display: none;
width: 990px;
text-align: center;
display: none;
margin-top: -234px;
margin-left: 20px;
background-color: #ffc107;
}

#Mssg {
color: blue;
padding-top: 39px;
padding-left: 121px;
margin-left: 495px;
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

}