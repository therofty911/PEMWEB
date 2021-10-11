<?php 
    include_once '..\controller\functions.php';
    session_start();
    $user_ID = '';
    if(isset($_SESSION["id"])){
        $user_ID = $_SESSION["id"];
    }
?>
<?php
    $id_article = (int)$_GET['newsid'];
    if ( !empty($id_article) && $id_article > 0) {
        // Fecth news
        $article = getAnArticle( $id_article );
        $article = $article[0];
    }else{
        $article = false;
        echo "<strong>Wrong article!</strong>";
    }
    $other_articles = getOtherArticles( $id_article );

    $comment = fetchcomment($id_article);
    $reco = fetchReco();
?>
<?php
    include_once '..\controller\comment.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitcomment'])){
        submitcomment();
        unset($_POST['submitcomment']);
    }
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= stripslashes($article->news_title) ?></title>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shorcut icon" href="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png"> 
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <script src="../assets/js/script.js"></script>
</head>
<style>
    .card{
        background-color: #040816;
    }
    .card-comment{
        background-color: #0D1A44;
    }
    .card-header{
        background-color: #08102B;
        color: #00FFFF;
    }
    .comment input{
        border: none;
        outline: none;
    }
    .like{
        border: none;
        outline: none;
        background-color: #142868;
        color: rgb(0, 255, 255);
        padding: 5px;
        width: 100px;
        border-radius: 25px;
        letter-spacing: 2px;
    }
