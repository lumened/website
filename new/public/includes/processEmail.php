<?php
// Define some constants
define( "RECIPIENT_NAME", "LumenEd Contact" );
define( "RECIPIENT_EMAIL", "contact@lumened.org" );
$subjectPrepend = "Website Mailing List";

// Read the form values
$success = false;
$senderName = "Website Mailing List";
$senderEmail = "contact@lumened.org";
$subject = $subjectPrepend;
// $subject .= isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['senderEmail'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail'] ) : "";

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