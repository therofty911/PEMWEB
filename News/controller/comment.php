<?php
    session_start();
    date_default_timezone_set('Asia/Jakarta');
    function submitcomment(){
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
                echo "<script>document.location.href =..\view\readNews_user.php?newsid='$id_article';</script>";
            }
            else{
                echo "<script>document.location.href =..\view\readNews_admin.php?newsid='$id_article';</script>";
            }
        }
    }
?>