  <?php
  include 'core/init.php';
pro_protect_page();
include 'includes/overall/pro-header.php';
  ?>

<div class="cty-admin">
    <div class="cty-side-left">
        <nav>
            <ul>
                <li><input type="radio" name="menu"><label for="tab11">tab11</label></li>
                <li><input type="radio" name="menu"><label for="tab12">tab12</label></li>
            </ul>
        </nav>
    </div>
    <div class="cty-side-right">
        <div class="cty-content">
            <ol>
                <li><input id="tab11" type="radio" name="content"><div> content 1 </div></li>
                <li><input id="tab12" type="radio" name="content"><div> content 2 </div></li>
                
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

