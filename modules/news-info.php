<section class="news-info">

    <div class="container">

        <p class="back-text"><a href="news.php"><i class="fa fa-angle-left"></i>Back to all news</a></p>
    
        <div class="row">
        
            <div class="col-md-8">

                <div class="featured-news">

                    <div class="img-wrapper">

                        <img src="<?php echo $prefix; ?>assets/img/uploaded/news/<?php echo $obj->img; ?>">

                        <h1><?php echo $obj->title; ?></h1>

                    </div>

                    <div class="news-content">
                        
                        <p><?php echo $obj->des; ?></p>

                        <?php echo $obj->text; ?>

                        <p class="date"><?php echo $obj->dat; ?></p>

                    </div>

                </div>
            
            </div>
            
            <?php

            $nextId = $_GET['id']+1;

            $crud2 = new Crud($objCon, "intelli_news");

            $crud2->SetArray("*");

            $cruds2 = $crud2->Select('WHERE id = '.$nextId);

            $res2 = $crud2->SendSQL();

            $obj2 = $res2->fetch_object();

            ?>

            <div class="col-md-4">
                
                <?php

                if (mysqli_num_rows($res2)==0) {
                    
                    $newId = $_GET['id']-1;

                    $crud3 = new Crud($objCon, "intelli_news");

                    $crud3->SetArray("*");

                    $cruds3 = $crud3->Select('WHERE id = '.$newId);

                    $res3 = $crud3->SendSQL();

                    $obj3 = $res3->fetch_object();
                    ?>
                <a href="news_single.php?id=<?php echo $obj3->id; ?>">

                    <div class="next-news-container">

                        <p class="next-article-tag">Next article<i class="fa fa-angle-right"></i></p>

                        <div class="next-news-img-wrapper">

                            <img src="<?php echo $prefix; ?>assets/img/uploaded/news/<?php echo $obj3->img; ?>">

                            <div class="text-box">

                                <h4><?php echo $obj3->title; ?></h4>
                                <p>Read more</p>

                            </div>

                        </div>

                    </div>

                    </a>
                <?php 
                    
                }else {
                    ?>
                <a href="news_single.php?id=<?php echo $obj2->id; ?>">

                    <div class="next-news-container">

                        <p class="next-article-tag">Next article<i class="fa fa-angle-right"></i></p>

                        <div class="next-news-img-wrapper">

                            <img src="<?php echo $prefix; ?>assets/img/uploaded/news/<?php echo $obj2->img; ?>">

                            <div class="text-box">

                                <h4><?php echo $obj2->title; ?></h4>
                                <p>Read more</p>

                            </div>

                        </div>

                    </div>

                    </a>
                    <?php
                }

                ?>

                <div class="news-list">

                    <h2>Latest news:</h2>

                    <ul>
                        
                        <?php

                        $crud4 = new Crud($objCon, "intelli_news");

                        $crud4->SetArray("*");

                        $cruds4 = $crud4->Select('ORDER BY id DESC LIMIT 10');

                        $res4 = $crud4->SendSQL();

                        while($obj4 = $res4->fetch_object()){
                            
                            ?>
                                <li><a href="news_single.php?id=<?php echo $obj4->id; ?>"><p><?php echo $obj4->title; ?><span><?php echo $obj4->dat; ?></span></p></a></li>
                            <?php
                            
                        }

                        ?>
                    
                    </ul>
                    
                </div>
            
            </div>

        </div>

    </div>

</section>