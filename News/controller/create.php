<?php
// include_once("config/dbconnect.php");
include '..\controller\functions.php';
$msg = '';

function createData(){
    // Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['news_ID']) && !empty($_POST['news_ID']) && $_POST['news_ID'] != 'auto' ? $_POST['news_ID'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $category = isset($_POST['news_category']) ? $_POST['news_category'] : '';
    $title = isset($_POST['news_title']) ? $_POST['news_title'] : '';
    $sdesc = isset($_POST['news_short_description']) ? $_POST['news_short_description'] : '';
    $content = isset($_POST['news_full_content']) ? $_POST['news_full_content'] : '';
    $author = isset($_POST['news_author']) ? $_POST['news_author'] : '';
    $published = isset($_POST['news_published_on']) ? $_POST['news_published_on'] : date('Y-m-d H:i:s');
    
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO news_info VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $category, $title, $sdesc, $content, $author, $published]);
    // Output message
    $msg = 'Created Successfully!';
    header("Location: ..\..\News\view\create.php");
}
}
?>