<div class="container-fluid contact">
	<div class="row">
		<div class="col-xs-12 text-center">
		<h1>Get in touch</h1>
		</div>
	</div>
	<form id="contactForm" action="processForm.php" method="post">
		<!--<div class="row">
			<div class="col-xs-12">
				<div class="input-group">
					<input type="text" name="senderName" class="form-control" id="senderName" placeholder="Name" required="required" maxlength="40"/>
				</div>
			</div>
		</div>-->
		<div class="row">
			<div class="col-md-2 col-md-offset-4">
				<div class="input-group">
					<input type="email" name="senderEmail" class="form-control" id="senderEmail" placeholder="Email" required="required" maxlength="50" />
				</div>
			</div>
			<div class="col-md-1">
				<div id="formButtons">
					<input type="subscribe" id="subscribe" name="subscribe" class="btn btn-orange" role="button" Value="Get Involved"/>
				</div>
			</div>
			<div class="col-md-1">
				<div id="formButtons">
					<input type="submitMessage" id="sendMessage" name="sendMessage" class="btn btn-orange" role="button" Value="Send a message"/>
				</div>	
			</div>
		<!--<div class="row">
			<div class="col-xs-12">
				<div class="input-group">
					<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" maxlength="200"/>
				</div>
			</div>
		</div>-->
		<!--<div class="row">
			<div class="col-xs-12">
				<div class="input-group">
					<textarea name="message" class="form-control" id="message" placeholder="Message" required="required" rows="6" maxlength="10000"></textarea>
				</div>
			</div>
		</div>-->
	</form>
</div>

<?php
// Define some constants
define( "RECIPIENT_NAME", "LumenEd Inc." );
define( "RECIPIENT_EMAIL", "contact@lumened.org" );
$subjectPrepend = "From contact form: ";

// Read the form values
$success = false;
$senderName = isset( $_POST['senderName'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['senderName'] ) : "";
$senderEmail = isset( $_POST['senderEmail'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail'] ) : "";
$subject = $subjectPrepend;
$subject .= isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $message ) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $success = mail( $recipient, $subject, $message, $headers );
}

// Return an appropriate response to the browser
if ( isset($_GET["ajax"]) ) {
  echo $success ? "success" : "error";
} else {
}
?>


