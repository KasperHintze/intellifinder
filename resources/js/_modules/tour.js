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
            imgCount = 0,
			i = 0,
            scale = 1.03,
            z = 5000;

		$(document).ready(function(){
            
           // Do code

           if($('.featureWrapper')[0]){

               console.log('Running tour.js in all its glory');

                // Counting features
                $('.feature').each(function(){

                    if(featureCount == 0){
                        $(this).addClass('cardActive');
                    }else {
                        $(this).css('transform', 'scale('+scale+')');
                        scale = scale+.03;
                    }

                    $(this).attr('data-id', featureCount);
                    
                    $(this).css('z-index', z);
                    
                    featureCount++;
                    
                    z = z -100;
                    
                });
               
               // Counting images
                $('.imgWrapper img').each(function(){
                    
                    console.log('Running');

                    if(imgCount == 0){
                        $(this).css('opacity', '1');
                    }
                    
                    $(this).attr('data-id', imgCount);
                    
                    imgCount++;
                    
                });

                // Appending dots
                for(i = 0; i < featureCount; i++) { 
                  $(".dotWrapper").append("<div class='dot' data-id='"+i+"'></div>");
                }
                // Setting first dot to active
                $(".dotWrapper .dot:first-child").addClass('dotActive');

                $('.arrowRight').click(function(){

                    // Getting ids
                    var firstCard = parseInt($('.cardActive').attr('data-id'));

                    console.log('firstCard = '+firstCard);

                    if(firstCard == featureCount-1){
                        var newCard = 0;
                    }else {
                        var newCard = firstCard + 1;
                    }

                    // Sending card to back
                    $('.cardActive').addClass('sendToBack');
                    
                    $('.feature[data-id='+newCard+']').css('opacity', '1');

                    // Removing cardActive and aplying to new card
                    setTimeout(function(){

                        console.log('newCard = '+newCard);
                        
                        // Card

                        $('.cardActive').insertAfter('.featureWrapper .feature:last-child');

                        $('.cardActive').attr('moved', '1');

                        $('.cardActive').removeClass('sendToBack');
                        $('.cardActive').removeClass('cardActive');

                        $('.feature[data-id='+newCard+']').addClass('cardActive');
                        
                        // Image
                        $('.imgWrapper img[data-id='+firstCard+']').css('opacity', '0');
                        
                        $('.imgWrapper img[data-id='+newCard+']').css('opacity', '1');
                        
                        // Dot
                        $('.dotActive').removeClass('dotActive');
                        $('.dotWrapper .dot[data-id='+newCard+']').addClass('dotActive');
                        
                        sortCards();


                    }, 1000);

                });

			}

		});
        
        function sortCards(){
            
            var index = 5000;
            
            $('.feature').each(function(){
                
                console.log('Running');

                $(this).css('z-index', z);
                    
                index = index - 100;

            });
            
        }

	}
}