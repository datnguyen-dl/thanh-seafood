<?php
/*
$pro_data = mysql_query("SELECT * FROM products");
if(mysql_num_rows($pro_data) <> 0){
    while($row = mysql_fetch_assoc($pro_data)){
        print_r($row);
    }
}
*/
//    PRODUCT
function pro_data(){
			$data = array();
			$pro_id = (int)$pro_id;

			$func_num_args = func_num_args();//Không cần một biến quy định nào, nó cứ thế mà lấy thôi. thuong duoc ket hop voi ham` func_get_args()
			$func_get_args = func_get_args();//hàm dùng để lấy tất cả biến được truyền vào trong hàm thành một mảng.
			//echo $func_num_args;
			//print_r($func_get_args);
			if($func_num_args > 1){
				unset($func_get_args[0]); // xoa 1 phan tu trong array
				$fields ='' .  implode (', ', $func_get_args) . '';
				//echo "SELECT $fields FROM products WHERE pro_id = $pro_id";
				$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM products")); // associative array la mang ket hop ('ten' => gia tri)
				return $data;
			}
}



function pro_update(){
    if(empty($_POST) === false && empty($errors) === true){

            $pro_image_basename = basename($_FILES['pro_fileUpload']['name']);
            $pro_image_basename_slider = basename($_FILES['pro_fileUpload_slider']['name']);
            $pro_data = "
			     pro_name 		= '".$_POST['pro_name']."',
                 pro_brand 		= '".$_POST['pro_brand']."',
			     pro_amount 	= '".$_POST['pro_amount']."',
			     pro_detail 	= '".$_POST['pro_detail']."',
			     pro_expired	= '".$_POST['pro_expired']."',
                 pro_price		= '".$_POST['pro_price']."',
                 pro_saleoff	= '".$_POST['pro_saleoff']."',
                 pro_type		= '".$_POST['pro_type']."'
                 ";
            $pro_image          = "
                pro_image      = '".$pro_image_basename."'
                ";
            $pro_code           = $_POST['pro_code'];

            //print_r($pro_image_basename_slider);
//            1111
             if ($_SERVER['REQUEST_METHOD'] == "POST") {
// hinh anh
                  if(isset($pro_image_basename)){

                      $target_dir     = "images/products/";
                        $target_file    = $target_dir . basename($_FILES['pro_fileUpload']['name']);
                        $typeFile       = pathinfo($_FILES['pro_fileUpload']['name'], PATHINFO_EXTENSION);
                      //echo $target_dir;
                        $typeFileAllow          = array('png','jpg','jpeg', 'gif');
                        if(!in_array(strtolower($typeFile), $typeFileAllow)){
                            $error              = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                        }
                        $sizeFile               = $_FILES['size'];
                        if($sizeFile > 5242880){
                            $error              = "File bạn chọn không được quá 5MB";
                        }

                        if(file_exists($target_file)){
                            $error              = "File bạn chọn đã tồn tại trên hệ thống";
                        }
                        if(empty($error)){
                            if(move_uploaded_file($_FILES["pro_fileUpload"]["tmp_name"], $target_file)){
                                echo "Bạn đã upload file thành công";
                            }  else {
                                echo "File bạn vừa upload gặp sự cố";
                            }
                        }
                 }else{
                      echo 'hinh anh khong ton tai';
                  }
// hinh anh slider
                 if(isset($pro_image_basename_slider)){

                       $target_dir_slider      = "images/products/slider/";
                        $target_file_slider     = $target_dir_slider . basename($_FILES['pro_fileUpload_slider']['name']);
                        $typeFile_slider        = pathinfo($_FILES['pro_fileUpload_slider']['name'], PATHINFO_EXTENSION);


                        $typeFileAllow  = array('png','jpg','jpeg', 'gif');
                        if(!in_array(strtolower($typeFile_slider), $typeFileAllow)){
                            $error      = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                        }
                        $sizeFile       = $_FILES['size'];
                        if($sizeFile > 5242880){
                            $error      = "File bạn chọn không được quá 5MB";
                        }

                        if(file_exists($target_file_slider)){
                            $error      = "File bạn chọn đã tồn tại trên hệ thống";
                        }
                        if(empty($error)){
                            if(move_uploaded_file($_FILES["pro_fileUpload_slider"]["tmp_name"], $target_file_slider)){
                                echo "Bạn đã upload file slider thành công";
                            }  else {
                                echo "File bạn vừa upload slider gặp sự cố";
                            }
                        }
                 }else{
                     echo 'hinh anh slider khong ton tai';
                 }

            }
            if(empty($_POST['pro_name']) === true){
                echo 'yeu cau nhap ten';
            }else if(empty($_POST['pro_amount']) === true){
                 echo 'yeu cau nhap so luong';
            }else if(empty($_POST['pro_detail']) === true){
                 echo 'yeu cau nhap chi tiet';
            }else if(empty($_POST['pro_expired']) === true){
                 echo 'yeu cau nhap ngay het hang';
            }else if(empty($_POST['pro_price']) === true){
                 echo 'yeu cau nhap gia';

            }
            else{
                    mysql_query("UPDATE products SET $pro_data WHERE pro_code = '$pro_code'");
                if(empty($pro_image_basename) === false){
                     mysql_query("UPDATE products SET $pro_image WHERE pro_code = '$pro_code'");
                    echo $pro_image;
                }else{
                    echo 'khong co hinh upload';
                }
            }
        } else if (empty($errors) === false){
            echo 'ko chay';
        }
}

//****************************************************************************************


