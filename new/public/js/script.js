var messageDelay = 5000;  // How long to display status messages (in milliseconds)

// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var coverbottom = $(".cover").offset().top + $(".cover").height();

$(document).ready(function () {
    // BACKGROUND VIDEO SCRIPTS
        $(function () {
            $(".player").mb_YTPlayer(); // .player - class to add for playing video ( see the div above to understand)
        });
});

// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if (stop > coverbottom) {
        $('.navbar').addClass('past-cover');
    } else {
        $('.navbar').removeClass('past-cover');
    }

});



// // Init the form once the document is ready
// $( init );
// function init() {
  // $('#contactForm').submit( submitForm )
// }

// // Submit the form via Ajax
// function submitForm() {
  // var contactForm = $(this);

  // // Are all the fields filled in?

  // if ( !$('#senderName').val() || !$('#senderEmail').val() || !$('#message').val() ) {

    // // No; display a warning message and return to the form
    // $('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
    // contactForm.fadeOut().delay(messageDelay).fadeIn();

  // } else {

    // // Yes; submit the form to the PHP script via Ajax

    // $.ajax( {
      // url: contactForm.attr( 'action' ) + "?ajax=true",
      // type: contactForm.attr( 'method' ),
      // data: contactForm.serialize(),
      // success: submitFinished
    // } );
  // }

  // // Prevent the default form submission occurring
  // return false;
// }


// // Handle the Ajax response

// function submitFinished( response ) {
  // response = $.trim( response );
// // $('#sendingMessage').fadeOut();

  // if ( response == "success" ) {

    // // Form submitted successfully:
    // // 1. Display the success message
    // // 2. Clear the form fields

    // $('#successMessage').fadeIn();
    // $('#senderName').val( "" );
    // $('#senderEmail').val( "" );
		// $('#subject').val( "" );
    // $('#message').val( "" );

  // } else {

    // // Form submission failed: Display the failure message,
    // // then redisplay the form
    // $('#failureMessage').fadeIn();
  // }
// }