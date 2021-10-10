<?php
    include '..\controller\functions.php';
    $pdo = connect_to_db();
    if (isset($_GET['news_ID'])) {
        $stmt = $pdo->prepare('DELETE FROM news_info WHERE news_ID = ?');
        $stmt->execute([$_GET['news_ID']]);
        if ($stmt) {
            header('Location: ..\..\News\view\list_news.php');
        }
    } else {
        exit('No ID specified!');
    }
?>