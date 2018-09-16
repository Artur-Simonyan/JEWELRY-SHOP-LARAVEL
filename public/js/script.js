jQuery(document).ready(function () {
    jQuery(document).on('click', '.news li', function () {
        jQuery(".popup").show();
        var bg = jQuery(this).css('background-image');
        jQuery(".popup").css("background-image", bg);
        jQuery(".popup").css("background-size", "cover");
    });

    jQuery(document).on('click', '.popup', function () {
        jQuery(".popup").hide();
    });

    jQuery(document).on('click', '.closeBtn', function () {
        jQuery(".popup").hide();
    });


    jQuery(document).on('click', 'img', function () {
        jQuery(".popupGallery").show();
        var bg = $(this).attr('src');
        jQuery(".popupGallery").css("background", 'url(' + bg + ')');
    });
    jQuery(document).on('click', '.popupGallery', function () {
        jQuery(".popupGallery").hide();
    });

    jQuery(document).on('click', '.closeBtn', function () {
        jQuery(".popupGallery").hide();
    });


    $(".catalog").hover(function () {
        $(".sub_menu").stop().slideDown('medium');
    }, function () {
        $(".sub_menu").stop().slideUp('medium');
    });

    $(".login").hover(function () {
        $(".login_sub_menu").stop().slideDown('medium');
    }, function () {
        $(".login_sub_menu").stop().slideUp('medium');
    });


    $("#slideshow > div:gt(0)").hide();

    setInterval(function () {
        $('#slideshow > div:first')
            .fadeOut(2000)
            .next()
            .fadeIn(2000)
            .end()
            .appendTo('#slideshow');
    }, 5000);
});

