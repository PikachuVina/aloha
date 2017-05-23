<?php 
session_start(); 
include '../include/config.php'; 
include '../include/head.php'; 
?>
<script src='//ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js'>
</script>
<script>
$(document).ready(function(){
$("#data").load("chat.php");
var refreshId = setInterval(function(){
$("#data").load('chat.php');
$("#data").slideDown("slow");
}, 1000);
$("#chatbox").validate({
debug: false,
submitHandler: function(form){
$.post('chat.php',
$("#chatbox").serialize(),function(chatoutput){
$("#data").html(chatoutput);
});
$("#msg").val("");
}
});
});
</script>
<div class='col-lg-8 col-lg-offset-2'>
  <div class='panel-group'>
    <div class='panel panel-primary'>
      <div class='panel-heading'>
        <center>Chém gió
        </center>
      </div>
      <div class="panel-body">
        <div class='form-group'>
          <form name='chatbox' id='chatbox' method='post'>
            <input id='name' type='text' name='name' placeholder='Nhập tên của bạn...' value='<?= $_SESSION['name'] ?>' class='form-control' required>
            <div class='input-group' style='margin-top:20px'>
              <div class='input-icon'>
                <input id='msg' type='text' name='msg' placeholder='Nhập nội dung...' class='form-control' required>
              </div>
              <span class='input-group-btn'>
                <button class='btn btn-danger' type='submit'> Gửi 
                  <i class='fa fa-arrow-right'>
                  </i>
                </button>
              </span>
            </div>
          </form>
        </div>
        <div id='data'>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include '../include/foot.php';