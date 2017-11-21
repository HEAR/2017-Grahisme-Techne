Array.prototype.pick = function(){
	return this[ Math.floor(Math.random() * this.length) ]
}


var pattern = [
	["","TR","TR","TR","TR","TR","TR","TR","TR","TR","TR","TR"],
	["","TR","TR","BR","BR","BR","BR","BR","BR","BR","BR","BR"],
	["","BR","BR","BR","BR","BR","BR","BR","BR","BR","BR","BR"],
	["","BR","BR","BR","BR","BR","BR","BR","TR","TR","TR","TR"],
	["","BR","BR","BR","BR","BR","TR","TR","TR","TR","TR","TR"],
	["","BR","BR","BR","BR","TR","TR","TR","TR","TR","TR","TR"],
	["","BL","BL","BL","BL","BL","BL","BR","BR","BR","BR","BR"],
	["","BL","BL","BL","BL","BL","TL","TL","TL","TL","TL","TL"],
	["","BL","BL","BL","BL","BL","BR","BR","BR","BR","BR","BR"],
	["","BL","BL","BL","BR","BR","BR","BR","BR","BR","BR","BR"]
];

var coords = [];

var previousKey;

$(document).ready(function(){

	console.log('Graphisme technè');

	startPattern = pattern.pick() ;
	blocID = 0;

	snakeInit( $('.cadre').first(), true );


	$(".more a").click(function(event){

		event.preventDefault();
		event.stopPropagation();

		var conf = $(this).parent().parent().parent();

		conf.find( '.content' ).hide();
		conf.find( '.detail' ).show();

	})

	


	// $(".cadre").mouseup(function(e){
	// 	console.log($(this),"up");
	// });


	// https://github.com/jquery/jquery-mousewheel/
	// defilement avec le scroll de la souris

	// if($('body').width() > 700){

		// prevSlide();

		// defilement avec les touches clavier
		$('body').keydown(function(event){

			// console.log("touche n°",event.which);
			if( event.which == 38 || event.which == 37 ){		// fleche du haut & gauche
				
				// if(previousKey == 38 || previousKey == 37 ){
				// 	prevSlide();
				// }
				nextSlide();
				move(event.which );
	            return false;
	        }else if( event.which == 40 || event.which == 39){	// flèche du bas & droite
	        	nextSlide();
	        	move(event.which );
	            return false;
	        }

	        previousKey = event.which;
		});

		$(".cadre").click(function(event){

			event.stopPropagation();

			if( $(this).hasClass("full") ){
				full = true;
			}else{
				full = false;
			}

			$(".cadre").removeClass("full");
			$( '.cadre .content' ).show();
			$( '.cadre .detail' ).hide();

			console.log($(this),"click");

			if( !full ){
				$(this).addClass("full");	
			}else{

			}
		}).children().click(function(event) {
			event.preventDefault();
		});

		$("body").click(function(event){
			$(".cadre").removeClass("full");

			$( '.cadre .content' ).show();
			$( '.cadre .detail' ).hide();
		});

	// }
})

function snakeInit(item, first){

	var coef = 2;
	var pasH = 52/coef;
	var pasV = pasH;

	// console.log(startPattern);


	if(first == true){

		current = item;

		var x = Math.random() * ( $('body').width() - $('.cadre').width()*0.2 );
		x = Math.round(x/pasH)*pasH;

		var y = Math.random() * ( $('body').height() - $('.cadre').height()*0.2 );
		y = Math.round(y/pasV)*pasV;

		// item
		// .last()
		// .css('left', x )
		// .css('top', y );

		item
		// .last()
		.css('transform', 'translate('+x+'px,'+y+'px) scale(0.2)' )

		// coords.unshift( [x,y] );
		coords.push( [x,y] );
		// console.log( coords );


	}else{
		// console.log(startPattern[blocID]);

		var X = item.offset().left;
		var Y = item.offset().top;

		current = item.next();

		// console.log(current);

		// var directions = ["T","R","B","L"];
		// var dir = directions[Math.floor(Math.random() * directions.length)];

		dir = startPattern[ blocID ];

		// console.log(blocID, dir);

		rPasV = Math.ceil(Math.random()*coef) * pasV;
		rPasH = Math.ceil(Math.random()*coef) * pasH;

		// console.log( dir );

		switch(dir){
			case "TR" :
				dirV = -rPasV;
				dirH = rPasH;
			break;
			case "BR" :
				dirV = rPasV;
				dirH = rPasH;
			break;
			case "BL" :
				dirV = rPasV;
				dirH = -rPasH;
			break;
			case "TL" :
				dirV = -rPasV;
				dirH = -rPasH;
			break;
			default:
				dirV = rPasV;
				dirH = rPasH;
			break;
		}

		X = X + dirH ;
		Y = Y + dirV ;
		

		// current
		// .css('left', X )
		// .css('top', Y );

		current
		.css('transform', 'translate('+X+'px,'+Y+'px) scale(0.2)' );

		// coords.unshift( [X,Y] );
		coords.push( [X,Y] );

	}

	if(current.next().hasClass("cadre")){
		blocID++;

		snakeInit(current,false);
	}else{
		

		updateZ();
		
	}

}

