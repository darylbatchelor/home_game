$(document).ready(function(){

var bullets = 2;
var score = 0;

//when hover over a target with class clickable will shoot if bullets are more than 1
	$( ".clickable" ).click(function() {

		if (bullets >= 1 && $(this).hasClass("clickable") ) {
	    	$('#sound-holder').attr("sound", "src: sound/gunshot.mp3; autoplay: true");
	    	
	    	var objPosn = $(this).attr("position");
	    	
  			setTimeout(removeSound, 400);
	    	$(this).remove();
	 		score ++;
	 		bullets --;
	 		console.log("score: " + score);
	 		console.log("bullets: " + bullets);
	 		
	 		$('a-scene').append("<a-entity class='non-clickable' material='color: red; shader: flat' scale='0.5 0.5 0.5' geometry='primitive: box' position='"+ objPosn.x + ", " + objPosn.y + ", "+ objPosn.z +"'></a-entity>");

		}  else {

			$('#sound-holder').attr("sound", "src: sound/click.mp3; autoplay: true");
		 	console.log("out of bullets");
			}; 

	});

// reloads with 5 bullets when class with reload is hovered on

	$( ".reload" ).click(function() {
		$('#sound-holder').attr("sound", "src: sound/reload.mp3; autoplay: true");
		setTimeout(removeSound, 400);
		$(this).remove();
		setTimeout(reload, 1500);
	});

function removeSound(){
	$('#sound-holder').removeAttr("sound");
}

function reload(){
	bullets += 5;
}

});

