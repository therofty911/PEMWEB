<?php
//     include_once 'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\config\dbconnect.php'; 
    include_once 'D:\XAMPP\htdocs\PROGRAM_WEB\PROJECT\PEMWEB\News\config\dbconnect.php'; 
    function verifiedlogin(){
            $user = $conn->prepare(" SELECT email, user, salt FROM user ORDER BY email DESC ");
            $admin = $conn->prepare(" SELECT email, user, salt FROM `admin` ORDER BY email DESC ");
    }