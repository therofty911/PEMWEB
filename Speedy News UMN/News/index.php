<?php
    session_start();
    require 'model/dbconnect.php';    
    //require ('model/dbconnect.php');    
    header('location:view/home.php');
?>