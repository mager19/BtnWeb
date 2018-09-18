	jQuery(document).ready(function($){

		$('.destacados__carrousel').slick({
  				autoplay: false,
  				speed: 2000,
				dots: false,
				infinite: true,
				slidesToShow: 5, 
		  		slidesToScroll: 1,
		  		arrows:true,
		  		pauseOnHover: true,
		  		responsive: [
		  			
				    {
				      breakpoint: 800,
				      settings: {
				        slidesToShow: 1,
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

			jQuery("header").height(jQuery("header").height()+jQuery("ul#primary-menu li ul.sub-menu li ul.sub-menu").height()+40);
		});

		jQuery('.menu-hover').mouseleave(function(){
			jQuery('header').css('background-color', "transparent");
			jQuery("header").height(_altura);
		});


		jQuery('.news__items>article:nth-child(2) div:first-child').addClass('order-2');





		
	});


	jQuery( "woocommerce-product-gallery" ).ready(function() {
		alert("hola");
		jQuery('a.woocommerce-product-gallery__trigger img').delay(5000).replaceWith('<img draggable="false" class="emoji" alt="🔍" src="../../wp-content/themes/BtnWeb/lupa.png" width="40" height="40" style="width:40px !important; height:40px !important;">');
    jQuery('a.woocommerce-product-gallery__trigger img').fadeOut("200").delay("200").queue(function(next) {
    jQuery('a.woocommerce-product-gallery__trigger img').delay(5000).replaceWith('<img draggable="false" class="emoji" alt="🔍" src="../../wp-content/themes/BtnWeb/lupa.png" width="40" height="40" style="width:40px !important; height:40px !important;">');
    next();
    alert("hola");
}).delay("2000").fadeIn("2000");



   
});
