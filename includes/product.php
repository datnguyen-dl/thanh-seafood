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
        while($row = mysql_fetch_assoc($pro_item)){

               if($row["pro_type"] == 0){
                $selected_one = "selected";
                   $selected_two = " ";
                   $selected_three = " ";
            }else if($row["pro_type"] == 1){
                $selected_two = "selected";
                   $selected_one = " ";
                   $selected_three = " ";
            }else{
                $selected_three = "selected";
                   $selected_two = " ";
                   $selected_two = " ";
            }
            $today = date("Y-m-d");
            echo $pro_id = $row["pro_id"];
//            delete
         /*   if(isset($_POST['delete'])) {
                mysql_query("DELETE FROM products WHERE pro_id = '$pro_id'") ;
                echo "Deleted data successfully\n";
             }else{
                    echo 'khong the delete';
                }*/



//            delete
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
                            <li><label>ma san pham<br><input type="text" name="pro_code" value="'.$row["pro_code"].'" readonly></label></li>
                            <li><label>ten san pham<br><input type="text" name="pro_name" value="'.$row["pro_name"].'"></label></li>
                            <li><label>ten hinh anh<br><input type="text" name="pro_image" value="'.$row["pro_image"].'"></label></li>
                            <li><label>hinh anh<br><input type="file" name="pro_fileUpload" ></label></li>
                            <li><label>hinh anh lon (slider)<br><input type="file" name="pro_fileUpload_slider"></label></li>
                            <li><label>thuong hieu<br><input type="text" name="pro_brand" value="'.$row["pro_brand"].'"></label></li>
                            <li><label>tong so luong<br><input type="number" name="pro_amount" value="'.$row["pro_amount"].'"></label></li>
                            <li><label>nhap noi dung<br><textarea name="pro_detail">'.$row["pro_detail"].'</textarea></label></li>
                            <li><label>nguoi viet<br><input type="text" name="pro_writer" value="'.$row["pro_writer"].'" readonly></label></li>
                            <li><label>ngay nhap<br><input type="text" name="pro_insert_date" value="'.$row["pro_insert_date"].'" readonly></label></li>
                            <li><label>han su dung<br><input type="date" name="pro_expired" value="'.$row["pro_expired"].'"></label></li>
                            <li><label>danh gia<br><input type="number" name="pro_rate" value="'.$row["pro_rate"].'"></label></li>
                            <li><label>gia<br><input type="number" name="pro_price" value="'.$row["pro_price"].'"></label></li>
                            <li><label>giam gia<br><input type="number" name="pro_saleoff" value="'.$row["pro_saleoff"].'"></label></li>
                            <li><label>gia giam sau khi giam gia<br><input type="number" name="pro_price_total" value="'.$row["pro_price_total"].'" readonly></label></li>
                            <li><label>loai<br>
                            <select name="pro_type">
                                    <option value="0" '.$selected_one.'>hai san</option>
                                    <option value="1" '.$selected_two.'>lam san</option>
                                    <option value="2" '.$selected_three.'>san pham khac</option>
                                </select>
                            </label></li>

                            <li>
                                <input type="submit" name="update" value="chinh sua">
                                <input type="reset" name="reset" value="reset">
                                <input type="submit" name="delete" id = "delete" value="delete" onclick="pro_delete()">
                            </li>
                        </ul>
                    </form>

                </div>
            </li>
            ';
        }
        pro_update();
    }

}


function pro_create($pro_path_img,$pro_file_img,$user_firstname){
    $pro_item = mysql_query("SELECT * FROM products");
//    if(mysql_num_rows($pro_item) <> 0){
            $row = mysql_fetch_assoc($pro_item);

        $today = date("Y-m-d");


       $price_total_saleoff =$_POST['pro_price'] - ($_POST['pro_price'] * $_POST['pro_saleoff']) / 100  ;
       $string_pro_code = $_POST['pro_name'];
        $string_pro_code = $string_pro_code[0] . $string_pro_code[1] . idate("y") . idate("m") . idate("d") . idate("h") . idate("i") . idate("s") . $row["pro_id"];
       $string_pro_code = trim($string_pro_code);
        $string_pro_code = str_replace(" ", "", $string_pro_code);
        $string_pro_code = convert_vi_to_en($string_pro_code);
        $string_pro_code = strtoupper($string_pro_code);


       pro_insert();

        echo '
            <li>
                <div>
                <h2>Tao san pham</h2>
                    <img src="'. $pro_path_img . $row["pro_image1"] .'">
                </div>
                <div class="cty-pro-edit">
                    <form  method="POST" action="" enctype="multipart/form-data">
                        <ul>
                            <li><label>ma san pham<br><input type="text" name="pro_code" value="'.$string_pro_code.'" readonly></label></li>
                            <li><label>ten san pham<br><input type="text" name="pro_name" ></label></li>
                            <li><label>ten hinh anh<br><input type="text" name="pro_image" value="'.$pro_image_basename_insert.'" readonly></label></li>
                            <li><label>hinh anh<br><input type="file" name="pro_fileUpload_insert" ></label></li>
                            <li><label>hinh anh lon (slider)<br><input type="file" name="pro_fileUpload_slider_insert"></label></li>
                            <li><label>thuong hieu<br><input type="text" name="pro_brand"></label></li>
                            <li><label>tong so luong<br><input type="number" name="pro_amount" ></label></li>
                            <li><label>nhap noi dung<br><textarea name="pro_detail">nhap text</textarea></label></li>
                            <li><label>nguoi viet<br><input type="text" name="pro_writer" value="'.$user_firstname.'" readonly></label></li>
                            <li><label>ngay nhap<br><input type="text" name="pro_insert_date" value="'.$today.'"></label></li>
                            <li><label>han su dung<br><input type="date" name="pro_expired"></label></li>
                            <li><label>danh gia<br><input type="number" name="pro_rate" value="0"></label></li>
                            <li><label>gia<br><input type="number" name="pro_price"></label></li>
                            <li><label>giam gia<br><input type="number" name="pro_saleoff" value="0"></label></li>
                            <li><label>gia giam sau khi giam gia<br><input type="number" name="pro_price_total" value="'.$price_total_saleoff.'" readonly></label></li>
                            <li><label>loai<br>
                                <select name="pro_type">
                                    <option value="0" selected>hai san</option>
                                    <option value="1">lam san</option>
                                    <option value="2">san pham khac</option>
                                </select>
                            </label></li>
                            <li>
                                <input type="submit" name="create" value="tao san pham">
                                <input type="reset" name="reset" value="reset">
                            </li>
                        </ul>
                    </form>
                </div>
            </li>
            ';

//    }
    return;
}
?>


