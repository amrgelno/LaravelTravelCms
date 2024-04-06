
$(document).ready(function(e) {
$('.menu').click(function(e) {
$('.nav').fadeToggle(2000);	
	
});	    
});

$(document).ready(function(e) {
    $(".loadingbg").delay(1500).fadeOut();
		
});


/*
$(document).ready(function(e) {
	$(".img1").mouseover(function(e){
	
$(".title").fadeToggle(1000);
});
});*/



$(document).ready(function(e) {
  $('.calclu ').click(function(e) {  
	
	$('.contactform').fadeIn();
	$('.close').fadeIn();
	$('.calclures').fadeOut();
	
});
});

$(document).ready(function(e) {
  $('#send').click(function(e) {  
	$('.close_res').fadeIn();
	$('.calclures').fadeIn();
	$('.contactform').fadeOut();
	$('.close').fadeOut();
});
});

$(document).ready(function(e) {
  $('.close').click(function(e) {  
	
	$('.contactform').fadeOut();
	$('.close').fadeOut();
});
});

$(document).ready(function(e) {
  $('.close_res').click(function(e) {  
	
	$('.calclures').fadeOut();
	$('.close_res').fadeOut();
	
});
});



// categories script //



$(document).ready(function(e) {
    
$('#cat_link').click(function(e){	

/*$('.black_W').fadeIn();*/
	
$.ajax({
	
type:"GET",

url:"fetchbox.php",

data:{box_ID:$('#box_ID').val(), },
 
success:function(respond) {
    
		$('.windows').html(respond)
	}
	
      });		
});
	
});


$(document).ready(function(e) {
  $('.w_close').click(function(e) {  
	
	$('.windows').fadeOut();
	$('.w_close').fadeOut();
	$('.black_W').fadeOut();
	
});
});

$(document).ready(function(e) {
 $('#cat_link').click(function(e){ 
    $('.windows').fadeIn();
	$('.w_close').fadeIn();
	$('.black_W').fadeIn();
	
});
});
