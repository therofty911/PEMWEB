<?php 

include '..\..\News\config\dbconnect.php';

// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("localhost","root","");

// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("user");
 
$news = mysqli_connect($host, $user, $password, $db);

$news = mysqli_query($news, "")

?>

<?php

$db