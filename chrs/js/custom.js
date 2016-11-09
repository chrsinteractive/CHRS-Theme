// Mobile Menu
function DropDown(el) {
	this.dd = el;
	this.initEvents();
}

DropDown.prototype = {
	initEvents : function() {
		var obj = this;

		obj.dd.on('click', function(event){
			jQuery(this).toggleClass('active');
			event.stopPropagation();
		});	
	}
}

jQuery(function() {
	var dd = new DropDown( jQuery('#dd') );

	jQuery(document).click(function() {
		// all dropdowns
		jQuery('.mobile-menu').removeClass('active');
	});

});
