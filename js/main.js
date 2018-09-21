	jQuery(document).ready(function($){

		$('.destacados__carrousel').slick({
  				autoplay: false,
  				speed: 500,
				dots: false,
				infinite: true,
				slidesToShow: 5, 
		  		slidesToScroll: 1,
		  		arrows:true,
		  		pauseOnHover: true,
		  		swipeToSlide: true,
		  		responsive: [
		  			
				    {
				      breakpoint: 800,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 1,
				        infinite: true,
				        
				      }
		    		},    		
		    		{
		      		  breakpoint: 480,
		      		  settings: {
		        	  slidesToShow: 1,
		        	  slidesToScroll: 1,
		        	  arrows: false,
		      		}
		    },
		    	]
		});
		
		var _altura= jQuery("header").height();
		jQuery('.menu-hover').hover(function(){
			jQuery('header').css('background-color', "#fff");
			jQuery('.sub-menu').show();
			jQuery("header").height(jQuery("header").height()+jQuery("ul#primary-menu li ul.sub-menu li ul.sub-menu").height()+40);
		});

		jQuery('.menu-hover').mouseleave(function(){
			jQuery('header').css('background-color', "#fff");
			jQuery('.sub-menu').hide();
			jQuery("header").height(_altura);
		});


		jQuery('.news__items>article:nth-child(2) div:first-child').addClass('order-lg-1');
		jQuery('.news__items>article:nth-child(2) div:nth-child(2n)').addClass('order-lg-2');

		jQuery('.agotado').attr({
		   'data-toggle': 'modal',
		   'data-target': '#largeModal'
		});




/*jQuery('a.woocommerce-product-gallery__trigger img').replaceWith('<img draggable="false" class="emoji" alt="🔍" src="../../wp-content/themes/BtnWeb/lupa.png" width="40" height="40">');*/

		
	});

