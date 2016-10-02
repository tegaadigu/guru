var rightCont = null;
var leftCont = null;

function styleElement(element, styles) {
	for (var prop in styles) {
		element.style[prop] = styles[prop];
	}

	return element;
}

function starRating(element, rating, starUrl) {
	console.log('element', element);
	console.log('rating..', rating);
	var starWidth = 22;
	var rateValue = parseFloat(rating);
	var size = Math.max(0, (Math.min(5, rateValue))) * starWidth;
	var span = document.createElement('div');
	span = styleElement(span, {
		'background-image': 'url('+starUrl+')',
		'background-size': '22px 36px',
		'height': '18px',
		'background-position': '0 0',
		width: size + 'px'
	});
	element.innerHTML = span.outerHTML;

	return element;
}

$(document).ready(function(){
	leftCont = $('.container-fluid .row .left-container');
	rightCont = $('.container-fluid .row .right-container');

	$('#toggle-menu').data('menu', new Menu($('#toggle-menu')));

	//$('[data-toggle=dropdown]').dropdown();
})

$.ajaxPrefilter(function(options, originalOptions, xhr) {
	var token = $('meta[name="csrf_token"]').attr('content');

	if (token) {
		return xhr.setRequestHeader('X-XSRF-TOKEN', token);
	}
});
