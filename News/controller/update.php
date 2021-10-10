<?php
    include '..\controller\functions.php';
    function updateData(){
        $pdo = connect_to_db();

        if (isset($_GET['news_ID'])) {
            if (!empty($_POST)) {
                $title = isset($_POST['news_title']) ? $_POST['news_title'] : '';
                $sdesc = isset($_POST['news_short_description']) ? $_POST['news_short_description'] : '';
                $content = isset($_POST['news_full_content']) ? $_POST['news_full_content'] : '';

                $stmt = $pdo->prepare('UPDATE news_info SET news_title = ?, news_short_description = ?, news_full_content = ? WHERE news_ID = ?');
                $stmt->execute([$title, $sdesc, $content, $_GET['news_ID']]);
                if($stmt){
                    header('Location: ..\..\News\view\list_news.php');
                }
            }
        } else {
            exit('No ID specified!');
        }
    }
?>