function pro_insert($user_firstname){

    if(empty($_POST) === false && empty($errors) === true){
            $pro_image_basename_insert = basename($_FILES['pro_fileUpload_insert']['name']);
            $pro_image_basename_slider_insert = basename($_FILES['pro_fileUpload_slider_insert']['name']);

            $pro_data_select = "`pro_id`, `pro_code`, `pro_name`, `pro_image`, `pro_brand`, `pro_amount`, `pro_detail`, `pro_writer`, `pro_insert_date`, `pro_expired`, `pro_rate`, `pro_price`, `pro_saleoff`, `pro_price_total`, `pro_type`";

            $pro_code               = $_POST['pro_code'];
            $pro_name               = $_POST['pro_name'];
            $pro_image              = $_POST['pro_image'];
            $pro_brand              = $_POST['pro_brand'];
            $pro_amount             = $_POST['pro_amount'];
            $pro_detail             = $_POST['pro_detail'];
            $pro_writer             = $_POST['pro_writer'];
            $pro_insert_date        = $_POST['pro_insert_date'];
            $pro_expired            = $_POST['pro_expired'];
            $pro_rate               = $_POST['pro_rate'];
            $pro_price              = $_POST['pro_price'];
            $pro_saleoff            = $_POST['pro_saleoff'];
            $pro_price_total        = $_POST['pro_price_total'];
            $pro_type               = $_POST['pro_type'];

            $pro_data_value = "NULL, '".$pro_code."', '".$pro_name."', '".$pro_image."', '".$pro_brand."', '".$pro_amount."', '".$pro_detail."', '".$pro_writer."', '".$pro_insert_date."', '".$pro_expired."', '".$pro_rate."', '".$pro_price."', '".$pro_saleoff."', '".$pro_price_total."', '".$pro_type."'";
            $pro_image_insert   = "pro_image = '".$pro_image_basename_insert."'";

            $pro_code_insert    = $_POST['pro_code'];

//            2222
             if ($_SERVER['REQUEST_METHOD'] == "POST") {
// hinh anh
                  if(isset($pro_image_basename_insert)){

                      $target_dir     = "images/products/";
                        $target_file    = $target_dir . basename($_FILES['pro_fileUpload_insert']['name']);
                        $typeFile       = pathinfo($_FILES['pro_fileUpload_insert']['name'], PATHINFO_EXTENSION);

                        $typeFileAllow          = array('png','jpg','jpeg', 'gif');
                        if(!in_array(strtolower($typeFile), $typeFileAllow)){
                            $error              = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                        }
                        $sizeFile               = $_FILES['size'];
                        if($sizeFile > 5242880){
                            $error              = "File bạn chọn không được quá 5MB";
                        }

                        if(file_exists($target_file)){
                            $error              = "File bạn chọn đã tồn tại trên hệ thống";
                        }
                        if(empty($error)){
                            if(move_uploaded_file($_FILES["pro_fileUpload_insert"]["tmp_name"], $target_file)){
                                echo "Bạn đã upload file thành công";
                            }  else {
                                echo "File bạn vừa upload gặp sự cố";
                            }
                        }
                 }else{
                     echo 'hinh anh khong ton tai';
                 }
// hinh anh slider
                 if(isset($pro_image_basename_slider_insert)){

                       $target_dir_slider      = "images/products/slider/";
                        $target_file_slider     = $target_dir_slider . basename($_FILES['pro_fileUpload_slider_insert']['name']);
                        $typeFile_slider        = pathinfo($_FILES['pro_fileUpload_slider_insert']['name'], PATHINFO_EXTENSION);


                        $typeFileAllow_slider  = array('png','jpg','jpeg', 'gif');
                        if(!in_array(strtolower($typeFile_slider), $typeFileAllow_slider)){
                            $error      = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                        }
                        $sizeFile_slider       = $_FILES['size'];
                        if($sizeFile > 5242880){
                            $error      = "File bạn chọn không được quá 5MB";
                        }

                        if(file_exists($target_file_slider)){
                            $error      = "File bạn chọn đã tồn tại trên hệ thống";
                        }
                        if(empty($error)){
                            if(move_uploaded_file($_FILES["pro_fileUpload_slider_insert"]["tmp_name"], $target_file_slider)){
                                echo "Bạn đã upload file slider thành công";
                            }  else {
                                echo "File bạn vừa upload slider gặp sự cố";
                            }
                        }
                 }else{
                     echo 'hinh anh slider khong ton tai';
                 }

            }
            if(empty($_POST['pro_name']) === true){
                echo '*yeu cau nhap ten san pham';
            }else if(empty($_POST['pro_brand']) === true){
                 echo '*yeu cau nhap thuong hieu san pham';
            }else if(empty($_POST['pro_amount']) === true){
                 echo '*yeu cau nhap so luong san pham';
            }else if(empty($_POST['pro_detail']) === true){
                 echo '*yeu cau nhap chi tiet san pham';
            }else if(empty($_POST['pro_expired']) === true){
                 echo '*yeu cau nhap ngay het hang cua san pham';
            }else if(empty($_POST['pro_price']) === true){
                 echo '*yeu cau nhap gia san pham';
            }
            else{

                if(empty($pro_image_basename_insert) === false){
                    mysql_query("INSERT INTO products($pro_data_select) VALUES ($pro_data_value)" );
                     mysql_query("UPDATE products SET $pro_image_insert WHERE pro_code = '$pro_code_insert'");

                }else{
                    echo 'khong co hinh upload';
                }
            }
        } else if (empty($errors) === false){
            echo 'ko chay';
        }
}



?>
