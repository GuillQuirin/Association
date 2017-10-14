$(document).ready(function(){
	if($("#messages").find(".flash-notice").length!=0 || $("#messages").find(".flash-error").length!=0)
		$("#messages").addClass('active');
	
	$("#messages.active").click(function(event){
		if($(event.target).is("div.flash-notice")){
			//
		}
		else{
			$(".flash-notice").fadeOut();
			$(this).fadeOut();
		}
	});

});