<?php
  include 'core/init.php';
pro_protect_page();
include 'includes/overall/pro-header.php';
include 'includes/product.php';
  ?>

    <div class="cty-admin">
        <div class="cty-side-left">
            <div class="cty-content">
                <nav class="cty-menu-tabs">
                    <ul>
                        <li>
                            <input type="radio" name="menu">
                            <label onclick="" for="tab11">Trang chủ</label>
                        </li>
                        <li>
                            <input type="radio" name="menu">
                            <label for="tab12">Sản Phẩm</label>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="cty-side-right">
            <div class="cty-content">
                <ol class="cty-content-tabs">
                    <li>
                        <input id="tab11" type="radio" name="content" >
                        <div> Trang Chủ </div>
                    </li>
                    <li>
                        <input id="tab12" type="radio" name="content" checked>
                        <div class="cty-list-product">
                            <ul style="background-color:rgba(0,0,0,0.1);">
                                <?php pro_create($pro_path_img,$pro_file_img,$user_data['first_name']); ?>
                            </ul>
                            <div class="cty-p10 cty-tC" style="border-top:5px solid rgba(0,0,0,0.2); border-bottom:1px solid rgba(0,0,0,0.2)"><h4>Hải Sản</h4></div>
                            <ul>
                                <?php pro_list_seafood($pro_path_img,$pro_file_img); ?>
                            </ul>
                            <div class="cty-p10 cty-tC" style="border-top:5px solid rgba(0,0,0,0.2); border-bottom:1px solid rgba(0,0,0,0.2)"><h4>Gia Cầm</h4></div>
                            <ul>
                                <?php pro_list_food($pro_path_img,$pro_file_img); ?>
                            </ul>
                            <div class="cty-p10 cty-tC" style="border-top:5px solid rgba(0,0,0,0.2); border-bottom:1px solid rgba(0,0,0,0.2)"><h4>Sản Phẩm Khác</h4></div>
                            <ul>
                                <?php pro_list_other($pro_path_img,$pro_file_img); ?>
                            </ul>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <?php
    if(has_access($session_user_id, 1) === true){
        echo 'Admin! AAAA';
    }else if(has_access($session_user_id, 2) === true){
        echo 'Moderator! BBBB';
    }
?>


        <?php
include 'includes/overall/pro-footer.php';
?>




<script>
$( document ).ready(function() {

        $('.cty-expand-btn').click(function() {
            $('.cty-expand-btn').parent().parent().parent().parent().parent().removeClass('actived');
            $(this).parent().parent().parent().parent().parent().toggleClass('actived');

        });

   /* $('.cty-expand-btn').click(function() {
        $('.cty-expand').addClass('actived');
    });*/
});

</script>
