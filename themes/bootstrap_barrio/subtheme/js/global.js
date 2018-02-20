/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {

        //Slider for product page
        var slideThumbs = $('.slider.thumbs-container .slide-thumbs');
        var slide = $('.slider.main-container .slide');
        var slideFirst = $('.slider.main-container .slide:first-of-type');
        var atrSrc = '';

        if (($(slide).length) > 1) {
            $('.slider.thumbs-container').removeClass('hide');
            $('.slider.thumbs-container .slide-thumbs:first-of-type').addClass('active');
            $(slideThumbs).on('click', function(event) {
                atrSrc = $(this).find('img').attr('src');
                $(slideThumbs).removeClass('active')
                $(this).addClass('active');
                $(slideFirst).find('img').attr('src', atrSrc);
            });
        }

        /*var swiperThumbs = new Swiper('.field--name-field-photo-bouquet .swiper-container.thumbs-container', {
            direction: 'vertical',
            slidesPerView: 'auto',
            spaceBetween: 10,
            touchRatio: 0.2,
            slideToClickedSlide: true,
        });
        var swiperBig = new Swiper('.field--name-field-photo-bouquet .swiper-container.main-container', {
            //effect: 'fade',
            //direction: 'vertical',
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        swiperThumbs.controller.control = swiperBig;
        swiperBig.controller.control = swiperThumbs;*/

        //Products cards
        var productCard = $('#main .product-card');
        $(productCard).hover(
            function(){$(this).addClass('open');},
            function(){$(this).removeClass('open');}
        );
    }
  };

})(jQuery, Drupal);
