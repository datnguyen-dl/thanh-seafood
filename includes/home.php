    <!--slider-->
    <div class="slider-header">
        <div class="slider-container">
            <button><i class="material-icons">chevron_left</i></button>
            <button><i class="material-icons">chevron_right</i></button>
            <ul>
               <?php pro_slider($pro_path_img_slider,$pro_file_img); ?>

            </ul>
        </div>
    </div>

    <!--product-favourite-->
    <div class="container pro-fav">
        <div class="content cty-sWMain">
            <div class="title cty-row2">
                <div class="cty-col cty-tU">
                    <h4>Sản Phẩm Được Ưa Chuộng</h4>
                </div>
                <div class="cty-col cty-tR"><a href="#">Xem thêm >></a></div>
            </div>
            <div class="cty-grid slider-container">
                <button><i class="material-icons">chevron_left</i></button>
                <button><i class="material-icons">chevron_right</i></button>
                <ul class="cty-row4">
                   <?php pro_sub_slider($pro_path_img,$pro_file_img); ?>
                </ul>
            </div>
        </div>
    </div>
    <!--company-info-->
    <div class="container company-info">
        <div class="content cty-sWMain">
            <div class="board-info">
                <h3>DNTN NGUYỆT ANH</h3>
                <span>Chuyên cung cấp sỉ & lẻ hải sản tươi sống.</span>
                <p>GIAO HÀNG TẬN NƠI UY TÍN - CHẤT LƯỢNG.</p>
                <br>
                <p class="cty-cl-warning">Hotline:</p>
                <p class="cty-cl-warning"><strong>0902 711 243</strong> (a.Đức) - <strong>0917 112 236</strong> (a.Thành)</p>
                <p>Tổ 9, Ấp Sua Đủa, xã Vĩnh Hòa Hiệp, ChâuThành, Kiên Giang</p>
            </div>
        </div>
    </div>
    <!--main-content-->
    <div class="wrapper">
        <div class="cty-sWMain">
            <div class="side-left">
                <!--video-->
                <div class="container video">
                    <div class="title">
                        <h4>Video</h4>
                    </div>
                    <div class="content">
                        <div class="video">
                            <iframe src="http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1, no-loop"> </iframe>
                        </div>
                    </div>
                </div>
                <!--us-about-->
                <div class="container us-about">
                    <div class="title">
                        <h4>Về chúng tôi</h4>
                    </div>
                    <div class="content">
                        <p><strong class="cty-tU">DNTN Nguyệt Anh</strong>
                            <br> Kính Chào Quý Khách
                            <br>
                            <br> Đại lý chúng tôi là một trong những nơi cung cấp hải sản đa dạng chủng loại, đặt biệt là Cá Thu, Cá Mú, Cá Sòng, Mực Nắng, Bạch Tuộc và các loại hải sản khác. Đến nay đại lý chúng tôi là nơi cung cấp hải sản uy tín chất lượng cho những nhà hàng, khách sạn, resort nổi tiếng tại thành phố Hồ Chí Minh và các tỉnh phía Nam.
                            <br>
                            <br> Chúng tôi dịch vụ giao hàng tại nhà cho khách hàng nội thành thành phố Hồ Chí Minh và đóng hàng đi các tỉnh thành theo yêu cầu của khách hàng.
                            <br>
                            <br> Hãy gọi cho chúng tôi để nhận được sự phụ vụ tốt nhất và chất lượng nhất.
                            <br>
                            <br>
                        </p>
                        <p class="cty-cl-warning">Hotline:
                            <br><strong>0902 711 243</strong> (a.Đức) - <strong>0917 112 236</strong> (a.Thành)</p>
                    </div>
                </div>
            </div>
            <div class="side-right">
                <!--other-product-->
                <div class="container other-pro">
                    <div class="title">
                        <h4>Sản Phẩm Khác</h4></div>
                    <div class="content">
                        <ol class="list-items">
                            <?php pro_new($pro_path_img,$pro_file_img); ?>

                            <li>
                                <a href="#">Xem thêm >></a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!--social-->
                <div class="container social">
                    <div class="title">
                        <h4>Social</h4></div>
                    <div class="content">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fweshark.net%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1254884917874897" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
