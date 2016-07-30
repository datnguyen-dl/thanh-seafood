<?php

//index
function pro_seafood($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = 0");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){

       echo '
        <li class="cty-col">
            <div><img src="'. $pro_path_img . $row["pro_image"] . $pro_file_img .'">
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
            <div><img src="'. $pro_path_img . $row["pro_image"] . $pro_file_img .'">
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
       <li> <img src="'. $pro_path_img_slider . $row["pro_image"] . $pro_file_img .'">
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
            <div><img src="'. $pro_path_img . $row["pro_image"] . $pro_file_img .'">
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
                                    <div class="image"><img src="'. $pro_path_img . $row["pro_image"] . $pro_file_img .'"></div>
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
//pro_index
function pro_list($pro_path_img,$pro_file_img){
    $pro_item = mysql_query("SELECT * FROM products");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){
       echo '
        <li>
            <div>
                <img src="'. $pro_path_img . $row["pro_image"] . $pro_file_img .'">
                <div class="pro-info">
                    <span>' . $row["pro_name"] . '</span>
                    <a href="product-detail.php?proCode='.$row["pro_code"].'">Chi tiết</a>
                </div>
            </div>
            <div class="cty-pro-edit">

            </div>
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
                        <div class="image"><img src="'.$pro_path_img_slider.$row["pro_image"].$pro_file_img.'"></div>
                        <div>
                            <p>
                                ' . $row["pro_detail"] . '
                            </p>
                        </div>';
}
?>
<form method="post" action="">
</form>
