$(document).ready(function () {

    $w_pro = $('.list-product .content .cty-grid ul li').width();
    $h_pro = $('.list-product .content .cty-grid ul li').height($w_pro);


    $w_sub_slide = $('.pro-fav .content .cty-sub-slider ul li').width();
    $h_sub_slide = $('.pro-fav .content .cty-sub-slider ul li').height($w_sub_slide);




    $(".cty-left-btn").click(function () {

    });
    $(".cty-right-btn").click(function () {

    });


    //HEADER SLIDER
    $header_slider = "#slider-header";
    $frame_header_slider = $header_slider + " ul";
    $item_header_slider = $frame_header_slider + " li";
    $trigger_header_slider = $header_slider + " .cty-trigger";

    
    $($item_header_slider).each(function (i) {
        var $this = $(this),
            width = $this.width(),
            left = width * i;
        $($header_slider).height(600);
        $this.css({
            left: left
        })
    });
    $($trigger_header_slider).on('click', function() {
        var $this = $(this),
            width = $($item_header_slider).width() * 1,
            speed = 500;
       if ($this.hasClass('cty-header-prev-btn')) {
            $($frame_header_slider).animate({
                scrollLeft: '-=' + width
            }, speed);
        } else if ($this.hasClass('cty-header-next-btn')) {
            $($frame_header_slider).animate({
                scrollLeft: '+=' + width
            }, speed);
        }
    });


    //SUB SLIDER
    $sub_slider = "#cty-sub-slider";
    $frame_sub_slider = $sub_slider + " ul";
    $item_sub_slider = $frame_sub_slider + " li";
    $trigger_sub_slider = $sub_slider + " .cty-trigger";
    
    $($item_sub_slider).each(function (i) {
        var $this = $(this),
            width = $this.width(),
            left = width * i;
        $($sub_slider).height(width);
        $this.css({
            left: left
        })
    });
    $($trigger_sub_slider).on('click', function() {
        var $this = $(this),
            width = $($item_sub_slider).width() * 4,
            speed = 500;
       if ($this.hasClass('cty-prev-btn')) {
            $($frame_sub_slider).animate({
                scrollLeft: '-=' + width
            }, speed);
        } else if ($this.hasClass('cty-next-btn')) {
            $($frame_sub_slider).animate({
                scrollLeft: '+=' + width
            }, speed);
        }
    });


});