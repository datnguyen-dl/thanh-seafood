<?php
  include 'core/init.php';
  include 'includes/overall/header.php';
?>
 
<div class="wrapper" style="min-height:800px;">
            <div class="cty-sWMain">
                <!--us-product-->
                <div class="container detail-product">
                    <div class="content">
                        <div class="breadcrumbs">Sản phẩm > Chi tiết sản phẩm</div>


                        <?php pro_detail($pro_path_img_slider,$pro_file_img); ?>


                    </div>
                </div>
            </div>
        </div>

<?php include 'includes/overall/footer.php'; ?>
