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


        //Webform - add placeholders
        $('#paymentModal form #edit-order-date-time-date').attr( 'placeholder', 'Дата');
        $('#paymentModal form #edit-order-date-time-time').attr( 'placeholder', 'Время');

        //Webform - add accordion
        //$("#edit-order-payment-method--wrapper .fieldset-wrapper").prepend($('<div id="accordion"><div class="card"><div class="card-header" id="headingOne"><h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Методы оплаты</button></h5></div><div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body">'));
        //$("#edit-order-payment-method--wrapper .fieldset-wrapper").append($('</div></div></div></div>'));
        var paymentContent = $('#edit-order-payment-method--wrapper .fieldset-wrapper')
        $(paymentContent).once('Hide').hide();

            $('#edit-order-payment-method--wrapper legend').once('ShowHide').click(function(){
                if ($(paymentContent).css('display') == 'none') {
                    //console.log($(paymentContent).css('display'));
                    //console.log('show');
                    $(paymentContent).show();
                }
                else {
                    //console.log($(paymentContent).css('display'));
                    //console.log('hide');
                    $(paymentContent).hide();
                }
            });

        //Webform - add product name & price to pop-up window
        $('body.node--type-product-bouquet a.btn.payment').click(function(event){ //todo - разные типы нод
            var productName = $(event.target).closest('#content .region-content').find('h1.page-title').text();
            var productPrice = $(event.target).closest('#content .region-content').find('.field--name-field-price-bouquet').text();
            //console.log(productName + " - " + productPrice);
            $('#paymentModal form #edit-product-name').val(productName);
            $('#paymentModal form #edit-product-price').val(productPrice);
            $('#paymentModal h5.modal-title .product-name').text(productName);
            $('#paymentModal h5.modal-title .product-price').text(productPrice);
        });
        $('.view-front-actions a.btn.payment').click(function(event){
            var productName = $(event.target).closest('.col-12 ').find('.title').text();//todo - .col-12
            var productPrice = $(event.target).closest('.col-12 ').find('.price').text();//todo - .col-12
            //console.log(productName + " - " + productPrice);
            $('#paymentModal form #edit-product-name').val(productName);
            $('#paymentModal form #edit-product-price').val(productPrice);
            $('#paymentModal h5.modal-title .product-name').text(productName);
            $('#paymentModal h5.modal-title .product-price').text(productPrice);
        });
        $('.product-card a.btn.payment').click(function(event){
            var productName = $(event.target).closest('.product-card').find('.product-title').text();
            var productPrice = $(event.target).closest('.product-card').find('.product-price').text();
            //console.log(productName + " - " + productPrice);
            $('#paymentModal form #edit-product-name').val(productName);
            $('#paymentModal form #edit-product-price').val(productPrice);
            $('#paymentModal h5.modal-title .product-name').text(productName);
            $('#paymentModal h5.modal-title .product-price').text(productPrice);
        })
    }
  };

})(jQuery, Drupal);
