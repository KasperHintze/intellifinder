<?php
    $prefix = '../';
    $title = 'Afstand og Størrelse | Styleguide | Intellifinder';
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
                <li><a href="buttons.php">Knapper</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a class="active" href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Afstand og Størrelse</h1>
                
                <h2>Minumum størrelse</h2>
                
                <p>Minimum størrelsen på logoet skal være 160x90px, alt under det skal ses som et ikon.</p>
                
                <div class="imgWrapper">
                    
                    <img style="width:160px; height:90px;" src="../imgs/zoologo-01.png" alt="logo">
                    
                </div><!-- imgWrapper -->
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox"><img style="width:160px; height:90px;" src="../imgs/zoologo-01.png" alt="logo"></textarea>
                
                <h2>Generel padding</h2>
                
                <p>Den generelle padding er 15px, det er med til at give siden en masse fri rum så tingende spiller bedre sammen.</p>
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox" style="height: 140px !important;">
CSS:
                    
div {
                    
padding: 15px;
                    
}
                </textarea>
                
                <h2>Generel margin</h2>
                
                <p>Den generelle margin er 20px, det er med til at give siden en masse fri rum så tingende spiller bedre sammen.</p>
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox" style="height: 140px !important;">
CSS:
                    
div {
                    
margin: 20px;
                    
}
                </textarea>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->
        
    </body>
    
</html>