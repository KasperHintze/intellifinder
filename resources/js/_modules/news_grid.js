/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class NewsGrid extends Module {
	ready(app) {
		
		$(document).ready(function(){
			console.log('Loaded news_grid.js');
		});
        
        if($('#newsGrid')[0]){
            
            //Her har jeg lavet et array box
            var boxes = [];
            
            // Her henter jeg nyheder og putter i arrayet
            $.ajax({
 
                url : "../code/code_getNews.php",
                type : 'POST',

                success : function( data ) {

                    var result = JSON.parse(data);

                    $.each(result, function(i, item){

                        console.log(item);

                        boxes.push({
                            id: item.id,
                            url: item.url,
                            text: item.des
                        });

                    });
                    
                    var windowWidth = $(window).width();

                    if(windowWidth > 1200){

                        var dSize = 3;

                        makeGrid(3, 0);

                    }else if(windowWidth > 810){

                        var dSize = 2;

                        makeGrid(2, 0);


                    }else if(windowWidth < 809) {

                        var dSize = 1;

                        makeGrid(1, 0);

                    }else {

                        alert('else');   

                        var dSize = 3;

                    }
                    
                }
 
            });

            //Her tjekker jeg efter skærm størrelse når man resizer siden og laver henholdsvis 3-2 eller 1 kolonne
            $(window).on('resize', function() {

                    var ww =  $(window).width();

                    if(ww > 1200){

                        if(dSize == 3){}else {

                            clearCols();

                            makeGrid(3, 0);

                            var dSize = 3;

                        }

                    }else if(ww > 810){

                        if(dSize == 2){}else {

                            clearCols();

                            makeGrid(2, 0);

                            var dSize = 2;

                        }

                    }else if(ww < 809) {

                        if(dSize == 1){}else {

                            clearCols();

                            makeGrid(1, 0);

                            var dSize = 1;

                        }

                    }else {

                        console.log('else');   

                    }

            });

            //Her er min grid function som fordeler hver boks ud i den nuværende mindste kolonne
            function makeGrid(gridSize, counter) {

                    var col1Height = checkHeight('.col-1 .box');

                    var col2Height = checkHeight('.col-2 .box');

                    var col3Height = checkHeight('.col-3 .box');
                
                    console.log('col1Height = '+col1Height);
                    console.log('col2Height = '+col2Height);
                    console.log('col3Height = '+col3Height);

                    if (counter == 0) {
                        
                        console.log('if counter = 0');

                        var imgText = checkingArray(boxes[counter]['url'], boxes[counter]['text']);

                        var newItem = $('.col-1').append('<a href="news_single.php?id='+boxes[counter]['id']+'"><div class="box" data-fixHeight="0" data-id="' + boxes[counter]['id'] + '">' + imgText + '</div></a>');

                    } else if (col3Height < col1Height && col3Height < col2Height && gridSize >= 3) {
                        
                        console.log('else if 1');

                        var imgText = checkingArray(boxes[counter]['url'], boxes[counter]['text']);

                        var newItem = $('.col-3').append('<a href="news_single.php?id='+boxes[counter]['id']+'"><div class="box" data-fixHeight="0" data-id="' + boxes[counter]['id'] + '">' + imgText + '</div></a>');

                    } else if (col2Height < col1Height && col2Height <= col3Height && gridSize >= 2 || col2Height < col1Height && gridSize >= 2) {
                        console.log('else if 2');
                        
                        var imgText = checkingArray(boxes[counter]['url'], boxes[counter]['text']);

                        var  newItem = $('.col-2').append('<a href="news_single.php?id='+boxes[counter]['id']+'"><div class="box" data-fixHeight="0" data-id="' + boxes[counter]['id'] + '">' + imgText + '</div></a>');

                    }else {
                        
                        console.log('else');

                        var imgText = checkingArray(boxes[counter]['url'], boxes[counter]['text']);

                        var newItem = $('.col-1').append('<a href="news_single.php?id='+boxes[counter]['id']+'"><div class="box" data-fixHeight="0" data-id="' + boxes[counter]['id'] + '">' + imgText + '</div></a>');

                    }

                    if(counter == boxes.length-1){

                        loadImages();

                    }else {

                        //console.log('counter = '+counter);

                        if(boxes[counter]['url'] == ''){

                            var counter = counter+1;

                            makeGrid(gridSize, counter);

                        }else{

                            newItem.children().last().find('img').css('opacity', '0');

                            var imgLoad = $("<img />");
                            imgLoad.attr("src", '../assets/img/uploaded/news/'+boxes[counter]['url']);
                            imgLoad.unbind("load");
                            imgLoad.bind("load", function () {

                                //Tjek aspect ratio
                                var newWidth = newItem.children().last().outerWidth()/100*95.5;                

                                var newHeight = newWidth * (this.height/this.width);

                                console.log('newHeight = %c '+newHeight, 'color:blue;');

                                // Get image sizes
                                newItem.children().last().attr('data-fixHeight', newHeight);

                                newItem.children().last().find('img').css('min-height', newHeight);

                                counter = counter+1;

                                makeGrid(gridSize, counter);

                            });

                        }//ELSE OF IF BOXES URL == ''

                    }//ELSE OF IF COUNTER == 10


            }//END OF MAKEGRID

            function loadImages(){

                imageHeight();

                $('#loader').hide();

            }

            $(window).scroll(function() {

                imageHeight();

            });

            function imageHeight(){

                var wHeight = $(window).height()-100;

                $('.images').each(function(){

                    var scrollTop = $(window).scrollTop();

                    var elementOffset = $(this).offset().top;

                    var distance = (elementOffset - scrollTop);

                    if(distance < wHeight){

                       $(this).attr('src', '../assets/img/uploaded/news/'+$(this).attr('data-src'));

                       $(this).css('opacity', '1');

                    }

                });   

            }

            function checkHeight(elem){

                var thisHeight = 0;

                $(elem).each(function() {

                    var boxHeight = parseFloat($(this).outerHeight());

                    var fixHeight = parseFloat($(this).attr('data-fixHeight'));

                    thisHeight += boxHeight+fixHeight;

                });
                
                return thisHeight;

            }

            //Her tjeker jeg mit box array og tjekker om tekst eller billede url er tomt og sender en variable med tilbage
            function checkingArray(img, text){

                if (img == '') {

                    var newImg = '';

                } else {

                    var newImg = '<img class="images" data-src="'+ img +'">';

                }

                if (text == '') {

                    var newText = '';

                } else {

                    var newText = '<p>' + text + '</p>';

                }

                var imgText = newImg+newText;

                return imgText;

            }

            //Her rydder jeg alle kolonner så jeg kan fylde det igen. Den her funktion bliver brugt til responsive
            function clearCols(){

                $('.col').each(function() {

                    $(this).html('');

                });

            }
            
        }
        
        // END

	}
}