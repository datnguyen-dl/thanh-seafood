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
                            <label onclick="" for="tab11">home</label>
                        </li>
                        <li>
                            <input type="radio" name="menu">
                            <label for="tab12">product</label>
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
                        <div> home </div>
                    </li>
                    <li>
                        <input id="tab12" type="radio" name="content" checked>
                        <div class="cty-list-product">
                            <ul>
                                <?php pro_list($pro_path_img,$pro_file_img); ?>

                                <?php pro_create($pro_path_img,$pro_file_img); ?>
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
