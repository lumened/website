<?php
ini_set("display_errors","1");
error_reporting(E_ALL);

require('/home/a2699/www_offline/utils.inc');

$email = email_clean(require_set('email'));
$password = require_set('password');

$success = validate_password($email,$password);

echo $success ? "valid credentials" : "validation error";

?>

