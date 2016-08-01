<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

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





echo idate("B") . "B<br>";
echo idate("d") . "d<br>";
echo idate("h") . "h<br>";
echo idate("H") . "H<br>";
echo idate("i") . "i<br>";
echo idate("I") . "I<br>";
echo idate("L") . "L<br>";
echo idate("m") . "m<br>";
echo idate("s") . "s<br>";
echo idate("t") . "t<br>";
echo idate("U") . "U<br>";
echo idate("w") . "w<br>";
echo idate("W") . "W<br>";
echo idate("y") . "y<br>";
echo idate("Y") . "Y<br>";
echo idate("z") . "z<br>";
echo idate("Z") . "Z<br>";

echo $date;

?>
