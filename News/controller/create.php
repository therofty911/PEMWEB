<?php
// include_once("config/dbconnect.php");
include '..\config\dbconnect.php';
$msg = '';

function createData(){
    $pdo = connect_to_db();
    // Check if POST data is not empty
    if (!empty($_POST)) {
        // Post data not empty insert a new record
        // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
        // $id = isset($_POST['news_ID']) && !empty($_POST['news_ID']) && $_POST['news_ID'] != 'auto' ? $_POST['news_ID'] : NULL;
        // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
        //$id = isset($_POST['news_ID']) ? $_POST['news_ID'] : '';
        $category = isset($_POST['news_category']) ? $_POST['news_category'] : '';
        $title = isset($_POST['news_title']) ? $_POST['news_title'] : '';
        $sdesc = isset($_POST['news_short_description']) ? $_POST['news_short_description'] : '';
        $content = isset($_POST['news_full_content']) ? $_POST['news_full_content'] : '';
        $author = isset($_POST['news_author']) ? $_POST['news_author'] : '';
        $published = isset($_POST['news_published_on']) ? $_POST['news_published_on'] : '';
        
        // Insert new record into the contacts table
        $stmt = $pdo->prepare("INSERT INTO news_info (news_category, news_title, news_short_description, news_full_content, news_author, news_published_on) VALUES ( ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($category, $title, $sdesc, $content, $author, $published));
        // Output message
        if($stmt){
            echo("<script>console.log('Created Successfully!')</script>");
            header('Location:..\..\News\view\create.php');
        }
        else{
            echo("<script>console.log('failed!')</script>");
        }
        
        
    }
}
?>