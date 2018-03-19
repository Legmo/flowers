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

        //Webform - Yndex.Money
        //console.log(document.location.href);

        //Webform - Yandex.Money
        //Local Storage
        $('#paymentModal form .webform-button--submit').click( function() {
            var paymentOnline = false;
            var price = $('#paymentModal #paymentModalLabel .product-price').html().replace(/[^-0-9]/gim,'');
            var productName = $('#paymentModal #paymentModalLabel .product-name').html();
            var phone = $('#paymentModal #edit-client-phone').val();
            var comment = $('#paymentModal #edit-order-comment').val();
            var card = false;
            var delivery = false;

            if($('#paymentModal #edit-order-payment-method-on-line-').prop('checked')) {
                paymentOnline = true;
            }
            if($('#paymentModal #edit-order-card').prop('checked')) {
                card = true;
            }
            if($('#paymentModal #edit-order-delivery-main').prop('checked')) {
                delivery = true;
            }

            /*console.log(
                'paymentOnline: ' + paymentOnline +' '+
                'price: ' + price +' '+
                'productName: ' + productName +' '+
                'phone: ' + phone +' '+
                'comment: ' + comment +' '+
                'card: ' + card +' '+
                'delivery: ' + delivery
            );*/

            localStorage.setItem('paymentOnline', paymentOnline);
            localStorage.setItem('price', price);
            localStorage.setItem('productName', productName);
            localStorage.setItem('phone', phone);
            //localStorage.setItem('comment', comment);
            localStorage.setItem('card', card);
            localStorage.setItem('delivery', delivery);
        })

        //Confirmation page
        if ($('body').hasClass('page-node-111')){
            $('body').once('confirmation').each(function() {
                var paymentOnline = false;
                paymentOnline = localStorage.getItem('paymentOnline', paymentOnline);

                var price = localStorage.getItem('price', price);
                var productName = localStorage.getItem('productName', productName);
                var phone = localStorage.getItem('phone', phone);
                var card = localStorage.getItem('card', card);
                var cardTxt = '';
                var delivery = localStorage.getItem('delivery', delivery);
                var deliveryTxt = '';
                var paymentComment = '';
                //var comment = localStorage.getItem('comment', comment);

                //Additional payments - card
                if (card == 'true') {
                    cardTxt = 'да';
                    paymentComment = paymentComment + '+ цена открытки';
                } else {
                    cardTxt = 'нет';
                }
                //Additional payments - delivery
                if (delivery == 'true') {
                    deliveryTxt = 'да';
                    paymentComment = paymentComment + ' + цена доставки';
                } else {
                    deliveryTxt = 'нет';
                }
                var comment = 'Товар: ' + productName + '; открытка: ' + cardTxt + '; доcтавка: ' + deliveryTxt;

                //Setup price comment
                if (paymentComment !== '') {
                    $('.step-payment form.payment-form .for-item.price .payment-comment-phone').show();
                }

                //Show-hide payment form
                if (paymentOnline == 'true'){
                    $('.step-payment').show();
                }
                else {
                    $('.step-standart').show();
                }

                //Setup payment-form settings
                if (paymentOnline == 'true'){
                    $('.step-payment form.payment-form .for-item.price input').val(price);
                    $('.step-payment form.payment-form .for-item.phone input').val(phone);
                    $('.step-payment form.payment-form .for-item.comment input').val(comment);
                    $('.step-payment form.payment-form .for-item.price .payment-comment').text(paymentComment);
                }

                //Clear LocalStorage
                $('.step-payment form.payment-form button').click( function() {
                    localStorage.clear()
                })
            });
        }

    }
  };

})(jQuery, Drupal);
