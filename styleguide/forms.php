<?php
    $prefix = '../';
    $title = 'Former | Styleguide | Intellifinder';
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
                <li><a class="active" href="forms.php">Forms</a></li>
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Forms</h1>
                
                <h2>Primær form</h2>
                
                <p>Målet med formene er at de er minimalistiske, og nemme at forstå.</p>
                
                <div class="formWrapper">
                
                    <div id="loginBox">

                        <form>

                            <h1>Log ind</h1>

                            <label>

                                <p>Brugernavn</p>

                                <input class="input" type="text" name="name" autofocus required>

                            </label>

                            <label>

                                <p>Brugernavn</p>

                                <input class="input" type="password" name="password" required>

                            </label>

                            <input class="submit" type="submit" value="Log ind" disabled>

                        </form>

                    </div><!-- loginBox -->
                    
                </div><!-- formWrapper -->
                
                <span>Code:</span>
                
                <textarea disabled class="codeBox" style="height: 1450px !important;">
CSS:
                    
.formWrapper {
    
    float:left;
    width: 100%;   
    background: #f1f1f1;
    margin-bottom: 20px;
    
}

#loginBox {
    
    float:left;
    width: 30%;
    padding: 15px;
    height: auto;
    border-radius: 3px;
    background: #FFF;
    z-index: 887465709;
    margin-bottom: 30px;
    margin-top: 20px;
    margin-left: 20px;
    
}

#loginBox form {
    
    float:left;
    width: 100%;
    
}

#loginBox form input {
    
    float:left;
    width: 100%;
    padding: 10px;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
    color: #333;
    border: none;
    border-bottom: 3px solid #f1f1f1;
    margin-bottom: 15px;
    outline: none;
    
}

#loginBox form input[type=text] {
    
    background: none;
    
}

#loginBox form input[type=email] {
    
    background: none;
    
}

#loginBox form input[type=password] {
    
    background: none;
    
}

#loginBox form input[type=submit] {
    
    color: #FFF;
    border-bottom: none;
    background: #2ecc71;
    
}

#loginBox form input:focus {
    
    border-bottom: 3px solid #3498db;
    
}
                    
                    
                    
                    
HTML:
                    
<div class="formWrapper">
                
    <div id="loginBox">

        <form>

            <h1>Log ind</h1>

            <label>

                <p>Brugernavn</p>

                <input class="input" type="text" name="name" autofocus required>

            </label>

            <label>

                <p>Brugernavn</p>

                <input class="input" type="password" name="password" required>

            </label>

            <input class="submit" type="submit" value="Log ind" disabled>

        </form>

    </div><!-- loginBox -->
    
</div><!-- formWrapper -->
                </textarea>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->
        
        <script>
            
            
            $(document).keyup(function() {
                
                isOkay = false;
                
                $('.input').each(function() {
                    
                    if($(this).val().length == 0){
                        
                        isOkay = false;
                        
                    }else {
                        
                        isOkay = true;
                        
                    }
                    
                });
               
               if(isOkay){
                   
                    $('.submit').css('background','#2ecc71'); 
                    $('.submit').css('color','#fff'); 
                    $('.submit').css('border-bottom','3px solid #2ecc71');
                    $('.submit').removeAttr('disabled');
                   
               }else {
                   
                   
                    $('.submit').css('background','#DDDDDD'); 
                    $('.submit').css('color','#333'); 
                    $('.submit').css('border-bottom','3px solid #d0d0d0');   
                    $('.submit').attr('disabled','disabled');
                   
               }
                
            });

        </script>
        
    </body>
    
</html>