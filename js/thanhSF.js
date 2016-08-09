$(document).ready(function () {
    
    $w_pro = $('.list-product .content .cty-grid ul li').width();
    $h_pro = $('.list-product .content .cty-grid ul li').height($w_pro);
    
    
    $w_sub_slide = $('.pro-fav .content .slider-container ul li').width();
    $h_sub_slide = $('.pro-fav .content .slider-container ul li').height($w_sub_slide);
    $w_sub_slide_inner = $('.pro-fav .content .slider-container ul li').innerWidth();
    $sub_slide_length = $( ".pro-fav .content .slider-container ul li" ).length;
    $sub_slide_wrapper = $w_sub_slide_inner *  $sub_slide_length;
    $w_sub_slide_wrapper = $('.pro-fav .content .slider-container ul').width($sub_slide_wrapper);

    
    
    
    $(".cty-left-btn").click(function() {
        
    });
    $(".cty-right-btn").click(function() {
  
    });
});


//innerWidth