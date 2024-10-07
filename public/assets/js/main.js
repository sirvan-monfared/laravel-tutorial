$(function () {

    "use strict";

    if (jQuery().slick) {
        $('.slider-forFive').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            asNavFor: '.slider-navFive',
            nextArrow: '<i class="fal fa-angle-right nextArrow"></i>',
            prevArrow: '<i class="fal fa-angle-left prevArrow"></i>',

            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        arrows: false,
                    }
                }
            ]

        });

        $('.slider-navFive').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-forFive',
            arrows: false,
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            centerPadding: 0,

            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        arrows: false,
                        slidesToShow: 3,
                    }
                }
            ]
        });
    }
    // product_details slider


    // nice select js
    $(document).ready(function () {
        if (jQuery().select2) {
            $('.select_2').select2();
        }
    });


});