</style> 
<body style="overflow-x: hidden;">
    <div class="info">
        <div class="row">
            <div class="col-md-2 logo1"><a href="home_user.php"><img class="mobile" src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" alt="News_Speedy_UMN"></a></div>
            <div class="col-md-7 mt-2 list">
                <ul class="connect">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>    
                    <li><a href="" class="logD">Hello, <?php echo $_SESSION['user'];?></a></li>    
                </ul>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="text-center icon">
                        <form action="" method="POST" style="display: inline;">
                            <button type="button" class="btn btn-light col-5 col-xxl-3 logD"><a href="..\controller\logout.php" target="_blank" style="color: black; text-decoration: none;">Logout</a></button>
                            <p class="logM">Hello, <?php echo $_SESSION['user'];?></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 bg-body rounded">
        <div class="container-fluid">
        <a class="navbar-brand logo2" href="home_user.php"><img class="desktop" src="https://cdn.discordapp.com/attachments/891579314401869864/891681342994153512/news_logo.png" alt="News_Speedy_UMN" style="width: 250px;"></a>
        <button type="button" class="btn btn-light col-4 col-lg-2 float-start logM" style="transform: translateX(-80%);"><a href="..\controller\logout.php" target="_blank" style="color: white; text-decoration: none;">Logout</a></button>
            <button class="navbar-toggler mr-auto custom-toggler col-2 float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white;">
                </span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home_user.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Technology">Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Music">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Game">Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Politic">Politic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Art">Art</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Automotive">Automotive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Fashion">Fashion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_user.php?category=Health">Health</a>
                </li>
                <li class="nav-item logM" style="background:transparent;">
                    <a class="nav-link active" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item logM" style="background:transparent;">
                    <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- news section -->
    <section class="news py-5">
        <div class="container">
          <div class="row">
                <div class="col-lg-8 shadow content h-100">
                    <!-- Content -->
                    <img src="https://cdn.discordapp.com/attachments/891579314401869864/894262194756255784/wp2622216-dodge-charger-wallpaper.jpg" alt="" class="img-fluid">
                    <div class="row p-3">
                        <div class="col-sm-12">
                            <h2><?= stripslashes($article->news_title) ?></h2>
                            <span>published on <?= date($article->news_published_on) ?> WIB by <?= stripslashes($article->news_author) ?></span>
                        </div>
                        <div class="badges px-3">
                            <a href="#"><?= stripslashes($article->news_category) ?></a>
                            <button class="like" name="like"><a href="..\controller\likes.php?newsid=<?=$article->news_ID?>">Like (<?= stripslashes($article->news_likes)?>)</a></button>
                        </div>
                        <div class="p-content px-3">
                            <p><?= stripslashes($article->news_full_content) ?></p> 
                        </div>
                        <!-- for comment -->
                        <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                  <div class="mb-3 comment">
                                    <label for="comment" class="form-label">Write Your Comments</label>
                                    <input type="text" class="form-control" id="comment" placeholder="Write Your Comments" name="comment">
                                  </div>
                                  <div class="mb-3 comment">
                                    <button type="submit" class="btn btn-primary" style="background-color: #142868;color: rgb(0, 255, 255);outline: none;border: none;" name="submitcomment">Submit</button>
                                  </div>
                            </form>
                        </div>
                    </div>
                        <?php foreach($comment as $key => $comments) : ?>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header mb-0 pb-0">
                                 Posted by : <?= $comments->username ?> <?php Get_user_avatar($user_ID, $pdo) ?>
                                 <p class="text-end" style="display: inline; float: right;"><?= $comments->date ?></p>
                                </div>
                                <div class="card-body">
                                  <p class="card-text"><?= $comments->comment ?></p>
                                  <button class="like"><a href="..\controller\likes_comment.php?newsid=<?=$article->news_ID?>&commentid=<?=$comments->comment_ID?>">Like (<?= stripslashes($comments->comment_likes)?>)</a></button>
                                </div>
                              </div>
                            </div>
                        <?php endforeach ?>
                        <!-- end of comment -->
                    </div>
                </div>
              <div class="col-lg-4 mt-3 mt-lg-0">
                  <!-- social media -->
                    <div class="social-links row text-center">
                    <div class="col-3 col-lg-3 py-2 secondary-link">
                        <button href="" class="social-link w-100">
                            <i class="fab fa-twitter"></i>
                        </button>
                    </div>
                    <div class="col-3 col-lg-3 py-2 ">
                        <button href="" class="social-link w-100">
                            <i class="fab fa-facebook-square"></i>
                        </button>
                    </div>
                    <div class="col-3 col-lg-3 py-2 secondary-link">
                        <button href="" class="social-link w-100">
                            <i class="fab fa-youtube"></i>
                        </button>
                    </div>
                    <div class="col-3 col-lg-3 py-2 ">
                        <button href="" class="social-link w-100">
                            <i class="fab fa-instagram"></i>
                        </button>
                    </div>
                    </div>
                    <h4 class="aside-heading mt-3">Recommended Article</h4>
                    <?php foreach ($reco as $key => $recom) : ?>
                    <a href="..\view\readNews.php?newsid=<?=$recom->news_ID?>" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a href="link to categories"><?= stripslashes($recom->news_category) ?></a>
                            </div>
                            <a href="..\view\readNews.php?newsid=<?=$recom->news_ID?>" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3><?= stripslashes($recom->news_title) ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <?php endforeach ?>
                    <h4 class="aside-heading mt-5">Popular Categories</h4>
                    <div class="badges w-100">
                        <a href="kategoriNews_user.php?category=Technology">Technology</a>
                        <a href="kategoriNews_user.php?category=Music">Music</a>
                        <a href="kategoriNews_user.php?category=Game">Game</a>
                        <a href="kategoriNews_user.php?category=Politic">Politic</a>
                        <a href="kategoriNews_user.php?category=Art">Art</a>
                        <a href="kategoriNews_user.php?category=Automotive">Automotive</a>
                        <a href="kategoriNews_user.php?category=Fashion">Fashion</a>
                        <a href="kategoriNews_user.php?category=Health">Health</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="footer-logo"><img src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" alt=""></a>
                </div>
                <div class="col-md-4">
                    <h4>Usefull Links</h4>
                    <ul>
                        <li><a href="home_user.php">Home</a></li>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Newsletter</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Newsletter</h4>
                    <form class="d-flex">
                        <input class="form-control me-2 border-0 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn-main btn btn-success border-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="w-100 text-center mt-3">
                <p>Made by Rofty Studio &copy; 2021. All rights reserved. </p>
            </div>
        </div>
    </footer>
<script src="script.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var open = document.getElementById('hamburger');
    var changeIcon = true;

    open.addEventListener("click", function(){

        var overlay = document.querySelector('.overlay');
        var nav = document.querySelector('nav');
        var icon = document.querySelector('.menu-toggle i');

        overlay.classList.toggle("menu-open");
        nav.classList.toggle("menu-open");

        if (changeIcon) {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-times");

            changeIcon = false;
        }
        else {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
            changeIcon = true;
        }
    });
</script>

<!-- like button -->

</body>
</html>