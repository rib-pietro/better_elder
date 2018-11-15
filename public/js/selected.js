$(document).ready(function(){

	$("input.hidden").val("");

	$(".selections").click(function(){
		var target = $(this).parent().attr("data-target");
		var new_selected = document.createElement("span");
		$(new_selected).append($(this).html());
		var text = new_selected.textContent;

		//array with all values
		var selected = [];
		selected.push(text);

		//building and populating close_button
		var close_button = document.createElement("a");
		close_button.addEventListener("click", function(e){
			e.preventDefault();
			$(this).parent().remove();
		});
		$(close_button).attr("href", "#");
		$(close_button).append($(document.createElement("i")).addClass("fas fa-times"));

		$(new_selected).append(close_button);
		$("#" + target).append(new_selected);
		var input = $("input[type=hidden][name=" + target + "]");
		input.val(input.val() + text + ',');
		console.log(input.val());
	});

});