(function ($, Drupal) {'use strict';
    Drupal.behaviors.global = {
        attach: function (context,settings) {

            //Products cards
            var productCard = $('#main .product-card');
            $(productCard).click(function () {
                $(this).addClass('open');
            });
        }
    };
}) (jQuery, Drupal);
