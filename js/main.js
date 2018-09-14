	jQuery(document).ready(function($){

		$('.destacados__carrousel').slick({
  				autoplay: false,
  				speed: 2000,
				dots: false,
				infinite: true,
				prevArrow:"<img class='a-left control-c prev slick-prev' src='../css/fonts/arrowleft.png'>",
		    	slidesToShow: 5, 
		  		slidesToScroll: 1,
		  		arrows:false,
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
		
	});