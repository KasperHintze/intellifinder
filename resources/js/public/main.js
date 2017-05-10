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
import Functions from "../_modules/functions.js";
import Main from "../_modules/main.js";
import Login from "../_modules/login.js";
/* Register modules
 ----------------------------------------------------------*/
app.use(Functions);
app.use(Main);
app.use(Login);
//import $ from "jquery";
//window.jQuery = window.$ = $;