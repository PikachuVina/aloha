<?php
session_start();
if($_SESSION['idfb'] && $_SESSION['ten'] && $_SESSION['token']){
header('location: welcome.html');
}
include './include/head.php';
include './include/config.php';
if(isset($_GET['i'])){
switch($_GET['i']) {
case 1:
$errorMsg = "ERROR: Invalid Authentication The Access Token You Entered Is Not Valid. Or Expired";
break;
case 2:
$errorMsg = "Logout Success";
break;
case 3:
$errorMsg = "INFO: Please Generate token Using Iphone- android Apps";
break;
case 8:
$errorMsg = "Please Login";
break;
default:
$errorMsg = "DXB Was Here :)";
break;
}
}
?>
<div class="col-lg-8 col-lg-offset-2">
  <?php
if($errorMsg){
echo '<div class="thongbao"><center>';
echo $errorMsg; 
echo '</center></div>';
}
?>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading"><i class="fa fa-bookmark" aria-hidden="true"></i> Introduction about 
        <?= $name ?>
      </div>
      <div class="panel-body">
        <li class="list-group-item">
          <strong>Step 1 : 
          </strong>
          <br>
          Set your post's permission to
          <i class="fa fa-globe">
          </i> Public.
          <br>
          <strong>Step 2 :
          </strong>
          <br>
          Activate your Facebook
          <span class="fa fa-plus fa-rss">
          </span> Follower. 
        </li>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <center>
        <font color="green">
        </font>
      </center>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading"><i class="fa fa-key" aria-hidden="true"></i> Method Login
      </div>
      <div class="panel-body">
        <p>We use 
          <code>Access Token Based Authentication</code>. 
          <b>Token 
          </b>is a Private KEY generated by facebook that we needed to be able giving free Likes. Follow few steps below to get your own Access Token and you can use your Access Token to login to our Website. 
        </p>
        <div style="padding: 20px;border-top: <?= $color ?> solid;border-bottom: <?= $color ?> solid;">
          <b><font color="red"> Note:
          </font></b> Token as a Picture.
          <a target="_blank" href="img/token.png"> Click View
          </a>
          <br>
          <br>
          <a href="../gettoken" target="_blank" class="btn btn-danger">
            <i class="fa fa-arrow-right">
            </i> Click Here
          </a> and login with facebook for get token. 
          <br>
        </div>
        <br>
        <form id="login-form" action="login.php" method="POST" rel="nofollow" class="col s12">
          <div class="form-group">
            <input name="user" type="text" placeholder="Submit your Token here..." class="form-control" required="">
            <div class="form-group">   
              <br>
              <center>
                <button id="login" class="btn btn-danger" type="submit">
                  <i class="fa fa-sign-in" aria-hidden="true">
                  </i> Submit
                </button>
              </center>
              <p hidden>
                <a href="http://<?= $name ?>/Facebook-Auto-Request">facebook auto request
                </a>
                <a href="http://<?= $name ?>/Facebook-Arkadaş-Kasma">facebook arkadaş kasma
                </a>
                <a href="http://<?= $name ?>/facebook-auto-friend-request">facebook auto friend request
                </a>
                <a href="http://<?= $name ?>/Facebook-Auto-Friend-Adder">Facebook Auto Friend Adder
                </a>
                <a href="http://<?= $name ?>/facebook-arkadaş-hilesi">facebook arkadaş hilesi
                </a>	  
                <a href="http://<?= $name ?>/facebook-takipçi-hilesi">facebook takipçi hilesi
                </a>	  
                <a href="http://<?= $name ?>/facebook-arkadaş-ekleme-hilesi">facebook arkadaş ekleme hilesi
                </a>	  
                <a href="http://<?= $name ?>/الفيسبوك-السيارات-طلب-صديق">الفيسبوك السيارات طلب صديق
                </a>	  
                <a href="http://<?= $name ?>/فیس-بک-آٹو-دوست-کی-درخواست">فیس بک آٹو دوست کی درخواست
                </a>	  
                <a href="http://<?= $name ?>/फेसबुक-ऑटो-मित्र-अनुरोध">फेसबुक ऑटो मित्र अनुरोध
                </a>	  
                <a href="http://<?= $name ?>/facebook-hacks">facebook hacks
                </a>	  
                <a href="http://<?= $name ?>/facebook-pedido-auto-amigo">facebook pedido auto amigo
                </a>	  
                <a href="http://<?= $name ?>/auto-request">auto request
                </a>
                <a href="http://<?= $name ?>/Auto-Friend-Requests">Auto Friend Requests
                </a>
                <a href="http://<?= $name ?>/Get-Free-Friend-Requests">get free friend requests
                </a>
                <a href="http://<?= $name ?>/Auto-kết-bạn">auto kết bạn
                </a>
                <a href="http://<?= $name ?>/Auto-Friend-Request">auto friend request
                </a>
                <a href="http://<?= $name ?>/Auto-Follower">auto follower
                </a>
                <a href="http://<?= $name ?>/Auto-Fan-Page-Liker">Auto Fan Page Liker
                </a>
                <a href="http://<?= $name ?>/Autoliker">Autoliker
                </a> 
                <a href="http://<?= $name ?>/Page-Auto-Liker">Page Auto Liker
                </a> 
                <a href="http://<?= $name ?>/Facebook-Auto-Follower">Facebook Auto Follower
                </a>
                <a href="http://<?= $name ?>/Auto-Facebook-friend-request">auto Facebook friend request
                </a>
                <a href="http://<?= $name ?>/Auto-Request">auto request
                </a>
                <a href="http://<?= $name ?>/One-Auto-Friend-Request">one auto friend request
                </a>
                <a href="http://<?= $name ?>/Auto-friend-request-vip">auto friend request vip
                </a>
                <a href="http://<?= $name ?>/Auto-Friend-Requests">Auto Friend Requests
                </a>
                <a href="http://<?= $name ?>/Hack-like-fanpage">hack like fanpage
                </a>
                <a href="http://<?= $name ?>/Hack-like">hack like
                </a>
                <a href="http://<?= $name ?>/auto-like-fanpage">auto like fanpage
                </a>
                <a href="http://<?= $name ?>/Hack-sub">hack sub
                </a>
                <a href="http://<?= $name ?>/Sub">sub
                </a>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <center>
 <script id="_waut4z">var _wau = _wau || [];
_wau.push(["tab", "xmq0f8yhnh3m", "t4z", "left-middle"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="//widgets.amung.us/tab.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
  </center>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</script>
<script type="text/javascript">
  $("#login-form").submit(function() {
    $(this).find("button")[0].disabled = true;
    $(this).find("button").text("Please Wait...");
  }
                         );
</script>
<script>
  (function (w,i,d,g,e,t,s) {
    w[d] = w[d]||[];
    t= i.createElement(g);
    t.async=1;
    t.src=e;
    s=i.getElementsByTagName(g)[0];
    s.parentNode.insertBefore(t, s);
  }
  )(window, document, '_gscq','script','//widgets.getsitecontrol.com/83150/script.js');
</script>
<?php include './include/foot.php'; ?>
