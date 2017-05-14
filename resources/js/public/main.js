/* Dependencies
 ----------------------------------------------------------*/
import {Application} from "wrapper6";
/* Vendor
 ----------------------------------------------------------*/
/* Setup
 ----------------------------------------------------------*/
var app = window.app = new Application(window.options || {});
/* Services
 ----------------------------------------------------------*/
/* Register services
 ----------------------------------------------------------*/
/* Modules
 ----------------------------------------------------------*/
import Main from "../_modules/main.js";
import Tour from "../_modules/tour.js";
import Footer from "../_modules/footer.js";
/* Register modules
 ----------------------------------------------------------*/
app.use(Main);
app.use(Tour);
app.use(Footer);
//import $ from "jquery";
//window.jQuery = window.$ = $;
