/*
	@ Harris Christiansen (Harris@HarrisChristiansen.com)
	2016-09-18
	Project: Drink-Tracker
*/

$(document).ready(function() { 
	$(".sortable").tablesorter();

	$('.validate').bValidator();

	$(".datepicker").datepicker({
		dateFormat: 'yy-mm-dd',
	});

	$("#difficulty_slider").slider({
		range: "difficult",
		value: 1,
		step: 1,
		min: 1,
		max: 10,
		slide: function(event, ui) {
        	$("#difficulty").val(ui.value);
    	}
    });
	
	// Autofocus
	$("#loginField").focus();
	$("#loginField").select();
});
