/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class Login extends Module {
	ready(app) {
		
		console.log('Loaded login.js');

		/* Vars */
		var amount = 1;

		// Remove clicked span
		$(document).on('click', '.display span', function(){
			$(this).remove();
			amount = amount-1;
		});

		// Reset password
		$(document).on('click', '.reset', function(){
			resetSpan();
		});

		// On press
		$(document).keypress(function(e) {
			// Keypress 1
		    if(e.which == 49) {
		        appendSpan(1);
		    }
		    // Keypress 2
		    else if(e.which == 50) {
		        appendSpan(2);
		    }
		    // Keypress 3
		    else if(e.which == 51) {
		        appendSpan(3);
		    }
		    // Keypress 4
		    else if(e.which == 52) {
		        appendSpan(4);
		    }
		    // Keypress 5
		    else if(e.which == 53) {
		        appendSpan(5);
		    }
		    // Keypress 6
		    else if(e.which == 54) {
		        appendSpan(6);
		    }
		    // Keypress 7
		    else if(e.which == 55) {
		        appendSpan(7);
		    }
		    // Keypress 8
		    else if(e.which == 56) {
		        appendSpan(8);
		    }
		    // Keypress 9
		    else if(e.which == 57) {
		        appendSpan(9);
		    }
		    // Keypress 0
		    else if(e.which == 48) {
		        appendSpan(0);
		    }
		});

		// On click
		$(document).on('click', '.number', function(){
				
			var thisVal = $(this).attr('data-id');

			appendSpan(thisVal);

		});

		function appendSpan(id){
			console.log(amount);

			if(amount == 4){
				$('.display').append('<span data-id="'+id+'"></span>');
				login();
			}else if(amount > 4) {

			}else {
				$('.display').append('<span data-id="'+id+'"></span>');
			}
			amount++;
		}

		function resetSpan(){

			$('.display span').each(function(){
				$(this).remove();
			});

			amount = 1;

		}

		function login(){

			// Show loader
			$('.status .circle-loader').css('display', 'inline-block');

			// Get password
			var password = '';
			$('.display span').each(function(){
				var thisNumber = $(this).attr('data-id');
				password += thisNumber;
			});

			// Ajax here
			$.ajax({
 
                    url : "code/code_login.php",
 
                    data : {
                        password:password
                      },
 
                    type : 'POST',
 
                    success : function( data ) {
                       
                        console.log(data);
                        
                        $('.status').html('<svg class="circle-loader progress" width="40" height="40" version="1.1" xmlns="http://www.w3.org/2000/svg"><circle cx="20" cy="20" r="8"></svg>');

                        if(data == 'success'){

							setTimeout(function(){

								$('.status').html('<i class="material-icons success">done</i>');

								// Redirect
								setTimeout(function(){

									window.location.replace("pages/index.php");

								}, 500);

							}, 1500);

						}else {

							setTimeout(function(){

								$('.status').html('<i class="material-icons error">highlight_off</i>');

								resetSpan();

								setTimeout(function(){

									$('.status').html('');

								}, 1500);

							}, 1500);

						}
 
                    }
 
                });
		}

	}
}