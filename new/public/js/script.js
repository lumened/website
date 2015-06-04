var messageDelay = 5000;  // How long to display status messages (in milliseconds)

// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var coverbottom = $(".cover").offset().top + $(".cover").height();

$(document).ready(function () {
    // BACKGROUND VIDEO SCRIPTS
        $(function () {
            $(".player").mb_YTPlayer(); // .player - class to add for playing video (see the div above to understand)
        });
});

// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if (stop > coverbottom-120) {
        $('.navbar').addClass('past-cover');
    } else {
        $('.navbar').removeClass('past-cover');
    }

});

//video play
function unhide(divID, otherDivId, otherDiv2Id) {
    var item = document.getElementById(divID);
    if (item) {
            item.className=(item.className=='container-fluid hidden')?'container-fluid unhidden':'container-fluid hidden';
        }
        document.getElementById(otherDivId).className = 'container-fluid cover row hidden';
		document.getElementById(otherDiv2Id).className = 'container-fluid cover row hidden';
	$("#myplayer")[0].src += "&autoplay=1";
}

//Parallax Scrolling
(function($) {
 
    $.fn.parallax = function(options) {
 
        var windowHeight = $(window).height();
 
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
        	// Save a reference to the element
        	var $this = $(this);
 
        	// Set up Scroll Handler
        	$(document).scroll(function(){
 
    		        var scrollTop = $(window).scrollTop();
            	        var offset = $this.offset().top;
            	        var height = $this.outerHeight();
 
    		// Check if above or below viewport
			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}
 
			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
    			$this.css('background-position', 'center ' + yBgPosition + 'px');
                
        	});
        });
    }
}(jQuery));

$('.picture-panel').parallax({
	speed :	0.25
});

// Init the form once the document is ready
$( init );
function init() {
  $('#contactForm').submit( submitForm )
}

// Submit the form via Ajax
function submitForm() {
  var contactForm = $(this);

  // Are all the fields filled in?

  if ( !$('#senderName').val() || !$('#senderEmail').val() || !$('#message').val() ) {

    // No; display a warning message and return to the form
    $('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
    contactForm.fadeOut().delay(messageDelay).fadeIn();

  } else {

    // Yes; submit the form to the PHP script via Ajax

    $.ajax( {
      url: contactForm.attr( 'action' ) + "?ajax=true",
      type: contactForm.attr( 'method' ),
      data: contactForm.serialize(),
      success: submitFinished
    } );
  }

  // Prevent the default form submission occurring
  return false;
}

// Handle the Ajax response

function submitFinished( response ) {
  response = $.trim( response );
// $('#sendingMessage').fadeOut();

  if ( response == "success" ) {

    // Form submitted successfully:
    // 1. Display the success message
    // 2. Clear the form fields

    $('#successMessage').fadeIn();
    $('#senderName').val( "" );
    $('#senderEmail').val( "" );
		$('#subject').val( "" );
    $('#message').val( "" );

  } else {

    // Form submission failed: Display the failure message,
    // then redisplay the form
    $('#failureMessage').fadeIn();
  }
}


// // Submit the form via Ajax
// function submitEmail() {

// //submit the form to the PHP script via Ajax

// echo $('#subEmail');

  // // Prevent the default form submission occurring
  // return false;
// }

// // function emailFinished( response ) {
  // // response = $.trim( response );

  // // if ( response == "success" ) {

    // // // Form submitted successfully:
    // // // 1. Display the success message
    // // // 2. Clear the form fields

    // // $('#emailSuccessMessage').fadeIn();
    // // $('#subEmail').val( "" );

  // // } else {

    // // // Form submission failed: Display the failure message,
    // // // then redisplay the form
    // // $('#incorrectEmail').fadeIn();
  // // }
// // }
