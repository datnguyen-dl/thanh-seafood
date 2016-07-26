<aside>
<?php
if(logged_in() === true){
	include 'includes/widgets/pro-loggedin.php';
} else {
	include 'includes/widgets/pro-login.php';
}
include 'includes/widgets/user_count.php';
?>

</aside>
 