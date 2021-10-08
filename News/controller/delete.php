<?php
include_once("config/dbconnect.php");
$msg = '';
if (isset($_GET['news_ID'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM news_info WHERE news_ID = ?');
    $stmt->execute([$_GET['news_ID']]);
    $news = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$news) {
        exit('News doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM news_info WHERE news_ID = ?');
            $stmt->execute([$_GET['news_ID']]);
            $msg = 'You have deleted the news!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location:./../index.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>