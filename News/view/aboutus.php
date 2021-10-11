<?php

    include_once  '..\controller\functions.php';
    $news = fetchNews();
    $newsHeadOne = newsHeadOne();
    $newsHeadSideBar = newsHeadSideBar();
    $popular = fetchPopular();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Speedy UMN</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

        <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shorcut icon" href="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png"> 
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <script src="../assets/js/script.js"></script>
</head>
<style>
    #popshort {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 75ch;
    }
</style>
<body style="overflow-x: hidden;">
    <!-- news section -->
    <section class="news py-5">
    <a class=" logo2 d-flex justify-content-center mb-3" href="home.php"><img class="desktop" src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" alt="News_Speedy_UMN" style="width: 550px;"></a>
        <h2 class="d-flex justify-content-center" style="letter-spacing: 15px;">OUR STAFF</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-3">
                <div class="card-group">
                    <div class="card" data-aos="zoom-in-up">
                        <img src="../assets/images/faces/7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Rulyanda Melsya</h5>
                        <p class="card-text">00000045685</p>
                        <p class="card-text"><small class="text-muted">Informatic</small></p>
                        </div>
                    </div>
                    <div class="card" data-aos="zoom-in-up">
                        <img src="../assets/images/faces/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Casey Tjiptadjaja</h5>
                        <p class="card-text">00000045957</p>
                        <p class="card-text"><small class="text-muted">Informatic</small></p>
                        </div>
                    </div>
                    <div class="card" data-aos="zoom-in-up">
                        <img src="../assets/images/faces/8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">George Marcellino Jo</h5>
                        <p class="card-text">00000045841</p>
                        <p class="card-text"><small class="text-muted">Informatic</small></p>
                        </div>
                    </div>
                    <div class="card" data-aos="zoom-in-up">
                        <img src="../assets/images/faces/4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Meitio Susanto</h5>
                        <p class="card-text">00000044843</p>
                        <p class="card-text"><small class="text-muted">Informatic</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right">
                    <a href="#" class="footer-logo"><img src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" alt=""></a>
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <h4>Usefull Links</h4>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Newsletter</a></li>
                    </ul>
                </div>
                <div class="col-md-4" data-aos="fade-left">
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>
</body>
</html>