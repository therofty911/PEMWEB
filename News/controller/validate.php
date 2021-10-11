<?php session_start();?> 
<?php
    include ('../model/dbconnect.php');
    if($_SESSION['level'] == 'user'){
        $_SESSION['level'] = "user";
        // header('../view/home_user.php');
        echo "<script>document.location.href = '../view/home_user.php';</script>";

    }elseif ($_SESSION['level'] == 'admin'){
        $_SESSION['level'] = "admin";
        // header('../view/home_admin.php');
        echo "<script>document.location.href = '../view/home_admin.php';</script>";

    }
?>