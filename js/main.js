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
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem: true,
					addClassActive: true,
					autoHeight: true,
					autoPlay: 4000
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