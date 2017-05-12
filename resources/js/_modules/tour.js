/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class Tour extends Module {
	ready(app) {
		
		console.log('Loaded tour.js');

		/* Vars */
		var featureCount = 0,
			i = 0;

		$(document).ready(function(){

			if ($(window).width() < 991) {
			   // Mindre end 991
			}
			else {
			   // Do code

			   if($('.featureWrapper')[0]){

			   		// Counting features
					$('.feature').each(function(){
						featureCount++;
					});

					// Appending dots
					for(i = 0; i < featureCount; i++) { 
					  $(".dotWrapper").append("<div class='dot'></div>");
					}

					$(".dotWrapper .dot:first-child").addClass('dotActive');

			   }

			}

		});

	}
}