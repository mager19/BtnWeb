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
						
			jQuery("header").height(jQuery("header").height()+jQuery("ul#primary-menu li ul.sub-menu li ul.sub-menu").height()+44);
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


		jQuery('#ship-to-different-address-checkbox').attr('checked', false);


		jQuery(".nav-menu li a").on("touchend", function(event) {
		  window.location.href = $(this).attr("href");
		});

		//lo que estabamos por hacer
		// (function(){
		//     // Your base, I'm in it!
		//     var originalAddClassMethod = jQuery.fn.addClass;

		//     jQuery.fn.addClass = function(){
		//         // Execute the original method.
		//         var result = originalAddClassMethod.apply( this, arguments );

		//         // trigger a custom event
		//         jQuery(this).trigger('cssClassChanged');

		//         // return the original result
		//         return result;
		//     }
		// })();

		// // document ready function
		// jQuery(function(){
		//     jQuery("button.single_add_to_cart_button.btn.btn-primary").bind('cssClassChanged', function(){ 
		//         if( jQuery(' button.single_add_to_cart_button.btn.btn-primary').hasClass('wc-variation-is-unavailable') ){
		//         		jQuery('.available').show();
		//         		console.log(" Show ");
		//         }
		//         else {
		//         	jQuery('.available').hide();
		//         		console.log(" hide ");
		//         }

		        
		//     });

		   
		// });

/*jQuery('a.woocommerce-product-gallery__trigger img').replaceWith('<img draggable="false" class="emoji" alt="🔍" src="../../wp-content/themes/BtnWeb/lupa.png" width="40" height="40">');*/

	/*Activa o desactiva  segun existencia de las variaciones el enlace  para  el popup de avisar*/
	jQuery(".variations select").change(function(){
	
	console.log("cambio selector");
	setTimeout(function(){
	  if ( jQuery( "button.single_add_to_cart_button" ).is( ".wc-variation-is-unavailable" ) ) {
	    jQuery( ".available" ).show(); console.log("show");
		} else {jQuery( ".available" ).hide();console.log("hide");}
	}, 5);
	
	});

/*setTimeout(function(){*/
	// if ( jQuery( "p.stock.out-of-stock" )  ) {
	//     jQuery( ".available" ).show(); console.log("show");
	// 	}
/*}, 5);*/





		
});

/**** smooth scroll*/
jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery("div.totop a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});