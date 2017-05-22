<?php 
$host = "localhost"; 
$username = "bot"; 
$password = "AfaviFoO88D~?"; 
$dbname = "bot"; 
$connection = ($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $username, $password)); 
if (!$connection) 
  { 
  die('Could not connect: ' . mysqli_error($GLOBALS["___mysqli_ston"])); 

  } 
mysqli_select_db($GLOBALS["___mysqli_ston"], $dbname) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
@mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8"); 
?>