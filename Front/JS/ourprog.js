
$(document).ready(function(e) {
	$("#btt2").click(function(){
		$("#inclusion").slideDown();
		$("#description").fadeOut(-5000);
		$("#price").fadeOut(-5000);
		$("#exclusion").fadeOut(-5000);
	});
    
});

$(document).ready(function(e) {
	$("#btt1").click(function(){
		$("#description").slideDown();
		$("#inclusion").fadeOut(-5000);
		$("#price").fadeOut(-5000);
		$("#exclusion").fadeOut(-5000);
	});
    
});


$(document).ready(function(e) {
	$("#btt3").click(function(){
		$("#price").slideDown();
		$("#inclusion").fadeOut(-5000);
		$("#exclusion").fadeOut(-5000);
		$("#description").fadeOut(-5000);
		
	});
    
});

$(document).ready(function(e) {
	$("#btt4").click(function(){
		$("#exclusion").slideDown();
		$("#inclusion").fadeOut(-5000);
		$("#description").fadeOut(-5000);
		$("#price").fadeOut(-5000);
	});
    
});
