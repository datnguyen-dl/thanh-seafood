<aside>
<?php
if(logged_in() === true){
	include 'includes/widgets/loggedin.php';
} else {
	include 'includes/widgets/pro_login.php';
}
include 'includes/widgets/user_count.php';
?>

</aside>
 