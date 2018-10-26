$(document).ready(function() {
	
  // When Window Scroll
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 450) {
        // Add background too navbar
        $("#nav").addClass("bg-light");
      }
      if (scroll < 450){
        $("#nav").removeClass("bg-light");
      }
  });
	
  // Open Menu
	$('#menu-btn').on('click', function() {
		$('#main-nav').css("width", "100%");
  	});
	// Close Menu
  	$('#closebtn').on('click', function() {
  		$('#main-nav').css("width", "0%");
  	});

  	// Menu Items click
  	$('.overlay .nav-item').on('click', function(e){
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
    

    // Show/Hide Dropdown
    $( "#nav-dropdown" ).click(function(e) {
  $( "#nav-dropdown-items" ).toggle( "slow", function() {
    e.preventDefault();
  });
});

});