<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
ob_start();
session_start();
session_regenerate_id(TRUE);

require('/home/a2699/www_offline/utils.inc');

$email = $_SESSION['email'];

session_destroy();
$_SESSION = array();

echo "Success, logged out ".$email;

?>
