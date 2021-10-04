<html>    
<head>    
    <title>Welcome to news channel</title>      
    <link rel="stylesheet" type="text/css" href="News\design\style.css">    
</head>    
<body>            
    <div class="container">             
        <div class="welcome">             
            <h1>Latest news</h1>              
            <p>Welcome to the demo news site. <em>We never stop until you are aware.</em></p>         
        </div>              
        <div class="news-box">                  
            <div class="news">                    
                <?php
                    require_once 'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\config\dbconnect.php';
                    // get the database handler
                    $dbh = connect_to_db(); // function created in dbconnect, remember?
                    // Fecth news
                    require_once  'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\controller\functions.php';
                    $news = fetchNews($dbh);
                ?>
                <?php if ( $news && !empty($news) ) :?>
                <?php foreach ($news as $key => $article) :?>
                    <h2><a href="read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
                    <p><?= stripslashes($article->news_short_description) ?></p>
                    <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                <?php endforeach?>
                <?php endif?>
            </div>                             
        </div>              
        <div class="footer">phpocean.com &copy;<?= date("Y") ?> - all rights reserved.around</div>     
    </div>    
</body>    
</html>

