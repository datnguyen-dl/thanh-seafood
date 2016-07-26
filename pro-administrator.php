<?php
  include 'core/init.php';
//  include 'includes/overall/header.php';
?>
<?php 
include 'includes/pro-aside.php'; 
?>
<?php
    if(has_access($session_user_id, 1) === true){
        echo 'Admin! AAAA';
    }else if(has_access($session_user_id, 2) === true){
        echo 'Moderator! BBBB';
    }
?>
<?php
//include 'includes/overall/footer.php';
?>