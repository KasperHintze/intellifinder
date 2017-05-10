/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class Functions extends Module {
	ready(app) {
		
		function log(msg, style = ''){
	
			var dt = new Date();
			var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
			
			if (typeof msg == "object") {

				console.log('%c[' +time+ ']', 'font-weight:bold; color: #2ecc71; background: #000; '+style, 'Object(Key, Value)');
				
				$.each( msg, function( key, value ) {
					
				  	console.log(key+'.[');
					
					$.each( value, function( key, value ) {
					
						console.log('     %c'+key+': ', 'font-weight:bold; color: #3498db; ', value);

					});
					
					console.log(']');
					
					console.log('');
					
				});
				
			}else {
			
				console.log('%c[' +time+ ']', 'font-weight:bold; color: #2ecc71; background: #000; '+style, msg);
				
			}
			
		}

	}
}