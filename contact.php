<?php
  include 'core/init.php';
//protect_page();
  include 'includes/overall/header.php';
  ?>

<div class="wrapper" style="min-height:800px;">
    <div class="cty-sWMain">
        <!--us-product-->
        <div class="container contact">
            <div class="title">
                <h4>Liên Hệ</h4>
            </div>
            <div class="content">

                <h3>DNTN NGUYỆT ANH</h3>
                <span>Chuyên cung cấp sỉ & lẻ hải sản tươi sống.</span>
                <p>GIAO HÀNG TẬN NƠI UY TÍN - CHẤT LƯỢNG.</p>
                <br>
                <p>Tổ 9, Ấp Sua Đủa, xã Vĩnh Hòa Hiệp, Châu Thành, Kiên Giang</p>
                <p class="cty-cl-warning">Hotline:
                    <br><strong>0902 711 243</strong> (a.Đức) - <strong>0917 112 236</strong> (a.Thành)</p>
            </div>
        </div>
        <div id="googleMap" style="width:500px;height:380px;"></div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter=new google.maps.LatLng(9.930587, 105.132918);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


<?php include 'includes/overall/footer.php'; ?>
