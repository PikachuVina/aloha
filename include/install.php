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
`idfb` varchar(32)  NOT NULL, 
`name` varchar(32)  NOT NULL, 
`user` varchar(32) NOT NULL, 
`vnd` int(11) NOT NULL, 
`goi` int(11) NOT NULL,
`time` int(11)  NOT NULL,
PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1; 
");
@mysqli_query($GLOBALS["___mysqli_ston"], "CREATE TABLE IF NOT EXISTS `ACCOUNT` ( 
`id` int(11) NOT NULL AUTO_INCREMENT, 
`username` varchar(32) NOT NULL, 
`password` varchar(32) NOT NULL, 
`vnd` int(10) NOT NULL, 
`limit` int(10) NOT NULL,
PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1; 
");
mysqli_query($GLOBALS["___mysqli_ston"], "CREATE TABLE IF NOT EXISTS `CHAT` ( 
`id` int(11) NOT NULL AUTO_INCREMENT, 
`idfb` varchar(32) NOT NULL, 
`name` varchar(32) NOT NULL, 
`text` varchar(255) NOT NULL, 
`time` int(11) NOT NULL,
PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1; 
"); 
?>