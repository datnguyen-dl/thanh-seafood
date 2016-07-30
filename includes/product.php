<?php
$pro_link_img = 'images/products/';
function pro_seafood(){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = 0");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){
       echo '
        <li class="cty-col">
            <div><img src="' . $row["pro_image"] . '">
                <div class="pro-info">
                    <h4>' . $row["pro_name"] . '</h4> <a href="product-detail.php?' . $row["pro_code"] . '">Chi tiết</a></div>
            </div>
        </li>
        ';
    }
}
}

function pro_food(){
    $pro_item = mysql_query("SELECT * FROM products WHERE pro_type = 1");
if(mysql_num_rows($pro_item) <> 0){
    while($row = mysql_fetch_assoc($pro_item)){
       echo '
        <li class="cty-col">
            <div><img src="' . $row["pro_image"] . '">
                <div class="pro-info">
                    <h4>' . $row["pro_name"] . '</h4> <a href="product-detail.php?' . $row["pro_code"] . '">Chi tiết</a></div>
            </div>
        </li>
        ';
    }
}
}



?>
