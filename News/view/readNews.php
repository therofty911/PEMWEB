<?php require '..\controller\functions.php'?>
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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./design/css/style.css">
    <script src="./assets/js/script.js"></script>
    <title>News Speedy UMN</title>
</head>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

    .custom-toggler.navbar-toggler {
        background-color: #0D1A44;
    }
    .custom-toggler .navbar-toggler-icon {
        background-image: url(
    "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .logo1 .mobile {
        display: none;
    }

    .logM{
        display: none;
    }

    .info{
        background-color: #0D1A44;
        color: white;
        padding: 5px; 
    }

    .connect, .logo, .icon{
        padding: 10px;
        margin-top: 10px;
    }

    .logo{
        margin-left: 0px;
    }

    .connect{
        justify-content: center;
    }

    ul.connect > li{
        display: inline-block;
    }
    ul.connect > li > a{
        margin-right: 1.5em;
        text-decoration: none;
        color: white;
    }

    .nav-link{
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
    }

    .navbar-collapse>ul>li>a{
        text-decoration: none;
        color: #000;
    }

    .container{
        max-width: 120rem;
        width: 90%;
        margin: 0 auto;
    }

    .navbar-custom{
        background: #FFFFFF;
        border-bottom: 0.5px solid #e6e6e6;
        box-shadow: -1px 4px 5px 6px rgba(0,0,0,0.20);
    }

    nav{
        padding-top: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-transform: uppercase;
        font-size: 1rem;
        
    }

    .brand span{
        color: crimson;
    }

    nav ul{
        display: flex;
    }

    nav ul li{
        list-style: none;
        transform: translateX(100rem);
        animation: slideIn .5s forwards;
    }

    nav ul li:nth-child(1){
        animation-delay: 0s;
    }

    nav ul li:nth-child(2){
        animation-delay: .5s;
    }

    nav ul li:nth-child(3){
        animation-delay: 1s;
    }

    nav ul li:nth-child(4){
        animation-delay: 1.5s;
    }
    nav ul li:nth-child(5){
        animation-delay: 2s;
    }
    nav ul li:nth-child(6){
        animation-delay: 2.5s;
    }
    nav ul li:nth-child(7){
        animation-delay: 3s;
    }
    nav ul li:nth-child(8){
        animation-delay: 3.5s;
    }
    nav ul li:nth-child(9){
        animation-delay: 4s;
    }
    nav ul li:nth-child(10){
        animation-delay: 4.5s;
    }
    nav ul li:nth-child(11){
        animation-delay: 5s;
    }
    nav ul li:nth-child(12){
        animation-delay: 5.5s;
    }
    nav ul li:nth-child(4){
        animation-delay: 1.5s;
    }
    nav ul li:nth-child(4){
        animation-delay: 1.5s;
    }
    nav ul li:nth-child(4){
        animation-delay: 1.5s;
    }

    nav ul li a{
        padding: 0rem 0;
        margin: 0 .8rem;
        position: relative;
        letter-spacing: 2px;
        text-decoration: none;
    }

    nav ul li a:last-child{
        margin-right: 0;
    }

    nav ul li a::before,
    nav ul li a::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: crimson;
        left: 0;
        transform: scaleX(0);
        transition: all .5s;
    }

    nav ul li a::before{
        top: 0;
        transform-origin: left;
    }

    nav ul li a::after{
        bottom: 0;
        transform-origin: right;
    }

    .overlay{
        background-color: rgba(0,0,0,.95);
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        transition: opacity 650ms;
        transform: scale(0);
        opacity: 0;
        display: none;
    }

    nav ul li a:hover::before,
    nav ul li a:hover::after{
        transform: scaleX(1);
    }

    h1,h2,h3,h4{
        font-weight: 700;
        color:rgb(0, 255, 255);
    }

    h3{
        font-size: 1.5rem;
    }

    .news-post {
        position: relative;
    }

    .news-post-badge{
        position: absolute;
        top: 10px;
        right: 10px;
    }

    a{
        color: #f3f3f3;
        transition: 0.2s ease;
    }
    a:hover{
        color: #707070;

    }

    img{
        filter: grayscale(30%) brightness(0.9);
    }

    .link-popular:hover{
        opacity: 80%;
    }

    .news-post-badge a{
        display: block;
        background-color: #0D1A44;
        color: #f3f3f3;
        font-size: 0.7em;
        width: 100px;
        border-radius: 25px;
    }

    .news-post-content{
        position: absolute;
        bottom: 10px;
        color: #ffffff;

    }

    .news{
        background-color: #08102b;
    }

    .news-posts{
        background-color: #0D1A44;
        color: #C5C6C7;
    }

    .news-daily-post{
        /* background-color: #0029af; */
        background-color: #000b2e;
        border-radius: 10px;
    }

    .news-daily-post img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .news-daily-post p{
        font-size: 0.9rem;
    }
    .news-daily-post .col-sm-8{
        border-left: 3px solid rgb(0, 255, 255);
        border-radius: 5px;
    }

    .badge{
        padding-top: 1rem;
        padding-bottom: 0.5rem;
        
    }

    .badge > a{
        margin-left: 0.5rem;
        padding: 0.5rem;
        background-color: #142868;
        color: #f3f3f3;
        font-size: 1em;
        border-radius: 25px;
    }

    .social-links {
        background-color: #142868;
        font-size: 1rem;
    }
    .social-links button{
        background: transparent;
        border: none;
        color: #f3f3f3;
    }

    .aside-heading{
        border-bottom: 3px solid rgb(0, 255, 255);
        padding-left: 5px
    }

    .secondary-link{
        background-color: #000b2e;

    }

    .badges{
        padding-top: 1rem;
        padding-bottom: 0.5rem;
    }

    .badges > a{
        margin-left: 0.5rem;
        display: inline-block;
        margin: 0.2rem;
        padding: 0.5rem;
        background-color: #142868;
        color: #f3f3f3;
        font-size: 0.9em;
        border-radius: 25px;
    }

    .content{
        background-color: #0D1A44;
        color:#f3f3f3;
    }

    .footer{
        background-color: #080f27;
        color: #f3f3f3;
        /* height: 250px; */

    }


    .btn-main{
        background-color: #142868 !important;
        color: #f3f3f3 !important;
    }

    .btn-main:hover{
        background-color: #001b75 !important;

    }

    input{
        background-color: #252525 !important;
        color: #f3f3f3 !important;
    }

    @media only screen 
    and (min-device-width: 768px) 
    and (max-device-width: 1024px) 
    and (orientation: landscape) 
    and (-webkit-min-device-pixel-ratio: 1) {
        nav{
            margin-right: 500px;
        }
    }

    @keyframes slideIn {
        from{

        }
        to{
            transform: translateX(0);
        }
    }



    @media(max-width: 460px){
        .news-post .photo{
            height: auto !important;
        }
    }

    @media(max-width: 500px){
        .news-post .photo{
            height: auto !important;
        }
    }


    @media (max-width: 600px) {
        .logo1 .mobile {
            margin-top: 50px;
            display: block;
        }
        .logo2 .desktop {
        display: none;
        }
        .list{
            display: none;
        }
        .logD{
            display: none;
        }
        .logM{
            background-color: #0D1A44;
            display: block;

        }
        .logM:hover{
            background-color: #3f3f3f;
        }
        nav{
            padding-top: 0;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
        }
        nav ul li{
            margin-top: 2rem;
        }
        nav ul li a{
            margin: 0;
            font-size: 2rem;
        }
        .navbar-collapse{
            margin-right: 0px;
        }
        .news-post .photo{
            height: auto !important;
        }

    }

    @media (max-width: 700px){
        .mx-30{
            margin-bottom: 30px;
        }
    }

    @media screen and (max-width: 700px){

        .menu-toggle{
            display: block;
        }

        nav{
            padding-top: 0;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
        }

        nav ul{
            flex-direction: column;
        }

        nav ul li{
            margin-top: 3rem;
        }

        nav ul li a{
            margin: 0;
            font-size: 1.5rem;
        }

        .brand{
            font-size: 5rem;
        }
    
    .overlay.menu-open,
    nav.menu-open{
        display: flex;
        transform: scale(1);
        opacity: 1;
    }
    .connect{
        justify-content: center;
        text-align: center;
    }

    
    }

    @media(max-width: 768px){
        .news-post .photo{
            height: auto !important;
        }
    }

    @media (max-width: 800px) {
        nav{
            padding-top: 0;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
        }
        nav ul li{
            margin-top: 2rem;
        }
        nav ul li a{
            margin: 0;
            font-size: 2rem;
        }
        .navbar-collapse{
            margin-right: 0px;
        }
        .news-post .photo{
            height: auto !important;
        }

    }

    @media(max-width: 992px){
        .news-post .photo{
            height: auto !important;
        }
    }

    @media (max-width: 1280px) {

        .logo1 .mobile {
            margin-top: 20px;
            display: block;
        }
        .logo2 .desktop {
        display: none;
        }
        .news-post .photo{
            height: auto !important;
        }

    }
    @media  screen and (max-width: 1366px) {
        .news-post .photo{
            height: auto !important;
        }
    }


    /*
    font-family: 'Montserrat', sans-serif;
    font-family: 'Raleway', sans-serif;
    */

    /* *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    } */


