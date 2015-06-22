
// Init the signin form once the document is ready
$( init );
function init() {
  $('#signinForm').submit( submitForm )
}

// Submit the form via Ajax
function submitForm() {
  var signinForm = $(this);

  // Are all the fields filled in?

  if ( !$('#email').val() || !$('#password').val() ) {

    // No; display a warning message and return to the form
    $('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
    signinForm.fadeOut().delay(messageDelay).fadeIn();

  } else {

    // Yes; submit the form to the PHP script via Ajax

    $.ajax( {
      url: signinForm.attr( 'action' ) + "?ajax=true",
      type: signinForm.attr( 'method' ),
      data: ({email: $('#email').val(), password: $('#password').val()}),
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
	
	window.location.href = "http://lumened.org/dashboard";
    // $('#successMessage').fadeIn();
    // $('#email').val( "" );
    // $('#password').val( "" );

  } else {

    // Form submission failed: Display the failure message,
    // then redisplay the form
    $('#failureMessage').fadeIn();
	$('#password').val( "" );
  }
}
