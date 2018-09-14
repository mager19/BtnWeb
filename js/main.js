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

		jQuery('.menu-hover').hover(function(){
			jQuery('header').css('background-color', "#fff");
		});

		jQuery('.menu-hover').mouseleave(function(){
			jQuery('header').css('background-color', "transparent");
		});

		
	});