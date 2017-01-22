$(function() {
	$('.carousel').carousel({
		interval: 4000,		//speed of rotation of the images in milliseconds 
		pause: false,		//the images will continue to rotate even after hovering on the pointer
		//wrap: false,      // if the images reaches the last image, stops there instead of starting from beginning again
		keyboard: false     // disables all the keyboard functionality
	
	// SCRIPT FOR CAROUSEL
	});

});

$(function() {
	$('[data-toggle = "tooltip"]').tooltip();
	  // SCRIPT FOR TOOLTIP
});

$(function() {
	$('[data-toggle = "popover"]').popover();
	  // SCRIPT FOR POPOVER
});