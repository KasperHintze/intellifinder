/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class Footer extends Module {
	ready(app) {

		console.log('Loaded footer.js');

		/* Vars */
        var toggleCard = 0;
		var windowWidth = $(window).width();

		//Set the same animation time as in the CSS animation.
		var	animationTime = 500;

		$(document).ready(function(){

           // Do code

		   console.log('Running footer.js in all its glory');

		   // Get the window size on resize.
		   // This is used for de-activating the click events below
		   // under a certain screen size.
		   
		   	$(window).on('resize', function(event){

				windowWidth = $(window).width();

			});

		   	//Clicking the arrows changes the cards placing.
               $('.fa-angle-left, .fa-angle-right').click(function(){

				  if (toggleCard === 0) {

					  $('.map').addClass('cardSwitchMap');
					  $('.contact-details').removeClass('cardSwitchContact');

					  //Time the z-index with the animation duration from SCSS.
					  setTimeout(function(){

						$('.contact-details').css('z-index', 50);
						$('.map').css('z-index', 110);

						}, animationTime);

					  toggleCard = 1;


				  } else {

					  $('.map').removeClass('cardSwitchMap');
					  $('.contact-details').addClass('cardSwitchContact');

					  //Time the z-index with the animation duration from SCSS.
					  setTimeout(function(){

					  	$('.contact-details').css('z-index', 110);
						$('.map').css('z-index', 50);

						}, animationTime);

					  toggleCard = 0;

				  }

               });

			//Clicking on the actual card also changes the placing.
			$('.map, .contact-details').click(function(){

				var selectedCard = this.className;

				if (selectedCard === "footer-card map" && toggleCard === 0 && windowWidth > 780) {

					$('.map').addClass('cardSwitchMap');
					$('.contact-details').removeClass('cardSwitchContact');

					//Time the z-index with the animation duration from SCSS.
					setTimeout(function(){

					  $('.contact-details').css('z-index', 50);
					  $('.map').css('z-index', 110);

				  	}, animationTime);

					toggleCard = 1;


				} else if (selectedCard === "footer-card contact-details" && toggleCard === 1 && windowWidth > 780) {

					$('.map').removeClass('cardSwitchMap');
					$('.contact-details').addClass('cardSwitchContact');

					//Time the z-index with the animation duration from SCSS.
					setTimeout(function(){

					  $('.contact-details').css('z-index', 110);
					  $('.map').css('z-index', 50);

				  	}, animationTime);

					toggleCard = 0;


				}

			});

		});

	}
}
