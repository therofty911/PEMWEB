<?php
    // function validatelogout(){
    //     if(isset($_POST['user'])) $user = $_POST['user'];
    //     if(isset($_POST['pw'])) $pw = $_POST['pw'];
        
    //     session_start(); //digunakan untuk memulai session
    //     session_destroy(); //digunakan untuk menghapus session
    
    //     header('Location: index.php'); //jika berhasil maka akan dialihkan ke halaman index(login)
    // }

    // session_start();
    // $_SESSION['user'] = '';
    // unset($_SESSION['user']);
    session_start();
    session_destroy();
    header("Location: ..\index.php");
?>