function updateZ( sens ){


	if(sens == "down"){

		var z = $('.cadre').length;

		$('.cadre').each(function(){

			$(this).css("z-index",z);
			z--;

		})

	}else{

		var z = 1;

		$('.cadre').each(function(){

			$(this).css("z-index",z);
			z++;

		})

	}
}


function nextSlide(){
	var temp = $('.cadre').first().remove();

	temp.click(function(event){

		event.stopPropagation();

		if( $(this).hasClass("full") ){
			full = true;
		}else{
			full = false;
		}

		$(".cadre").removeClass("full");

		console.log($(this),"click");

		if( !full ){
			$(this).addClass("full");	
		}else{

		}
	}).children().click(function(event) {
		event.preventDefault();
	});


	$('.caroussel').append(temp);

	updateZ();
}



function prevSlide(){
	var temp = $('.cadre').last().remove();

	temp.click(function(event){

		event.stopPropagation();

		if( $(this).hasClass("full") ){
			full = true;
		}else{
			full = false;
		}

		$(".cadre").removeClass("full");

		console.log($(this),"click");

		if( !full ){
			$(this).addClass("full");	
		}else{

		}
	}).children().click(function(event) {
		event.preventDefault();
	});

	$('.caroussel').prepend(temp);

	updateZ('down');
}

function move(dir){

	// console.log(coords);

	var coef = 2;
	var pasH = 52/coef;
	var pasV = pasH;

	rPasV = Math.ceil(Math.random()*coef) * pasV;
	rPasH = Math.ceil(Math.random()*coef) * pasH;
	
	switch(dir){
		case 38 : // haut // next
			dirH = -rPasH;
			dirV = -rPasV;
		break;
		case 39 : // droite // Prev
			dirH = rPasH;
			dirV = -rPasV;
		break;
		case 40 : // bas // prev
			dirH = rPasH;
			dirV = rPasV;
		break;
		case 37 : // gauche // next 
			dirH = -rPasH;
			dirV = rPasV;
		break;
		default:
			dirH = rPasH;
			dirV = rPasV;
		break;
	}

	// console.log( $('.cadre').last() , $('.cadre').last().prev() );

	// if(dir == 38 || dir == 37){
	// 	// prev
	// 	X = $('.cadre').first().offset().left;
	// 	Y = $('.cadre').first().offset().top;

	// 	X += dirH;
	// 	Y += dirV;

	// 	X = X < 0 ? 0 : X;
	// 	Y = Y < 0 ? 0 : Y;

	// 	coords.unshift([X,Y]);
	// 	coords.pop();

	// 	for(var i=0; i<coords.length; i++){
	// 		console.log(coords);

	// 		console.log( "ok", coords.length - i );	
	// 		// $('.cadre').eq( i )
	// 		// .css('left', coords[i][0] )
	// 		// .css('top', coords[i][1] );	

	// 		$(".cadre").eq(i )
	// 		.css('transform', 'translate('+coords[i][0]+'px,'+coords[i][1]+'px) scale(0.2)' );
	// 	}
	// }else{
		// next
		X = $('.cadre').last().prev().offset().left;
		Y = $('.cadre').last().prev().offset().top;

		X += dirH;
		Y += dirV;

		X = X < 0 ? 0 : X;
		Y = Y < 0 ? 0 : Y;

		coords.push([X,Y]);
		coords.shift();

		for(var i=0; i<coords.length; i++){
			// $('.cadre').eq( i )
			// .css('left', coords[i][0] )
			// .css('top', coords[i][1] );

			$(".cadre").eq(i)
			.css('transform', 'translate('+coords[i][0]+'px,'+coords[i][1]+'px) scale(0.2)' );
		}
	// }

	// var X = X + dirH;
	// var Y = Y + dirV;

	// console.log( coords );

	
	
	// $('.cadre').last()
	// .css('left', X )
	// .css('top', Y );	

	window.scrollTo(document.body.scrollWidth, document.body.scrollHeight);


}