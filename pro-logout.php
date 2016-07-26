<!--nhan require POST-->
<?php
session_start();
session_destroy();
header('location: pro-index.php');
exit();
?>