
<?php
session_start();
//include 'view/home.php';
require 'config/dbconnect.php'; 

    //if(!empty($_SESSION['user'])) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
    
        header('location:view/home.php');
    


?>
