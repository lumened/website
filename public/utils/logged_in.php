<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
ob_start();
session_start();

require('/home/a2699/www_offline/utils.inc');

if(isset($_COOKIE['PHPSESSID']) & isset($_SESSION['email']))
{
    echo $_COOKIE['PHPSESSID']==session_id() ? "Logged in as 
".$_SESSION['email'] : "Not logged in";
}
else
{   echo "Not logged in";   }
?>
