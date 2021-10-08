
<?php
//include 'view/home.php';
require 'config/dbconnect.php'; 

    if(!empty($_SESSION['user'])) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
        if($_SESSION['level'] == "admin"){
            header('location:view/home_admin.php');
        }
        else if($_SESSION['level'] == "user"){
            header('location:view/home_user.php');
        }
    }
    else{
        header('location:view/home.php');
    }


