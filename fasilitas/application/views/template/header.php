<?php
//make session user can't open this page without login
if (!isset($_SESSION['email'])) {
    redirect('auth');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <?php
        echo $css;
        echo $js;
        ?>
    </head>
    <style>
        body {
            background-color: #00071F !important;

        }

        .logo-img {
            width: 150px;
        }

        .card {
            box-shadow: 1px 0px 22px 6px rgba(0, 0, 0, 0.75);
        }

        #firefly {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }


        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
        }

        .card-box {
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px #c5c5c5;
            margin-bottom: 30px;
            float: left;
            border-radius: 10px;
            background-color: #0D1A44 !important;
        }

        .card-box .card-thumbnail {
            max-height: 200px;
            overflow: hidden;
            border-radius: 10px;
            transition: 1s;
        }

        .card-box .card-thumbnail:hover {
            transform: scale(1.2);
        }

        .card-box h3 a {
            font-size: 20px;
            text-decoration: none;
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
            border-color: rgb(255, 255, 255);
        }


        @media (max-width: 600px) {
            .logo-img {
                width: 140px;
            }
        }
    </style>

    <body>
        <div id="firefly"></div>

        <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #0D1A44 !important;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://cdn.discordapp.com/attachments/692662918562578513/915571133854658581/rem.png" alt="" class="logo-img"></a>
                <button class="navbar-toggler mr-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="color: white;">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <?php if ($_SESSION['role'] == "admin") { //buat role admin
                        ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= base_url('home/userlist'); ?>" style="color: #BAA360;">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home/facilityDash'); ?>" style="color: #BAA360;">Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home/reqUser'); ?>" style="color: #BAA360;">Request</a>
                            </li>
                        <?php } ?>

                        <?php if ($_SESSION['role'] == "user") { //buat role user
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home/facilityDash'); ?>" style="color: #BAA360;">Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home/reqUser'); ?>" style="color: #BAA360;">Request</a>
                            </li>
                        <?php } ?>

                        <?php if ($_SESSION['role'] == "management") { //buat role management
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #BAA360;">Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #BAA360;">Request</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #BAA360;Cursor:text;">Hello, <?php echo $_SESSION["fname"]; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('auth/logout'); ?>" style=" color: #BAA360;">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php } ?>