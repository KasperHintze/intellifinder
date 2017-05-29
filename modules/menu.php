    <?php 

    $hostUri = $_SERVER['REQUEST_URI'];
    $link = "#cases";
    
    if($hostUri == "/intellifinder/index.php"){

      $link = "#cases";

    } else {

      $link = "../index.php#cases";

    }
    ?>
    
    <nav>
      <a href="<?php echo $prefix; ?>index.php"><img class="noselect" alt="Logo" src="<?php echo $prefix; ?>assets/img/logo.svg"></a>
      <ul>
        <li><a class="noselect" href="<?php echo $link?>">CASES</a></li>
        <li><a class="noselect" href="<?php echo $prefix; ?>pages/news.php">NEWS</a></li>
        <li><a class="noselect" href="#aboutus">ABOUT US</a></li>
        <li><a class="noselect" href="#contact">CONTACT</a></li>
      </ul>
    </nav>