  <?php
  include 'core/init.php';
    protect_page_admin();
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Thanh SF</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
    <script src="js/thanhSF.js"></script>
</head>
<body>

<div class="cTy-admin">
    <div class="cTy-side-left"></div>
    <div class="cTy-side-right"></div>
</div>

<?php
    if(has_access($session_user_id, 1) === true){
        echo 'Admin! AAAA';
    }else if(has_access($session_user_id, 2) === true){
        echo 'Moderator! BBBB';
    }
?>



</body>
</html>

