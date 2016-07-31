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



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $target_dir = "images/products/";
    $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
/*    $typeFile = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
    $typeFileAllow = array('png','jpg','jpeg', 'gif');
    if(!in_array(strtolower($typeFile), $typeFileAllow)){
        $error = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
    }
    $sizeFile = $_FILES['size'];
    if($sizeFile > 5242880){
        $error = "File bạn chọn không được quá 5MB";
    }

    if(file_exists($target_file)){
        $error = "File bạn chọn đã tồn tại trên hệ thống";
    }

    if(empty($error)){
        if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
            echo "Bạn đã upload file thành công";
        }  else {
            echo "File bạn vừa upload gặp sự cố";
        }
    }*/
}




?>
