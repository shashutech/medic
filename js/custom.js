/*
Author: Kumar Shashwat
Author URI: http://github.com/shashutech/
Subject to copyright
*/

(function($) {
	'use strict';
	$(document).ready(function() {
		// Page preloader
		$('#fakeloader').fakeLoader({
			timeToHide: 1000,
			zIndex: '999999', //Default zIndex
			bgColor: '#ffffff',
			spinner: 'spinner1'
		});

		// show body after site load
		$('body').show();

		//  Site search
		$('button.search').on('click', function() {
			$('html, body').animate(
				{
					scrollTop: 0
				},
				'slow'
			);
			$('.site-search .search-box').toggleClass('open');
		});

		$('.site-search .close').on('click', function() {
			$('.site-search .search-box').removeClass('open');
		});

		//Testimonial Carousel (Slick)
		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: false,
			fade: true,
			easing: 'linear',
			asNavFor: '.slider-nav'
		});

		$('.slider-nav').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			asNavFor: '.slider-for',
			arrows: false,
			centerMode: true,
			centerPadding: '10px',
			focusOnSelect: true,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});

		//counter
		$('.counter').counterUp({
			delay: 10,
			time: 5000
		});

		// Main slider
		var owl = $('.main-slider');

		// Carousel initialization
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 0,
			autoplay: true,
			autoplayTimeout: 3000,
			animateIn: 'fadeIn',
			animateOut: 'slideOutLeft',
			autoplayHoverPause: true
		});

		// add animate.css class(es) to the elements to be animated
		function setAnimation(_elem, _InOut) {
			// Store all animationend event name in a string.
			// cf animate.css documentation
			var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

			_elem.each(function() {
				var $elem = $(this);
				var $animationType = 'animated ' + $elem.data('animation-' + _InOut);

				$elem.addClass($animationType).one(animationEndEvent, function() {
					$elem.removeClass($animationType); // remove animate.css Class at the end of the animations
				});
			});
		}

		// Fired after current slide has been changed
		owl.on('changed.owl.carousel', function(event) {
			var $currentItem = $('.item', owl).eq(event.item.index);
			var $elemsToanim = $currentItem.find('[data-animation-in]');
			setAnimation($elemsToanim, 'in');
		});

		//Testimonial Carousel
		$('.doctors-slider').owlCarousel({
			items: 4,
			loop: true,
			margin: 20,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			responsiveClass: true,
			responsive: {
				320: {
					items: 1
				},
				480: {
					items: 2
				},
				768: {
					items: 4
				}
			}
		});

		//clients slider Carousel
		$('.clients-slider').owlCarousel({
			items: 5,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			responsiveClass: true,
			responsive: {
				320: {
					items: 1
				},
				480: {
					items: 2
				},
				768: {
					items: 4
				}
			}
		});

		// Masonry portfolio
		$('#doctor-portfolio').mixItUp({
			selectors: {
				target: '.tile',
				filter: '.filter',
				sort: '.sort-btn'
			},
			animation: {
				animateResizeContainer: false,
				effects: 'fade scale'
			}
		});

		$('#doctor-portfolio').mixItUp();
		$('.form-control').on('change', function() {
			$('.form-control option:selected').trigger('click');
		});

		// Initilize wow js
		new WOW().init();

		/*mag popup*/
		$('.video').magnificPopup({
			type: 'iframe',

			iframe: {
				markup:
					'<div class="mfp-iframe-scaler">' +
					'<div class="mfp-close"></div>' +
					'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
					'<div class="mfp-title">Some caption</div>' +
					'</div>'
			},
			callbacks: {
				markupParse: function(template, values, item) {
					values.title = item.el.attr('title');
				}
			}
		});
	}); // End load document
})(jQuery);

/*
Author: Kumar Shashwat
Author URI: http://github.com/shashutech/
Subject to copyright
*/
