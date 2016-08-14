<?php
include 'core/init.php';
include 'includes/overall/header.php';

?>

    <div class="wrapper" style="min-height:800px;">
        <div class="cty-sWMain">
            <!--us-product-->
            <div class="container list-product">
                <?php pro_seafood($pro_path_img,$pro_file_img); ?>
                <?php pro_food($pro_path_img,$pro_file_img); ?>
                <?php pro_other($pro_path_img,$pro_file_img); ?>
            </div>
        </div>
    </div>

    <?php include 'includes/overall/footer.php'; ?>