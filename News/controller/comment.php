<?php
    //session_start();
    date_default_timezone_set('Asia/Jakarta');
    function submitcomment(){
        include __DIR__.'..\..\..\News\config\dbconnect.php';
        if(isset($_POST['comment'])) $comment = $_POST['comment'];
        if(isset($_SESSION['id'])) $uid = $_SESSION['id']; 
        $id_article = (int)$_GET['newsid'];
        $likes = 0;
        $date = date('Y-m-d');
        $conn = connect_to_db();
        $query = "INSERT INTO `comment`(`news_ID`, `user_ID`, `comment`, `comment_likes`, `date`) VALUES (?,?,?,?,?)";
        $execute = $conn -> prepare($query);
        $execute->execute(array($id_article,$uid,$comment,$likes,$date));

        if($execute){
            echo "<script>alert('comment added succesfully');</script>";
            if($_SESSION['user'] = "user"){
                header('location:..\view\readNews_user.php?newsid=$id_article');
            }
            else{
                header('location:"..\view\readNews_admin.php?newsid=$id_article');
            }
        }
    }
?>