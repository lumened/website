<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
ob_start();
if(!session_start())
{   exit("Cookies must be enabled.");   }
session_regenerate_id(TRUE);
require('/home/a2699/www_offline/utils.inc');

$email = email_clean(require_set("email"));
$password = require_set("password");

if(!validate_password($email,$password))
{   exit("Invalid password");   }

$_SESSION['email'] = $email;

echo "Success, logged in as ". $_SESSION['email'];

?>
