/*$(document).ready(function() { 
	$(".list-services .tooltips").easyTooltip();
}); */

$(window).load(function() {

	$('#bgSlider').bgSlider({
		duration:100,
		pagination:'.pagination',
		preload:true,
		slideshow:300,
		spinner:'.bg_spinner'
	});
	
	
	
	// Au chargement initial   
    redimensionnement();
     
    // En cas de redimensionnement de la fenêtre
    $(window).resize(function(){ 
        redimensionnement(); 
    }); 


	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
		var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

		//Récupérer les variables depuis le lien
		
		var query= popURL.split('?');
		var dim= query[1].split('&amp;');
		var popWidth = dim[0].split('=')[1]; //La première valeur du lien

		//Faire apparaitre la pop-up et ajouter le bouton de fermeture
		$('#' + popID).fadeIn().css({
			'width': Number(popWidth)
		})
		.prepend('<a href="#" class="close"><img src="./images/close_pop.png" class="btn_close" title="Fermer" alt="Fermer" /></a>');

		//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;

		//On affecte le margin
		$('#' + popID).css({
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});

		//Effet fade-in du fond opaque
		$('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
		//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

		return false;
	});

	//Fermeture de la pop-up et du fond
	$('a.close, #fade').live('click', function() { //Au clic sur le bouton ou sur le calque...
		$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  //...ils disparaissent ensemble
		});
		return false;
	});
	
	
});




function redimensionnement(){ 
 
    var $image = $('#bgSlider img');
    var image_width = $image.width(); 
    var image_height = $image.height();     
     
    var over = image_width / image_height; 
    var under = image_height / image_width; 
     
    var body_width = $(window).width(); 
    var body_height = $(window).height(); 
     
    if (body_width / body_height >= over) { 
      $image.css({ 
        'width': body_width + 'px', 
        'height': Math.ceil(under * body_width) + 'px', 
        'left': '0px', 
        'top': Math.abs((under * body_width) - body_height) / -2 + 'px' 
      }); 
    }  
     
    else { 
      $image.css({ 
        'width': Math.ceil(over * body_height) + 'px', 
        'height': body_height + 'px', 
        'top': '0px', 
        'left': Math.abs((over * body_height) - body_width) / -2 + 'px' 
      }); 
    } 
} 
      