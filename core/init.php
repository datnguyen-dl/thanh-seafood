<?php

session_start();
error_reporting(0); // ko xuat hien report connect database 0

// conection database
require 'database/connect.php';  /*khac voi include*/
require 'functions/general.php';

require 'functions/users.php';
require 'functions/email.php';

require 'functions/products.php';

// show link website
$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);
//print_r($current_file);

if(logged_in() === true){
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email', 'password_recover', 'type', 'allow_email');  // chay function user_data();


    //    PRODUCTS
    $pro_data = pro_data($session_user_id, 'pro_id', 'pro_code', 'pro_name', 'pro_image', 'pro_brand', 'pro_amount', 'pro_detail', 'pro_writer', 'pro_insert_date', 'pro_expired', 'pro_rate','pro_price','pro_saleoff','pro_price_total','pro_type');

	if(user_active($user_data['username']) === false){
		session_destroy();
		header('Location: index.php');
		exit();
	}
//    && $current_file !== 'logout.php'
    if($current_file !== 'changepassword.php'  && $user_data['password_recover'] == 1){
        header('Location: changepassword.php?force');
        exit();
    }
}


$errors = array();
?>
