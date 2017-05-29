<?php
    $prefix = '../';
    $title = 'Farver | Styleguide | Intellifinder';
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
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a class="active" href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Farver</h1>
                
                <h2>Primære farver</h2>
                
                <p>Disse primære "flade" farver er med til at fuldføre temaet. Det er varme og bløde farver.</p>
                
                <div class="imgWrapper">
                
                    <div class="colorBox" style="background: #2ecc71;"></div>
                    
                    <div class="colorBox" style="background: #f1c40f;"></div>
                    
                </div><!-- imgWrapper -->
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox" style="height: 250px !important;">
CSS:
                    
div1 {
                    
background: #2ecc71;
            
                    
}
                    
div2 {
                    
background: #f1c40f;
            
                    
}
                </textarea>
                
                <h2>Alle farver</h2>
                
                <p>Alle farverne er varme og vigtigst af alt nøglen til at skabe Odense Zoos tema.</p>

                <div class="imgWrapper">
                
                    <div class="colorBox" style="background: #2ecc71;"></div>
                    
                    <div class="colorBox" style="background: #f1c40f;"></div>
                    
                    <div class="colorBox" style="background: #3498db;"></div>
                    
                    <div class="colorBox" style="background: #e74c3c;"></div>
                    
                    <div class="colorBox" style="background: #333;"></div>

                    <div class="colorBox" style="background: #2c3e50;"></div>
                    
                    <div class="colorBox" style="background: rgba(0,0,0,0.6);"></div>
                    
                </div><!-- imgWrapper -->
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox" style="height: 640px !important;">
CSS:
                    
div1 {
                    
background: #2ecc71;
                    
}
                    
div2 {
                    
background: #f1c40f;
                    
}
                    
div3 {
                    
background: #3498db;
                    
}
                    
div4 {
                    
background: #e74c3c;
                    
}
                    
div5 {
                    
background: #333;
                    
}
                    
div6 {
                    
background: #2c3e50;
                    
}
                    
div7 {
                    
background: rgba(0,0,0,0.6);
                    
}
                </textarea>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->
        
    </body>
    
</html>