</style>
<body style="overflow-x: hidden;">

    <div class="info">
        <div class="row">
            <div class="col-md-2 logo1"><img class="mobile" src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" alt="News_Speedy_UMN"></div>
            <div class="col-md-7 mt-2 list">
                <ul class="connect">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>    
                    <li><a href="#">Contact Us</a></li>    
                </ul>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="text-center icon">
                        <button type="button" class="btn btn-light col-5 col-xxl-3 logD"><a href="login.html" target="_blank" style="color: black; text-decoration: none;">Login</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 bg-body rounded">
    <div class="container-fluid">
      <a class="navbar-brand logo2" href="#"><img class="desktop" src="https://cdn.discordapp.com/attachments/891579314401869864/891681342994153512/news_logo.png" alt="News_Speedy_UMN" style="width: 250px;"></a>
      <button type="button" class="btn btn-light col-4 col-lg-2 float-start logM" style="transform: translateX(-80%);"><a href="login.html" target="_blank" style="color: white; text-decoration: none;">Login</a></button>
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
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- news section -->
    <section class="news py-5">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 shadow content">
                <!-- Content -->
                <img src="https://cdn.discordapp.com/attachments/891579314401869864/894262194756255784/wp2622216-dodge-charger-wallpaper.jpg" alt="" class="img-fluid">
                <div class="row p-3">
                <?php
                        // get the database handler
                        $dbh = connect_to_db(); // function created in dbconnect, remember?
                        $id_article = (int)$_GET['newsid'];
                        if ( !empty($id_article) && $id_article > 0) {
                            // Fecth news
                            $article = getAnArticle( $id_article, $dbh );
                            $article = $article[0];
                        }else{
                            $article = false;
                            echo "<strong>Wrong article!</strong>";
                        }
                        $other_articles = getOtherArticles( $id_article, $dbh );
                    ?>
                    <div class="col-sm-12">
                    <h2><?= stripslashes($article->news_title) ?></h2>
                        <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                    </div>
                    <div class="badges px-3">
                    <a href="link to categories"><?= stripslashes($article->news_category) ?></a>
                    </div>
                    <div class="p-content px-3">
                    <p><?= stripslashes($article->news_full_content) ?></p> 
                    </div>
                </div>
            </div>
              <div class="col-lg-4 mt-3 mt-lg-0">
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
                    <a href="#" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <a href="#" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <a href="#" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <a href="#" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <a href="#" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <a href="#" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <a href="#" class="link-popular">
                        <article class="news-post shadow mb-3">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/868897795397005362/894847007892598784/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </a>
                    <a href="" class="link-popular">
                        <div class="news-post shadow">
                            <img class="img-fluid photo" src="https://cdn.discordapp.com/attachments/891579314401869864/894249908805201971/unknown.png" alt="" style="max-width: 100%;height:335px;"></img>
                            <div class="news-post-badge text-center">
                                <a class="p-2 px-2 mb-2" href="#" >Games</a>
                                <a class="p-2 px-2" href="#">Technology</a>
                            </div>
                            <a href="#" class="link-popular">
                                <div class="news-post-content">
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                            <img src="https://cdn.discordapp.com/attachments/891579314401869864/891942172235034674/unnamed.png" alt="" class="img-fluid rounded-circle">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <h3>Sebuah Game yang sangat enjoyable saat di mainkan, dan membawa lagu bernuansa indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </a>
                    <h4 class="aside-heading mt-5">Popular Categories</h4>
                    <div class="badges w-100">
                        <a href="link to categories">Technology</a>
                        <a href="link to categories">Music</a>
                        <a href="link to categories">Games</a>
                        <a href="link to categories">Politic</a>
                        <a href="link to categories">Arts</a>
                        <a href="link to categories">Automotive</a>
                        <a href="link to categories">Fashion</a>
                        <a href="link to categories">Healty</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main block section -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/fontawesome.min.js" integrity="sha512-xs1el+uLI2T4QTvRIv3kFBWvjQiPVAvKQM4kzZrJoLVZ1tSz1E0fkZch0cjd1f+sTk2MtBCHbP3PiVTdoFKAJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
</body>
</html>