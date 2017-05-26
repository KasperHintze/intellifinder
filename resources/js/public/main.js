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
import News from "../_modules/news.js";
import NewsGrid from "../_modules/news_grid.js";
import Scroll from "../_modules/scroll.js";
/* Register modules
 ----------------------------------------------------------*/
app.use(Main);
app.use(Tour);
app.use(Footer);
app.use(News);
app.use(NewsGrid);
app.use(Scroll);

import $ from "jquery";
window.jQuery = window.$ = $;
