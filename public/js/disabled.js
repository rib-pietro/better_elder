$(document).ready(function(){

	updateDisablers();

	var input_no = $(".disabler:checked");

	var target = $(input_no).attr("data-target");
	$("#"+target).attr("disabled", "");

	$("input[type=radio]").change(function(){
		updateDisablers();
		var input = $(this).attr("data-input");

		$("#" + input).val($(this).val());
	});

	$(".enabler").click(function(){
		var target = $(this).attr("data-target");
		$("#" + target).removeAttr("disabled");
		$("#" + target).val("");
	});

	function updateDisablers(){
		var disablers = $(".disabler:checked");

		for(i = 0; i < disablers.length; i++){
			var target = $(disablers[i]).attr("data-target");
			$("#" + target).attr("disabled", "");
		}
	}

/*
	for(i in disablers){
		var target = $(disablers[i]).attr("data-target");
		$("#" + target).attr("disabled", "");
	}

	disablers.forEach(function(e){
		var target = e.attr("data-target");
		$("#" + target).attr("disabled", "");
	});
	*/

});