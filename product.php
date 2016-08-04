<?php
include 'core/init.php';
include 'includes/overall/header.php';

?>
 
<div class="wrapper" style="min-height:800px;">
            <div class="cty-sWMain">
                <!--us-product-->
                <div class="container list-product">
                    <div class="content">
                        <div class="title">
                            <h4>Sản Phẩm Chính</h4></div>
                        <div class="cty-grid">
                            <ul class="cty-row4">
                                <?php pro_seafood($pro_path_img,$pro_file_img); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="content">
                        <div class="title">
                            <h4>Lâm Sản</h4></div>
                        <div class="cty-grid">
                            <ul class="cty-row4">
                                <?php pro_food($pro_path_img,$pro_file_img); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="content">
                        <div class="title">
                            <h4>Sản Phẩm Khác</h4></div>
                        <div class="cty-grid">
                            <ul class="cty-row4">
                                <?php pro_other($pro_path_img,$pro_file_img); ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<?php include 'includes/overall/footer.php'; ?>
