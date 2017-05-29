<?php
    $prefix = '../';
    $title = 'Logo | Styleguide | Intellifinder';
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
                <li><a class="active" href="logo.php">Logo</a></li>
                <li><a href="buttons.php">Knapper</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Logo</h1>
                
                <h2>Logo varianter</h2>
                
                <div class="illustrations">
                
                    <div class="logoWrapper">

                        <img src="../imgs/zoologo-01.png" alt="logo">

                    </div><!-- logoWrapper -->

                    <div class="logoWrapper grey">

                        <img src="../imgs/zoologo-white.png" alt="logo">

                    </div><!-- logoWrapper -->
                    
                </div><!-- illustrations -->
                
                <span>Code:</span>
                
                <p>This is the <code>Panel</code> constructor:</p>
                <pre><code>function Panel(element, canClose, closeHandler) {
                  this.element = element;
                  this.canClose = canClose;
                  this.closeHandler = function () { if (closeHandler) closeHandler() };
                }</code></pre>
                
                <textarea disabled class="codeBox"><img src="../imgs/zoologo-01.png" alt="logo">
<img src="../imgs/zoologo-white.png" alt="logo"></textarea>
                
                <h2>Simplificeret logo</h2>
                
                <div class="illustrations">
                        <h1 class="left">Odense Zoo</h1>
                </div><!-- illustrations -->
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox"><h1>Odense Zoo</h1></textarea>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->
        
    </body>
    
</html>