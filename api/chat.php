<?php 
session_start(); 
include '../include/config.php'; 
$name = htmlspecialchars($_POST['name']); 
$msg = htmlspecialchars($_POST['msg']); 
if(isset($name) && isset($msg) && strlen($msg) > 0){ 
if(preg_match('|#xoa|',$msg)){ 
mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM `chat`"); 
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO `chat` SET 
`name`='Hệ Thống',
`text`='Admin đã dọn dẹp chatbox',
`time`=".time()." 
"); 
}else{ 
$_SESSION['name'] = $name; 
if(strlen($msg) > 100) $msg = 'Nội dung chỉ được 100 kí tự';
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO `chat` SET 
`idfb`='".$_SESSION['idfb']."', 
`name`='".$name."', 
`text`='$msg', 
`time`=".time()." 
"); 
} 
} 
?> 
<div class='list-group'> 
<?php 
$req = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT `idfb`, `name`, `text`, `time` FROM `chat` ORDER BY `id` DESC LIMIT 10"); 
while($res = mysqli_fetch_assoc($req)){ 
?> 
<div class='list-group-item'><b><font color='red'><?= $res['name'] ?></font></b> : <?= $res['text'] ?><span style='float:right'><?= date("H:i:s",$res['time']) ?></span></div> 
<?php 
} 
?> 
</div>