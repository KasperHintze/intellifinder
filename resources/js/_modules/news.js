/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class News extends Module {
	ready(app) {
		
		$(document).ready(function(){
			console.log('Loaded news.js');
		});

		$('#newsForm').submit(function() {
			$(this).tinymce().save();
		    $.ajax({
		        type: 'POST',
		        url: $(this).attr('action'),
		        data: $(this).serialize(),
		        success: function(data) {
		            $('#result').fadeIn('slow');
		            $('#result').html(data);
		            $('.loading').hide();
		        }
		    })
		    return false;
		});

	}
}