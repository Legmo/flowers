/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {

            //Products cards
            var productCard = $('#main .product-card');
            $(productCard).hover(
                function(){$(this).addClass('open');},
                function(){$(this).removeClass('open');}
            );
    }
  };

})(jQuery, Drupal);
