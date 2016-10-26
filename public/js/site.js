/*
	@ Harris Christiansen (Harris@HarrisChristiansen.com)
	2016-09-18
	Project: HTML5 Boilerplate
*/


$(document).ready(function() { 
	$(".sortable").tablesorter(); 
	
	$("#loginField").focus();
	$("#loginField").select();
});

$('.validate').bValidator();

$(".datepicker").datepicker({
	dateFormat: 'yy-mm-dd',
});