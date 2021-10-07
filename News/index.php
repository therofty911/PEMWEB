
<?php
include 'config.php'; 

    if(isset($_SESSION['username'])== 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
	    header('location: view/home.php'); 
    }
    else{
        header('location: view/home_user');
    }

?>
