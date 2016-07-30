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

?>
