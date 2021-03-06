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
	
	// Submit after 4 characters
	$("#loginField").on('keyup', function() {
		if (this.value.length >= 4) {
			$.post("/login", { password: this.value })
			.done(function(data) {
				if (data == "true") {
					window.location.href = '/';
				} else {
					console.log(data);
					$("#loginField").val("");
				}
			})
		}
	});
	
	autofocusOnFields();
});

function autofocusOnFields() {
	$("#loginField").focus();
	$("#loginField").select();
}
