<?php
    session_start();
    $id_article = (int)$_GET['newsid'];
    include __DIR__.'..\..\..\News\model\dbconnect.php';
    $conn = connect_to_db();
    $query = "UPDATE `news_info` SET `news_likes`=`news_likes`+1 WHERE `news_ID`=?";
    $execute= $conn->prepare($query);
    $execute->execute(array($id_article));
    $url="../view/readNews_user.php?newsid=$id_article";
    $url=str_replace(PHP_EOL, '', $url);
    $url2="../view/readNews_admin.php?newsid=$id_article";
    $url2=str_replace(PHP_EOL, '', $url2);
    if($execute){
        if($_SESSION['level']=="user"){
            header("location: $url");
            return true;
        }
        else if($_SESSION['level']=="admin"){
            header("location: $url2");
            return true;
        }
    }
?>    