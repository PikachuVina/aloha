<?php 
error_reporting(0);
include("./config.php"); 
$config['user'] = 'bmn2312'; 
$config['pass'] = 'admin'; 
  
if ($_SERVER['PHP_AUTH_USER'] != $config['user'] || $_SERVER['PHP_AUTH_PW'] != $config['pass']){ 
header('WWW-Authenticate: Basic realm="Login Install"'); 
header('HTTP/1.0 401 Unauthorized'); 
die('<center>À Được</center>'); 
} 
 
##  --> T???o database  <-- ## 
// --> Table Vip <-- 
@mysqli_query($GLOBALS["___mysqli_ston"], "CREATE TABLE IF NOT EXISTS `BLOCK` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `idfb` varchar(32) NOT NULL, 
  `thoigian` int(11) NOT NULL, 
  PRIMARY KEY (`id`) 
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 
"); 
@mysqli_query($GLOBALS["___mysqli_ston"], "CREATE TABLE IF NOT EXISTS `VIP` ( 
  `idfb` bigint(21) NOT NULL AUTO_INCREMENT, 
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
  `user` int(10) NOT NULL, 
  `goi` tinyint(1) NOT NULL, 
  `time` int(10) NOT NULL, 
PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; 
");
?> 