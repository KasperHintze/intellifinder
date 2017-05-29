<?php
    $prefix = '../';
    $title = 'Knapper | Styleguide | Intellifinder';
?>
<html>

    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
    
    <body class="styleguide">
        
        <div id="menu">
            
            <h1>Styleguide</h1>
        
            <ul>
                
                <li><a href="index.php">Hjem</a></li>
                <li><a href="logo.php">Logo</a></li>
                <li><a class="active" href="buttons.php">Knapper</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Knapper</h1>
                
                <h2>Primære knapper</h2>
                
                <p>Knapperne er simple, men rammer stadig vores tema.</p>
                
                <div class="buttonsWrapper">
                
                    <li class="menuItem">
                        <a>Menu punkt</a>
                    </li>
                    
                    <a class="calenderItem">Kalender</a>
                    
                    <a class="seMere">Se mere</a>

                    <a class="priser">Priser</a>
                    
                </div><!-- imgWrapper -->
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox" style="height: 1420px !important;">
CSS:
                    
.menuItem {

    height: 50px;
    list-style: none;
    display: inline-block;
    font-size: 100%;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 10px;
    text-align: center;
    border-right: 2px solid rgba(0, 0, 0, 0.14);
    -webkit-transform: skewX(-20deg);
    -moz-transform: skewX(-20deg);
    -ms-transform: skewX(-20deg);
    -o-transform: skewX(-20deg);
    transform: skewX(-20deg);
    float: left;

}

.menuItem a {

    cursor: pointer;
    font-weight: 100;
    text-decoration: none;
    color: #333;
    display: block;
    -webkit-transform: skewX(20deg);
    -moz-transform: skewX(20deg);
    -ms-transform: skewX(20deg);
    transform: skewX(20deg);
    -o-transform: skewX(20deg);
    line-height: 31px;

}

.menuItem a:hover {

    color: #f1c40f;

}

.calenderItem {

    cursor: pointer;
    background-color: #48bd73;
    height: 50px;
    margin-right: 20px;
    color: #FFF;
    width: 200px;
    line-height: 50px;
    text-align: center;
    float: left;
    margin-left: 20px;
    margin-right: 20px;


}

.seMere {

    cursor: pointer;
    color: #FFF;
    float: left;
    border-radius: 30px;
    padding-top: 16px;
    padding-bottom: 16px;
    padding-right: 35px;
    padding-left: 35px;
    background-color: #3498db;

}

.priser {

    float: left;
    height: 50px;
    line-height: 50px;
    margin-left: 15px;
    font-size: 1.25rem;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: bold;

}

.priser:hover {

    color: #f1c40f;

}
                    
HTML:
                    
<li class="menuItem">
    <a>Menu punkt</a>
</li>
                    
<a class="calenderItem">Kalender</a>
                    
<a class="seMere">Se mere</a>

<a class="priser">Priser</a>
                </textarea>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->
        
    </body>
    
</html>