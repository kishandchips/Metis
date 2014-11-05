(function($){

	var main = {
		
		w : $(window),

		init: function(){

			main.header.init();
			main.slider.init();

			main.w.on('load', function(){

				$('.show-content').on('click', function(){
					$(this).siblings('.hide-content').toggleClass('visible');
				});
				
				$('.match-height').matchHeight();

			});	
		},

		header: {
			element: $('#header'),

			init: function(){
				var element = main.header.element;
				if(!element.length){return;}

				$('.mob-menu').on('click', function(){
					element.toggleClass('menu-active');
				});
			}
		},

		slider:{
			element: $('#slider'),

			init: function(){
				var element = main.slider.element;
				if(!element.length){return;}

				var slider = $("#slider");

				slider.owlCarousel({
					items: 1,
					autoHeight: true,
					loop: true,
					nav: true,
					navText: "",
					dots: true,
					autoplay: true,
					autoplayTimeout: 5000,
					autoplaySpeed: 1000,
					navSpeed: 1000,
					dotsSpeed: 1000
				});

				$('.slider-prev').on('click', function(){
					slider.trigger('owl.prev');
				});
				$('.slider-next').on('click', function(){
					slider.trigger('owl.next');
				});
			}
		}

	};//main

	window.main = main;

	$(function(){
		window.main.init();
	});


})(jQuery);