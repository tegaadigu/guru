var rightCont = null;
var leftCont = null;

$(document).ready(function(){
	leftCont = $('.container-fluid .row .left-container');
	rightCont = $('.container-fluid .row .right-container');

	$('#toggle-menu').data('menu', new Menu($('#toggle-menu')));
})