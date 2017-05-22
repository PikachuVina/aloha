<?php 
include("../config.php"); 
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