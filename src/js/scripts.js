(function( root, $, undefined ) {
	"use strict";

	$(function () {
		var newSwiper = new Swiper ('.tarta-newswiper', {

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      })
        
        var workSwiper = new Swiper ('.tarta-workswiper', {

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      })
	});

} ( this, jQuery ));