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

function pro_other($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = 2");
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
    $pro_item = mysql_query("SELECT * FROM products ORDER BY pro_id");
if(mysql_num_rows($pro_item) <> 0){
    $count = 0;
    while($count < 4 && $row = mysql_fetch_assoc($pro_item)){
       echo '
       <li> <img src="'. $pro_path_img_slider . $row["pro_image"] .'">
                    <!--<div class="inf_slider">
          <h3 class="title">' . $row["pro_name"] . '</h3>
          <span class="content">' . $row["pro_detail"] . '</span> </div>-->
       </li>
        ';
        $count++;
    }
}
}


function pro_sub_slider($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products ORDER BY pro_rate DESC");
if(mysql_num_rows($pro_item) <> 0){
    $count = 0;
    while($count < 8 && $row = mysql_fetch_assoc($pro_item)){
       echo '
        <li>
            <div><img src="'. $pro_path_img . $row["pro_image"] .'">
                <div class="pro-info">
                    <span>' . $row["pro_name"] . '</span> <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a></div>
            </div>
        </li>
        ';
        $count++;
    }
}
}

function pro_new($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products ORDER BY pro_id");
if(mysql_num_rows($pro_item) <> 0){
    $count = 0;
    while($count < 6 && $row = mysql_fetch_assoc($pro_item)){
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
        $count++;
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

//SEAFOOD
function pro_list_seafood($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = '0'");
    if(mysql_num_rows($pro_item) <> 0){
        while($row = mysql_fetch_assoc($pro_item)){

           echo '
            <li>
                <div>
                    <ul>
                        <li><img src="'. $pro_path_img . $row["pro_image"] .'" height="100%"></li>
                        <li>
                            <span><strong>'.$row["pro_name"].'</strong></span><span>&nbsp;&nbsp;</span>
                            <span>ngay: '.$row["pro_insert_date"].'</span><span>&nbsp;&nbsp;</span>
                            <span>gia: '.$row["pro_price_total"].'</span><span>&nbsp;&nbsp;</span>
                            <span>danh gia: '.$row["pro_rate"].'</span>
                            <div>
                                <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a>
                                <span> - </span>
                                <button class="cty-expand-btn">Chinh sua</button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cty-pro-edit">
                     <div class="cty-info">
                        <h2>'.$row["pro_name"].'</h2>
                        <img src="'. $pro_path_img . $row["pro_image"] .'" height="100%">
                     </div>
                    <form method="POST" action="pro-update.php" enctype="multipart/form-data">
                        <ul>
                            <li><input type="hidden" name="pro_id" value="'.$row["pro_id"].'" readonly></li>
                            <li><label>Mã sản phẩm<br><input type="text" name="pro_code" value="'.$row["pro_code"].'" readonly></label></li>
                            <li><label>Tên sản phẩm<br><input type="text" name="pro_name" value="'.$row["pro_name"].'"></label></li>
                            <li><label>Tên hình ảnh<br><input type="text" name="pro_image" value="'.$row["pro_image"].'" readonly></label></li>
                            <li><label>Upload hình ảnh<br><input type="file" name="pro_fileUpload" ></label></li>
                            <li><label>Upload hình ảnh lớn (slider)<br><input type="file" name="pro_fileUpload_slider"></label></li>
                            <li><label>Thương Hiệu<br><input type="text" name="pro_brand" value="'.$row["pro_brand"].'"></label></li>
                            <li><label>Tổng số lượng (kg), (cái), ...<br><input type="number" name="pro_amount" value="'.$row["pro_amount"].'"></label></li>
                            <li><label>Nhập nội dung<br><textarea name="pro_detail" cols="60" rows="7">'.$row["pro_detail"].'</textarea></label></li>
                            <li><label><input type="hidden" name="pro_writer" value="'.$row["pro_writer"].'" readonly></label></li>
                            <li><label><input type="hidden" name="pro_insert_date" value="'.$row["pro_insert_date"].'" readonly></label></li>
                            <li><label>Hạn sử dụng<br><input type="date" name="pro_expired" value="'.$row["pro_expired"].'"></label></li>
                            <li><label>Đánh giá<br><input type="number" name="pro_rate" value="'.$row["pro_rate"].'"></label></li>
                            <li><label>Giá sản phẩm (vnd)<br><input type="number" name="pro_price" value="'.$row["pro_price"].'"></label></li>
                            <li><label>Giảm giá (%)<br><input type="number" name="pro_saleoff" value="'.$row["pro_saleoff"].'"></label></li>
                            <li><label>Giá sau khi giảm giá<br><input type="number" name="pro_price_total" value="'.$row["pro_price_total"].'" readonly></label></li>
                            <li><label>Loại<br>
                            <select name="pro_type">
                                    <option value="0" '.$selected_one.'>Hải Sản</option>
                                    <option value="1" '.$selected_two.'>Gia Cầm</option>
                                    <option value="2" '.$selected_three.'>Sản Phẩm Khác</option>
                                </select>
                            </label></li>
                            <li><input type="submit" name="update" value="SỬA"></li>
                            <li><input type="reset" name="reset" value="PHỤC HỒI"></li>
                        </ul>
                    </form>
                    <form method="POST" action="pro-delete.php">
                        <input type="hidden" name="pro_id" value="'.$row["pro_id"].'" readonly>
                        <input type="submit" name="pro-delete" value="XÓA">
                    </form>

                </div>
            </li>
            ';
        }
    }
}
//FOOD
function pro_list_food($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = '1'");
    if(mysql_num_rows($pro_item) <> 0){
        while($row = mysql_fetch_assoc($pro_item)){

           echo '
            <li>
                <div>
                    <ul>
                        <li><img src="'. $pro_path_img . $row["pro_image"] .'" height="100%"></li>
                        <li>
                            <span><strong>'.$row["pro_name"].'</strong></span><span>&nbsp;&nbsp;</span>
                            <span>ngay: '.$row["pro_insert_date"].'</span><span>&nbsp;&nbsp;</span>
                            <span>gia: '.$row["pro_price_total"].'</span><span>&nbsp;&nbsp;</span>
                            <span>danh gia: '.$row["pro_rate"].'</span>
                            <div>
                                <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a>
                                <span> - </span>
                                <button class="cty-expand-btn">Chinh sua</button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cty-pro-edit">
                     <div class="cty-info">
                        <h2>'.$row["pro_name"].'</h2>
                        <img src="'. $pro_path_img . $row["pro_image"] .'" height="100%">
                     </div>
                    <form method="POST" action="pro-update.php" enctype="multipart/form-data">
                        <ul>
                            <li><input type="hidden" name="pro_id" value="'.$row["pro_id"].'" readonly></li>
                            <li><label>Mã sản phẩm<br><input type="text" name="pro_code" value="'.$row["pro_code"].'" readonly></label></li>
                            <li><label>Tên sản phẩm<br><input type="text" name="pro_name" value="'.$row["pro_name"].'"></label></li>
                            <li><label>Tên hình ảnh<br><input type="text" name="pro_image" value="'.$row["pro_image"].'" readonly></label></li>
                            <li><label>Upload hình ảnh<br><input type="file" name="pro_fileUpload" ></label></li>
                            <li><label>Upload hình ảnh lớn (slider)<br><input type="file" name="pro_fileUpload_slider"></label></li>
                            <li><label>Thương Hiệu<br><input type="text" name="pro_brand" value="'.$row["pro_brand"].'"></label></li>
                            <li><label>Tổng số lượng (kg), (cái), ...<br><input type="number" name="pro_amount" value="'.$row["pro_amount"].'"></label></li>
                            <li><label>Nhập nội dung<br><textarea name="pro_detail" cols="60" rows="7">'.$row["pro_detail"].'</textarea></label></li>
                            <li><label><input type="hidden" name="pro_writer" value="'.$row["pro_writer"].'" readonly></label></li>
                            <li><label><input type="hidden" name="pro_insert_date" value="'.$row["pro_insert_date"].'" readonly></label></li>
                            <li><label>Hạn sử dụng<br><input type="date" name="pro_expired" value="'.$row["pro_expired"].'"></label></li>
                            <li><label>Đánh giá<br><input type="number" name="pro_rate" value="'.$row["pro_rate"].'"></label></li>
                            <li><label>Giá sản phẩm (vnd)<br><input type="number" name="pro_price" value="'.$row["pro_price"].'"></label></li>
                            <li><label>Giảm giá (%)<br><input type="number" name="pro_saleoff" value="'.$row["pro_saleoff"].'"></label></li>
                            <li><label>Giá sau khi giảm giá<br><input type="number" name="pro_price_total" value="'.$row["pro_price_total"].'" readonly></label></li>
                            <li><label>Loại<br>
                            <select name="pro_type">
                                    <option value="0" '.$selected_one.'>Hải Sản</option>
                                    <option value="1" '.$selected_two.'>Gia Cầm</option>
                                    <option value="2" '.$selected_three.'>Sản Phẩm Khác</option>
                                </select>
                            </label></li>
                            <li><input type="submit" name="update" value="SỬA"></li>
                            <li><input type="reset" name="reset" value="PHỤC HỒI"></li>
                        </ul>
                    </form>
                    <form method="POST" action="pro-delete.php">
                        <input type="hidden" name="pro_id" value="'.$row["pro_id"].'" readonly>
                        <input type="submit" name="pro-delete" value="XÓA">
                    </form>

                </div>
            </li>
            ';
        }
    }
}
//OTHER
function pro_list_other($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = '2'");
    if(mysql_num_rows($pro_item) <> 0){
        while($row = mysql_fetch_assoc($pro_item)){

           echo '
            <li>
                <div>
                    <ul>
                        <li><img src="'. $pro_path_img . $row["pro_image"] .'" height="100%"></li>
                        <li>
                            <span><strong>'.$row["pro_name"].'</strong></span><span>&nbsp;&nbsp;</span>
                            <span>ngay: '.$row["pro_insert_date"].'</span><span>&nbsp;&nbsp;</span>
                            <span>gia: '.$row["pro_price_total"].'</span><span>&nbsp;&nbsp;</span>
                            <span>danh gia: '.$row["pro_rate"].'</span>
                            <div>
                                <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a>
                                <span> - </span>
                                <button class="cty-expand-btn">Chinh sua</button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cty-pro-edit">
                     <div class="cty-info">
                        <h2>'.$row["pro_name"].'</h2>
                        <img src="'. $pro_path_img . $row["pro_image"] .'" height="100%">
                     </div>
                    <form method="POST" action="pro-update.php" enctype="multipart/form-data">
                        <ul>
                            <li><input type="hidden" name="pro_id" value="'.$row["pro_id"].'" readonly></li>
                            <li><label>Mã sản phẩm<br><input type="text" name="pro_code" value="'.$row["pro_code"].'" readonly></label></li>
                            <li><label>Tên sản phẩm<br><input type="text" name="pro_name" value="'.$row["pro_name"].'"></label></li>
                            <li><label>Tên hình ảnh<br><input type="text" name="pro_image" value="'.$row["pro_image"].'" readonly></label></li>
                            <li><label>Upload hình ảnh<br><input type="file" name="pro_fileUpload" ></label></li>
                            <li><label>Upload hình ảnh lớn (slider)<br><input type="file" name="pro_fileUpload_slider"></label></li>
                            <li><label>Thương Hiệu<br><input type="text" name="pro_brand" value="'.$row["pro_brand"].'"></label></li>
                            <li><label>Tổng số lượng (kg), (cái), ...<br><input type="number" name="pro_amount" value="'.$row["pro_amount"].'"></label></li>
                            <li><label>Nhập nội dung<br><textarea name="pro_detail" cols="60" rows="7">'.$row["pro_detail"].'</textarea></label></li>
                            <li><label><input type="hidden" name="pro_writer" value="'.$row["pro_writer"].'" readonly></label></li>
                            <li><label><input type="hidden" name="pro_insert_date" value="'.$row["pro_insert_date"].'" readonly></label></li>
                            <li><label>Hạn sử dụng<br><input type="date" name="pro_expired" value="'.$row["pro_expired"].'"></label></li>
                            <li><label>Đánh giá<br><input type="number" name="pro_rate" value="'.$row["pro_rate"].'"></label></li>
                            <li><label>Giá sản phẩm (vnd)<br><input type="number" name="pro_price" value="'.$row["pro_price"].'"></label></li>
                            <li><label>Giảm giá (%)<br><input type="number" name="pro_saleoff" value="'.$row["pro_saleoff"].'"></label></li>
                            <li><label>Giá sau khi giảm giá<br><input type="number" name="pro_price_total" value="'.$row["pro_price_total"].'" readonly></label></li>
                            <li><label>Loại<br>
                            <select name="pro_type">
                                    <option value="0" '.$selected_one.'>Hải Sản</option>
                                    <option value="1" '.$selected_two.'>Gia Cầm</option>
                                    <option value="2" '.$selected_three.'>Sản Phẩm Khác</option>
                                </select>
                            </label></li>
                            <li><input type="submit" name="update" value="SỬA"></li>
                            <li><input type="reset" name="reset" value="PHỤC HỒI"></li>
                        </ul>
                    </form>
                    <form method="POST" action="pro-delete.php">
                        <input type="hidden" name="pro_id" value="'.$row["pro_id"].'" readonly>
                        <input type="submit" name="pro-delete" value="XÓA">
                    </form>

                </div>
            </li>
            ';
        }
    }
}
//CREATE
function pro_create($pro_path_img,$pro_file_img,$user_firstname){
    $pro_item = mysql_query("SELECT * FROM products");
    $row = mysql_fetch_assoc($pro_item);

        echo '
            <li class="actived">
                <div>
                <div>
                    <div><div class="cty-p10"><button class="cty-expand-btn cty-p10">TẠO SẢN PHẨM</button></div></div>
                </div>

                </div>
                <div class="cty-pro-edit">
                 <div class="cty-info">
                        <h2>TẠO SẢN PHẨM</h2>
                     </div>
                    <form  method="POST" action="pro-insert.php" enctype="multipart/form-data">
                        <ul>
                            <li><label>Tên sản phẩm<br><input type="text" name="pro_name" ></label></li>
                            <li><label>Upload hình ảnh<br><input type="file" name="pro_fileUpload" ></label></li>
                            <li><label>Upload hình ảnh lớn (slider)<br><input type="file" name="pro_fileUpload_slider"></label></li>
                            <li><label>Thương Hiệu<br><input type="text" name="pro_brand"></label></li>
                            <li><label>Tổng số lượng (kg), (cái), ...<br><input type="number" name="pro_amount" ></label></li>
                            <li><label>Nhập nội dung<br><textarea id="noise" class="widgEditor nothing" name="pro_detail" cols="60" rows="7">nhap text</textarea></label></li>
                            <li><label><input type="hidden" name="pro_writer" value="'.$user_firstname.'" readonly></label></li>
                            <li><label>Hạn sử dụng<br><input type="date" name="pro_expired"></label></li>
                            <li><label>Đánh giá<br><input type="number" name="pro_rate" value="0"></label></li>
                            <li><label>Giá sản phẩm (vnd)<br><input type="number" name="pro_price"></label></li>
                            <li><label>Giảm giá (%)<br><input type="number" name="pro_saleoff" value="0"></label></li>
                            <li><label>Loại<br>
                                <select name="pro_type">
                                    <option value="0" selected>Hải Sản</option>
                                    <option value="1">Gia Cầm</option>
                                    <option value="2">Sảm Phẩm Khác</option>
                                </select>
                            </label></li>
                            <li><input type="submit" name="create" value="TẠO SẢN PHẨM"></li>
                            <li><input type="reset" name="reset" value="PHỤC HỒI"></li>
                        </ul>
                    </form>
                </div>
            </li>
            ';
}
?>
