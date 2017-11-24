$(document).ready(function(){

		console.log('Graphisme technè');

		$(".bloc").prepend("<div class='colorBlock'></div>");

		$(".keyboard").delay(2000).fadeOut(1000);

		// https://github.com/jquery/jquery-mousewheel/
		// defilement avec le scroll de la souris

		if($('body').width() > 700){


			prevSlide();

			// $('.caroussel').on('mousewheel',function(event) {
			//     //console.log(event.deltaX, event.deltaY, event.deltaFactor);
			// 	if( event.deltaY > 0 ){
			// 		prevSlide();		
			// 	}else if( event.deltaY < 0 ){
			// 		nextSlide();
			// 	}
			// });

			// defilement avec les touches clavier
			$('body').keyup(function(event){

				console.log("touche n°",event.which);
				if( event.which == 38 || event.which == 37 ){		// fleche du haut
					prevSlide();
		            return false;
		        }else if( event.which == 40 || event.which == 39){	// flèche du bas
		        	nextSlide();
		            return false;
		        }
			});

		}

		

		// méthode avec le scroll
		// var scrollValue = 0;
		// var scrollDetect = 50;

		// $(window).scroll(function(event){

		// 	scrollValue += $(document).scrollTop();

		// 	// console.log("scroll", scrollValue, Math.abs(scrollValue));

		// 	if(Math.abs(scrollValue) >= scrollDetect){

		// 		if(scrollValue>=scrollDetect){
		// 			prevSlide();		
		// 		}else if(scrollValue<= -scrollDetect){
		// 			nextSlide();
		// 		}

		// 		scrollValue = 0;
		// 	}
		// });
	})

	function nextSlide(){
		var bloc = $('.bloc:last').remove();
		$('.caroussel').prepend(bloc);
	}
	function prevSlide(){
		var bloc = $('.bloc:first').remove();
		$('.caroussel').append(bloc);
	}