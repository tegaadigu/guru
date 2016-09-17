var rightCont = null;
var leftCont = null;

$(document).ready(function(){
	leftCont = $('.container-fluid .row .left-container');
	rightCont = $('.container-fluid .row .right-container');

	$('#toggle-menu').data('menu', new Menu($('#toggle-menu')));
})

$.ajaxPrefilter(function(options, originalOptions, xhr) {
	var token = $('meta[name="csrf_token"]').attr('content');

	if (token) {
		return xhr.setRequestHeader('X-XSRF-TOKEN', token);
	}
});
