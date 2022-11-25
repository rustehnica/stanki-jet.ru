$(document).ready(function() {
	
	$(".title-search-result").css({"left": "600px"});
    
	$("#title-search-input").focus(function(){
	
		$(this).css({"right": "2px"});
		$(this).animate({"width":"655px"}, 500);		
		
	});
	
	$("#title-search-input").focusout(function(){
	
		$(this).animate({"width":"465px"}, 500);
	
	});
	
});