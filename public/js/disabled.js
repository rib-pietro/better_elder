$(document).ready(function(){

	var input_no = $(".disabler:checked");

	var target = $(input_no).attr("data-target");
	$("#"+target).attr("disabled", "");

	$(".disabler:checked").click(function(){
		var target = $(this).attr("data-target");
		$("#" + target).attr("disabled", "");
	});

	$(".enabler").click(function(){
		var target = $(this).attr("data-target");
		$("#" + target).removeAttr("disabled");
	});

});