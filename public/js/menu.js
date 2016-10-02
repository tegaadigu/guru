/**
* Function to handle Menu toggle
* @param ele 	Html anc element to trigger menu toggle
*/
var Menu = function(ele, opt){
	this.init(ele, opt);
}

Menu.prototype = {
	// Init function...
	init:function(ele, opt){
		var s 	= this;
		s.ele 	= ele;

		s.ele.click(function(e){
			s.toggleMenu();
		})
	},
	// toggle function..
	toggleMenu: function(){
		var s = this;
		s.show = s.ele.data('show');
		if(!s.show){
			rightCont.removeClass('no-left');
			s.ele.find('i').attr('class', 'fa fa-align-right');
			s.show = 1;
			leftCont.removeClass("hidden-menu");
		}
		else
		{
			rightCont.addClass('no-left');
			s.ele.find('i').attr('class', 'fa fa-align-justify');
			s.show = 0;
			leftCont.addClass("hidden-menu");
		}
		s.ele.data('show', s.show);
	}
}
