<?php
include 'core/init.php';

if(empty($_POST) === false && empty($errors) === true){
            $today = date("Y-m-d");
//    DUONG DAN HINH ANH
            $path_image                     = "images/products/";
            $path_image_slider              = "images/products/slider/";
//    TEN HINH ANH CHON TU LOCAL
            $pro_image_basename             = basename($_FILES['pro_fileUpload']['name']);
            $pro_image_basename_slider      = basename($_FILES['pro_fileUpload_slider']['name']);
//    LIST POST
            $pro_name               = $_POST['pro_name'];
            $pro_image              = $pro_image_basename;
            $pro_brand              = $_POST['pro_brand'];
            $pro_amount             = $_POST['pro_amount'];
            $pro_detail             = $_POST['pro_detail'];
            $pro_writer             = $_POST['pro_writer'];
            $pro_insert_date        = $today;
            $pro_expired            = $_POST['pro_expired'];
            $pro_rate               = $_POST['pro_rate'];
            $pro_price              = $_POST['pro_price'];
            $pro_saleoff            = $_POST['pro_saleoff'];
            $pro_price_total        = $_POST['pro_price_total'];
            $pro_type               = $_POST['pro_type'];
//    DOI TEN LOAI
/*    if($pro_type == 1){
        $pro_type = 'hai san';
    }else if($pro_type == 2){
        $pro_type = 'lam san';
    }else if($pro_type == 3){
        $pro_type = 'san pham khac';
    }*/
//    TAO MA SAN PHAM
        $pro_code = $pro_name;
        $pro_code = $pro_code[0] . $pro_code[1] . idate("y") . idate("m") . idate("d") . idate("h") . idate("i") . idate("s") . $row["pro_id"];
        $pro_code = trim($pro_code);
        $pro_code = str_replace(" ", "", $pro_code);
        $pro_code = convert_vi_to_en($pro_code);
        $pro_code = strtoupper($pro_code);
//    TINH GIA SAU KHI GIAM
        $pro_price_total =$pro_price - ($pro_price * $pro_saleoff) / 100  ;
//    INSERT-SELECT CHO TITLE
        $pro_data_select = "`pro_id`, `pro_code`, `pro_name`, `pro_image`, `pro_brand`, `pro_amount`, `pro_detail`, `pro_writer`, `pro_insert_date`, `pro_expired`, `pro_rate`, `pro_price`, `pro_saleoff`, `pro_price_total`, `pro_type`";
//    INSERT-VALUE LAY GIA TRI
        $pro_data_value = "NULL, '".$pro_code."', '".$pro_name."', '".$pro_image."', '".$pro_brand."', '".$pro_amount."', '".$pro_detail."', '".$pro_writer."', '".$pro_insert_date."', '".$pro_expired."', '".$pro_rate."', '".$pro_price."', '".$pro_saleoff."', '".$pro_price_total."', '".$pro_type."'";


        $pro_image_insert   = "pro_image = '".$pro_image_basename_insert."'";
        $pro_code_insert    = $_POST['pro_code'];
 //    DOI TEN LOAI
    if($pro_type == 0){
        $selected_zero = "selected";
        $selected_one = " ";
        $selected_two = " ";
    }else if($pro_type == 1){
        $selected_one = "selected";
        $selected_zero = " ";
        $selected_two = " ";
    }else if($pro_type == 2){
        $selected_two = "selected";
        $selected_zero = " ";
        $selected_one = " ";
    }
//    PRINT PRODUCT
    echo '
    <a href="pro-index.php">tro ve trang pro-insert</a>
    <br>
hinh anh <br>
<img src="'.$path_image.$pro_image.'"><br>
hinh anh slider <br>
<img src="'.$path_image_slider.$pro_image.'"><br>
<from method="post" action="">
    <ul>
    <li><label>ma san pham<br><input type="text" name="pro_code" value="'.$pro_code.'" readonly></label></li>
    <li><label>ten san pham<br><input type="text" name="pro_name" value="'.$pro_name.'"></label></li>
    <li><label>hinh anh<br><input type="text" name="pro_image" value="'.$pro_image.'" readonly></label></li>
    <li><label>thuong hieu<br><input type="text" name="pro_brand" value="'.$pro_brand.'"></label></li>
    <li><label>tong so luong<br><input type="text" name="pro_amount" value="'.$pro_amount.'"></label></li>
    <li><label>nhap noi dung<br><textarea name="pro_detail">'.$pro_detail.'</textarea></label></li>
    <li><label>nguoi viet<br><input type="text" name="pro_writer" value="'.$pro_writer.'" readonly></label></li>
    <li><label>ngay nhap<br><input type="text" name="pro_insert_date" value="'.$pro_insert_date.'" readonly></label></li>
    <li><label>han su dung<br><input type="text" name="pro_expired" value="'.$pro_expired.'" readonly></label></li>
    <li><label>danh gia<br><input type="text" name="pro_rate" value="'.$pro_rate.'"></label></li>
    <li><label>gia<br><input type="text" name="pro_price" value="'.$pro_price.'" readonly></label></li>
    <li><label>giam gia<br><input type="text" name="pro_saleoff" value="'.$pro_saleoff.'" readonly></label></li>
    <li><label>gia giam sau khi giam gia<br><input type="text" name="pro_price_total" value="'.$pro_price_total.'" readonly></label></li>
    <li><label>loai<br>
    <select name="pro_type">
        <option value="0" '.$selected_zero.'>hai san</option>
        <option value="1" '.$selected_one.'>lam san</option>
        <option value="2" '.$selected_two.'>san pham khac</option>
    </select>
    </label></li>
    <li>
        <input type="submit" name="create" value="dong y tao">
        <a href="pro-index.php">tro ve trang pro-insert</a>
    </li>

</ul>
</from>
    ';
//    ADD FUNCTION
    pro_add_image();
    pro_add_image_slider();
//    INSERT MAIN
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
}else{
    if(empty($pro_image_basename) === false){
        mysql_query("INSERT INTO products($pro_data_select) VALUES ($pro_data_value)" );
//        mysql_query("UPDATE products SET $pro_image_insert WHERE pro_code = '$pro_code_insert'");
        header('location: pro-index.php?success');
		exit();
    }else{
        echo 'khong co hinh upload';
    }
}

}
?>
