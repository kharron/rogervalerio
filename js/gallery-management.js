$(document).ready(function() {
	alert($(".vegas-slide-inner").css("background-image"));
	$(".vegas-slide-inner").css("background-image", "url(" + background_left + ")");
	$("#left4 .vegas-slider-inner:eq[0]").css("background-image", "url(" + background_right + ")");
});


