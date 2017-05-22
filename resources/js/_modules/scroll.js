import {Module} from "wrapper6";
var $ = jQuery;
export default class Scroll extends Module {
	ready(app) {
		
    $('nav ul li a').click(function() {

        window.thisitem = $(this);
        console.log(thisitem);

        $('html, body').animate({
            scrollTop: $($(thisitem).attr('href')).offset().top - 200
        }, 1000);
        return false;
        
    });

	}
}