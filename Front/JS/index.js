
if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.topic').offset().top){
$(".categories").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{

$(".categories").css({opacity:"0",transition:"all 2s ease"});

										   }
				   });
				   });
}



if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.slider').offset().top){
$(".topic").css({opacity:"1",transition:"all 2s ease"},1000);
										   }
										   else{

$(".topic").css({opacity:"0",transition:"all 2s ease"});

										   }
				   });
				   });
}



if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.slider').offset().top){
$(".topic").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{

$(".topic").css({opacity:"0",transition:"all 2s ease"});

										   }
				   });
				   });
}



if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.categories').offset().top){
$(".topic").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{

$(".topic").css({opacity:"0",transition:"all 2s ease"});

										   }
				   });
				   });
}


let started = false;
 // Function Started ? No window.onscroll = function ()
$(window).scroll(function(){

	let nums = document.querySelectorAll(".counter"); 

	if($(window).scrollTop() >= $('.topic').offset().top){

		if (!started)
		{ nums.forEach((num) => startCount(num)); } started = true; }
});


function startCount(el) { 
	let target = el.dataset.target; 
	let ourcounter = setInterval(() => 
	{ el.textContent++; if (el.textContent == target) { clearInterval(ourcounter); } }, 2000 / target); }



if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.topic').offset().top){
$(".form").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{

$(".form").css({opacity:"0",transition:"all 2s ease"});

										   }
				   });
				   });
}



if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.topic').offset().top){
$(".form").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{

$(".form").css({opacity:"0",transition:"all 2s ease"});

										   }
				   });
				   });
}







if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('#cat').offset().top){
$("#cat").animate({opacity:"1",left:"10px",transition:"all 2s ease"},1000);
										   }
				   });
				   });
}






if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('#cat').offset().top){
$("#cat").css({opacity:"1",transition:"all 2s ease"},1000);
										   }

else{

$("#cat").css({opacity:"0",transition:"all 2s ease"},1000);

}

				   });
				   });
}







function shut() {


document.getElementById('shuttle').style='background-image:url(../img/shuttle.png);'


}




if($(window).width()<= 767){

$(document).ready(function(e) {
$("#shuttle").click(function(){
$("#shuttle").animate({top:"-10000px"},9000);

				   });
				   });
}





$(document).ready(function(e) {
$(".up").click(function(){

$("html,body").animate({scrollTop:$('#up').offset().top},5000);

});
 });



$(document).ready(function(e) {
    $(".loadingbg").delay(1000).fadeOut()

});


$(document).ready(function(e) {
	$('.Number_static').counterUp({
		delay: 10,
		time: 7000
	});
});


$(document).ready(function(){
    $("#loader").delay(3500).fadeOut("fast");
    });




if($(window).width()>= 767){

$(document).ready(function(e) {
$("#shuttle").click(function(){
$("#shuttle").animate({top:"-10000px"},9000);

				   });
				   });
}




if($(window).width()>= 1024){

$(document).ready(function(e) {
$("#shuttle").click(function(){
$("#shuttle").animate({top:"-10000px"},20000);


				   });
				   });
}



const links = document.querySelectorAll('.navlink');
    
if (links.length) {
  links.forEach((link) => {
    link.addEventListener('click', (e) => {
      links.forEach((link) => {
          link.classList.remove('active');
      });
     // e.preventDefault();
      link.classList.add('active');
    });
  });
}


const images = document.querySelectorAll('img');
    
if (images.length) {
	
  images.forEach((images) => {
      images.setAttribute("alt","websitetitle");
    });
 
}

