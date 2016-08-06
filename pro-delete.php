<?php
include 'core/init.php';

if(empty($_POST) === false && empty($errors) === true){
    //    LIST POST
    $pro_id               = $_POST['pro_id'];
    mysql_query("DELETE FROM products WHERE pro_id = '$pro_id'" );
    header('location: pro-index.php?success');
    exit();
}
?>
