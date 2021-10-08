<?php
     //function validatelogout(){
        session_start();//digunakan untuk memulai session
        
        session_unset();
        //session_destroy();
        
        header('Location:..\index.php');
        
         
        //session_destroy(); //digunakan untuk menghapus session
    
         //jika berhasil maka akan dialihkan ke halaman index(login)
    //}

    // session_start();
    // $_SESSION['user'] = '';
    // unset($_SESSION['user']);
//     session_start();
//     session_destroy();
//     header("Location: ..\index.php");
// ?>