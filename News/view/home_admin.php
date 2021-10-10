<?php session_start();?>
<?php
    // require_once 'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\config\dbconnect.php';
    
    // get the database handler
    //$dbh = connect_to_db(); // function created in dbconnect, remember?
    // Fecth news
    // require_once  'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\controller\functions.php';
    include_once  '..\controller\functions.php';
    $news = fetchNews();
    $newsHeadOne = newsHeadOne();
    $newsHeadSideBar = newsHeadSideBar();
    $popular = fetchPopular();
?>
<!-- <?php
//   include '..\controller\logout.php';
//   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["logout"])){
//     validatelogout();
//   }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shorcut icon" href="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png"> 
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
    <title>News Speedy UMN</title>
</head>
<body style="overflow-x: hidden;">

    <div class="info">
        <div class="row">
            <div class="col-md-2 logo1"><img class="mobile" src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" alt="News_Speedy_UMN"></div>
            <div class="col-md-7 mt-2 list">
                <ul class="connect">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>    
                    <li><a href="..\view\dashboard.php">Dashboard</a></li>    
                    <li><a href="" class="logD">Hello, <?php echo $_SESSION['user'];?></a></li>    
                </ul>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="text-center icon">
                        <form  method="post" style="display: inline;">
                            <button type="button" class="btn btn-light col-5 col-xxl-3 logD" name="logout"><a href="..\controller\logout.php" style="color:black;">Logout</a></button>
                            <p class="logM">Hello, <?php echo $_SESSION['user'];?></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 bg-body rounded">
        <div class="container-fluid">
        <a class="navbar-brand logo2" href="#"><img class="desktop" src="https://cdn.discordapp.com/attachments/891579314401869864/891681342994153512/news_logo.png" alt="News_Speedy_UMN" style="width: 250px;"></a>
        <button type="button" class="btn btn-light col-4 col-lg-2 float-start logM" style="transform: translateX(-80%);" name="logout"><a   style="color: black; text-decoration: none;" >Logout</a></button>
            <button class="navbar-toggler mr-auto custom-toggler col-2 float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white;">
                </span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Technology">Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Music">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Game">Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Politic">Politic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Art">Art</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Automotive">Automotive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Fashion">Fashion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kategoriNews_admin.php?category=Health">Health</a>
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
                <div class="col-lg-8">
                    <?php foreach ($newsHeadOne as $key => $headBig) :?>
                    <a href="..\view\readNews_admin.php?newsid=<?=$headBig->news_ID?>" class="link-popular">
                        <div class="news-post shadow ">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/891579314401869864/894262194756255784/wp2622216-dodge-charger-wallpaper.jpg" alt="" style="max-width: 100%;height:685px;"></img>
                            <div class="news-post-badge text-center">
                            <a href="link to categories"><?= stripslashes($headBig->news_category) ?></a>
                              <!-- <a class="p-2 px-2 mb-2" href="#" >Games</a>
                              <a class="p-2 px-2" href="#">Technology</a> -->
                            </div>
                            <div class="news-post-content">
                                <div class="row">
                                  <!-- <div class="col-md-3">
                                      <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                  </div> -->
                                    <div class="col-sm-12 ms-2">
                                        <h3><?= stripslashes($headBig->news_title) ?></h3>
                                        <a class="btn btn-primary ms-1 btn-sm" href="read-news.php" role="button">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                        </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
              <div class="col-lg-4 mt-3 mt-lg-0">
                        <?php foreach ($newsHeadSideBar as $key => $headSide) : ?>
                    <a href="..\view\readNews_admin.php?newsid=<?=$headSide->news_ID?>" class="link-popular">
                        <div class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a href="link to categories"><?= stripslashes($headSide->news_category) ?></a>
                            </div>
                            <div class="news-post-content">
                                <div class="row">
                                  <!-- <div class="col-md-3">
                                      <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                  </div> -->
                                    <div class="col-sm-12 ms-2">
                                        <h3><?= stripslashes($headSide->news_title) ?></h3>
                                        <a class="btn btn-primary ms-1 btn-sm" href="read-news.php" role="button">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                        </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>

    <!-- main block section -->
    <div class="news-posts py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <?php foreach ($news as $key => $article) :?>
                    <article class="news-daily-post mb-3 shadow-lg">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="https://cdn.discordapp.com/attachments/891579314401869864/894262234979663892/wallhaven-p81xve.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <a href="..\view\readNews_admin.php?newsid=<?=$article->news_ID?>" class="link-popular">
                                        <h3 class="m-0 mt-2"><?= stripslashes($article->news_title) ?></h3>
                                        <p class="m-0 mb-2"><?= stripslashes($article->news_short_description) ?></p>    
                                        <span><strong>published on <?= date($article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></strong></span> <br>
                                    </a>
                                    <div class="badge mb-2" >
                                        <a href="link to categories"><?= stripslashes($article->news_category) ?></a>
                                    </div>
                                </div>
                            </div>
                    </article>
                    <?php endforeach?>
                    

                </div>
                <aside class="col-md-4 px-4 mt-lg-0 mt-3">
                    <!-- social media -->
                    <div class="social-links row text-center">
                        <div class="col-sm-3 py-2">
                            <button href="" class="social-link w-100">
                                <i class="fab fa-twitter"></i>
                            </button>
                        </div>
                        <div class="col-sm-3 py-2 secondary-link">
                            <button href="" class="social-link w-100">
                                <i class="fab fa-facebook-square"></i>
                            </button>
                        </div>
                        <div class="col-sm-3 py-2">
                            <button href="" class="social-link w-100">
                                <i class="fab fa-youtube"></i>
                            </button>
                        </div>
                        <div class="col-sm-3 py-2 secondary-link">
                            <button href="" class="social-link w-100">
                                <i class="fab fa-instagram"></i>
                            </button>
                        </div>
                    </div>
                    <h4 class="aside-heading mt-3">Popular Article</h4>
                    <?php foreach ($popular as $key => $populars) : ?>
                    <a href="..\view\readNews.php?newsid=<?=$populars->news_ID?>" class="link-populer">
                        <article class="row popular mb-3">
                            <div class="col-sm-4 my-2">
                                <img src="https://cdn.discordapp.com/attachments/653643188258734108/894847997165334548/unknown.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-7 my-2">
                                <h5 class="m-0" id="popshort"><?= stripslashes($populars->news_title) ?></h5>
                                <p class="m-0" id="popshort"><?= stripslashes($populars->news_short_description) ?></p>
                            </div>
                        </article>
                    </a>
                    <?php endforeach ?>
                    <h4 class="aside-heading mt-5">Popular Categories</h4>
                    <div class="badges w-100">
                        <a href="kategoriNews_admin.php?category=Technology">Technology</a>
                        <a href="kategoriNews_admin.php?category=Music">Music</a>
                        <a href="kategoriNews_admin.php?category=Game">Game</a>
                        <a href="kategoriNews_admin.php?category=Politic">Politic</a>
                        <a href="kategoriNews_admin.php?category=Art">Art</a>
                        <a href="kategoriNews_admin.php?category=Automotive">Automotive</a>
                        <a href="kategoriNews_admin.php?category=Fashion">Fashion</a>
                        <a href="kategoriNews_admin.php?category=Health">Health</a>
                    </div>
                </aside>
            </div>
        </div>

    </div>

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
                        <li><a href="">Home</a></li>
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
<!-- <script>
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
</script> -->
</body>
</html>
