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

                          <label>
                          
                            <input type="text" name="username" required autofocus>
                            <span class="floating-label">Username</span>

                          </label>

                          <label>
                          
                            <input type="password" name="password" required>
                            <span class="floating-label">Password</span>

                          </label>

                          <label>
                          
                            <input type="submit" value="Login">

                          </label>

                        </form>

                    </div><!-- loginBox -->
                    
                </div><!-- formWrapper -->
                
                <p>Her ser vi Sass stylingen for<code>Forms</code>:</p>
                <pre>
<code>form {
            float: left;
            label {
                position: relative;
                float: left;
                width: 100%;
                input {
                    color: $text-color;
                    position: relative;
                    padding: 10px;
                    padding-left: 20px;
                    width: 100%;
                    margin-bottom: 15px;
                    outline: none;
                    border: 1px solid $border-color;
                    border-radius: 3px;
                    transition: all 0.2s ease-in;

                    &:focus ~ .floating-label,
                    &:not(:focus):valid ~ .floating-label{
                      top: -25px;
                      left: 0px;
                      font-size: 11px;
                      opacity: 1;
                    }

                    &:focus {
                        border: 1px solid $primary-navy;
                    }

                }
                input:-webkit-autofill {
                    box-shadow: 0 0 0px 1000px white inset;
                }
                input[type=submit]{
                    background: $primary-green;
                    color: #FFF;
                    border: none;
                    box-shadow: $standard-shadow;
                    border-radius: 3px;
                    margin-bottom: 0px;
                    text-transform: uppercase;
                    font-weight: bold;

                    &:hover {
                        background: lighten($primary-green, 5%);
                        box-shadow: $hover-shadow;
                    }

                }

                .floating-label {
                    position: absolute;
                    pointer-events: none;
                    left: 20px;
                    top: 12px;
                    transition: 0.2s ease all;
                    color: $text-color;
                }
            }
        }</pre>
                
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