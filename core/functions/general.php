<?php
//VUNG THOI GIAM
date_default_timezone_set('Asia/Ho_Chi_Minh');

//BO DAU
function convert_vi_to_en($strc) {
        $strc = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $strc);
        $strc = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $strc);
        $strc = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strc);
        $strc = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $strc);
        $strc = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $strc);
        $strc = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strc);
        $strc = preg_replace("/(đ)/", 'd', $strc);
        $strc = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $strc);
        $strc = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $strc);
        $strc = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $strc);
        $strc = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $strc);
        $strc = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $strc);
        $strc = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $strc);
        $strc = preg_replace("/(Đ)/", 'D', $strc);
        return $strc;
    }
//PRODUCT
$pro_path_img = 'images/products/';
$pro_path_img_slider = 'images/products/slider/';
$pro_file_img = '.jpg';
//product-adiministrator
function pro_protect_page(){
    if(logged_in() === false){
        header ('location: pro-administrator.php');
        exit();
    }
}

function pro_logged_in_redirect(){
     if(logged_in() === true){
        header ('location: index.php');
        exit();
    }
}

//END PRODUCT

//function email($to, $subject, $body){
//   mail($to, $subject, $body, 'From: somattien@gmail.com');
//}

function logged_in_redirect(){
     if(logged_in() === true){
        header ('location: index.php');
        exit();
    }
}

function protect_page(){
    if(logged_in() === false){
        header ('location: protected.php');
        exit();
    }
}
//ADMIN
function admin_protect(){
    global $user_data;
    if(has_access($user_data['user_id'], 1) === false){
        header ('location: index.php');
        exit();
    }
}


// ham` loai bo cac ky tu dac biet
function array_sanitize(&$item){
    $item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}
	
	
function sanitize($data){
    return htmlentities(strip_tags(mysql_real_escape_string($data)));
}
	
function output_errors($errors){
    $output = array();
    foreach ($errors as $error){ // chuyen $errors la $error
        //echo $error .  ', ';
        $output[] ="<li>" . $error . "</li>" ;
    }
    return "<ul>" . implode(' ', $output) . "</ul>";  // chuyen &ouptut tu mang thanh` chuoi (nguoc voi explode)
}




?>
