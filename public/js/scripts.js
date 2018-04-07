$(document).ready(function() {
	
	// Open Menu
	$('#menu-btn').on('click', function() {
		$('#main-nav').css("width", "100%");
  	});
	// Close Menu
  	$('#closebtn').on('click', function() {
  		$('#main-nav').css("width", "0%");
  	});


  	// Menu Button click
  	$('.overlay a').on('click', function(e){
  		// Prevent Default (Do not go to page)
  		e.preventDefault();
  		// add css class nav-click
  		$(this).addClass('nav-click');
  		// Hides Overlay
  		setTimeout( function() {
  			$('#main-nav').css("width", "0%");
  		}, 400);
  		// Gets href - Saves to var
  		var link = $(this).attr('href');
  		// Time before go to link
  		setTimeout( function() {
  			window.location.href = link;
  		}, 800);
  	});
});