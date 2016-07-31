<?php

//index
function pro_seafood($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = 0");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){

       echo '
        <li class="cty-col">
            <div><img src="'. $pro_path_img . $row["pro_image"] .'">
                <div class="pro-info">
                    <span>' . $row["pro_name"] . '</span> <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a></div>
            </div>
        </li>
        ';
    }
}
}

function pro_food($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = 1");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){
       echo '
        <li class="cty-col">
            <div><img src="'. $pro_path_img . $row["pro_image"] .'">
                <div class="pro-info">
                    <span>' . $row["pro_name"] . '</span> <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a></div>
            </div>
        </li>
        ';
    }
}
}


function pro_slider($pro_path_img_slider,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){
       echo '
       <li> <img src="'. $pro_path_img_slider . $row["pro_image"] .'">
                    <!--<div class="inf_slider">
          <h3 class="title">' . $row["pro_name"] . '</h3>
          <span class="content">' . $row["pro_detail"] . '</span> </div>-->
       </li>
        ';
    }
}
}


function pro_sub_slider($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){
       echo '
        <li class="cty-col">
            <div><img src="'. $pro_path_img . $row["pro_image"] .'">
                <div class="pro-info">
                    <span>' . $row["pro_name"] . '</span> <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a></div>
            </div>
        </li>
        ';
    }
}
}

function pro_new($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){
        echo'
        <li>
                                <a href="product-detail.php?proCode='.$row["pro_code"].'">
                                    <div class="image"><img src="'. $pro_path_img . $row["pro_image"] .'"></div>
                                    <div class="content">
                                        <h4>' . $row["pro_name"] . '</h4>
                                        <p>' . $row["pro_detail"] . '</p>
                                    </div>
                                </a>
                            </li>
        ';
    }
}
}


function pro_detail($pro_path_img_slider,$pro_file_img){
    $pro_code = $_REQUEST['proCode'];
$pro_item = mysql_query("SELECT * FROM products WHERE pro_code = '$pro_code'");
$row = mysql_fetch_assoc($pro_item);
echo '<div class="title">
                            <h4>' . $row["pro_name"] . '</h4></div>
                        <div class="image"><img src="'.$pro_path_img_slider.$row["pro_image"].'"></div>
                        <div>
                            <p>
                                ' . $row["pro_detail"] . '
                            </p>
                        </div>';
}



//pro_index
function pro_list($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products");
if(mysql_num_rows($pro_item) <> 0){

        if(empty($_POST) === false && empty($errors) === true){

//            111   pro_image 		= ".$_POST['pro_filepload'].",
            $pro_data = "
			     pro_name 		= '".$_POST['pro_name']."',

			     pro_amount 	= '".$_POST['pro_amount']."',
			     pro_detail 	= '".$_POST['pro_detail']."',
			     pro_expired	= '".$_POST['pro_expired']."',
                 pro_price		= '".$_POST['pro_price']."',
                 pro_saleoff	= '".$_POST['pro_saleoff']."',
                 pro_type		= '".$_POST['pro_type']."'
                 "
		      ;
            $pro_code           = $_POST['pro_code'];


//            2222
             if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $target_dir     = "images/products/";
                $target_file    = $target_dir . basename($_FILES['pro_fileUpload']['name']);
                $typeFile       = pathinfo($_FILES['pro_fileUpload']['name'], PATHINFO_EXTENSION);
                $typeFileAllow  = array('png','jpg','jpeg', 'gif');
                if(!in_array(strtolower($typeFile), $typeFileAllow)){
                    $error      = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                }
                $sizeFile       = $_FILES['size'];
                if($sizeFile > 5242880){
                    $error      = "File bạn chọn không được quá 5MB";
                }

                if(file_exists($target_file)){
                    $error      = "File bạn chọn đã tồn tại trên hệ thống";
                }
                if(empty($error)){
                    if(move_uploaded_file($_FILES["pro_fileUpload"]["tmp_name"], $target_file)){
                        echo "Bạn đã upload file thành công";
                    }  else {
                        echo "File bạn vừa upload gặp sự cố";
                    }
                }
            }
//           33333

             print_r($pro_data);
            if(!isset($pro_name) === true){
                echo 'yeu cau nhap ten';
            }else if(!isset($pro_amount) === true){
                 echo 'yeu cau nhap ten';
            }else if(!isset($pro_name) === true){
                 echo 'yeu cau nhap ten';
            }else if(!isset($pro_name) === true){
                 echo 'yeu cau nhap ten';
            }else if(!isset($pro_name) === true){
                 echo 'yeu cau nhap ten';
            }

            else{
//                mysql_query("UPDATE products SET pro_name = 'AAAABBBB' WHERE pro_code = 'M0001NA'");
                echo 'zxczxczxc';
            }




        } else if (empty($errors) === false){
            echo 'ko chay';
        }


    while($row = mysql_fetch_assoc($pro_item)){
       echo '
        <li>
            <div>
                <img src="'. $pro_path_img . $row["pro_image"] .'">
                <div class="pro-info">
                    <span>' . $row["pro_name"] . '</span>
                    <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a>
                </div>
            </div>
            <div class="cty-pro-edit">
                <form method="POST" action="" enctype="multipart/form-data">
                    <ul>
                        <li><label>ten<br><input type="text" name="pro_name" value="'.$row["pro_name"].'"></label></li>
                        <li><label>hinh anh<br><input type="file" name="pro_fileUpload" ></label></li>
                        <!--<li><label>hinh anh lon<br><input type="file" name="pro_fileUpload_big"></label></li>-->
                        <li><label>so luong<br><input type="number" name="pro_amount" value="'.$row["pro_amount"].'"></label></li>
                        <li><label>chi tiet<br><textarea name="pro_detail">'.$row["pro_detail"].'</textarea></label></li>
                        <li><label>han su dung<br><input type="datetime" name="pro_expired" value="'.$row["pro_expired"].'"></label></li>
                        <li><label>gia<br><input type="number" name="pro_price" value="'.$row["pro_price"].'"></label></li>
                        <li><label>giam gia<br><input type="number" name="pro_saleoff" value="'.$row["pro_saleoff"].'"></label></li>
                        <li><label>gia sau khi giam<br><input type="number" name="pro_type" value="'.$row["pro_type"].'"></label></li>
                        <li><label>ma san pham<br><input type="text" name="pro_code" value="'.$row["pro_code"].'" readonly></label></li>
                        <li>
                            <input type="submit" name="pro_update" value="update">
                        </li>
                    </ul>
                </form>
            </div>
        </li>
        ';


    }
}
}


?>

<input readonly>

