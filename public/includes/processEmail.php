<?php
// Define some constants
define( "RECIPIENT_NAME", "LumenEd Contact" );
define( "RECIPIENT_EMAIL", "contact@lumened.org" );
$subjectPrepend = "Website Mailing List";

// Read the form values
$success = false;
$senderName = "Website Mailing List";
$senderEmail = "lumenedinc@gmail.com";
$subject = $subjectPrepend;
// $subject .= isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['subEmail'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subEmail'] ) : "";

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