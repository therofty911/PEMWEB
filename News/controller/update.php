<?php
include '..\config\dbconnect.php';
$msg = '';

function update(){
    $pdo = connect_to_db();

    if (isset($_GET['news_id'])) {
        if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
            $title = isset($_POST['news_title']) ? $_POST['news_title'] : '';
            $sdesc = isset($_POST['news_short_description']) ? $_POST['news_short_description'] : '';
            $content = isset($_POST['news_full_contest']) ? $_POST['news_full_contest'] : '';
            // Update the record
            $stmt = $pdo->prepare('UPDATE news_info SET news_title = ?, news_short_description = ?, news_full_contest = ? WHERE news_id = ?');
            $stmt->execute([$title, $sdesc, $content, $_GET['news_id']]);
            $msg = 'Updated Successfully!';
        }
        // Get the contact from the contacts table
        $stmt = $pdo->prepare('SELECT * FROM news_info WHERE news_id = ?');
        $stmt->execute([$_GET['news_id']]);
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$update) {
            exit('Update doesn\'t exist with that ID!');
        }
    } else {
        exit('No ID specified!');
    }
}
?>

// Check if form is submitted for user update, then redirect to homepage after update

// if(isset($_POST['update']))
// {    
//     $category = isset($_POST['news_category']) ? $_POST['news_category'] : '';
//     $title = isset($_POST['news_title']) ? $_POST['news_title'] : '';
//     $sdesc = isset($_POST['news_short_description']) ? $_POST['news_short_description'] : '';
//     $content = isset($_POST['news_full_contest']) ? $_POST['news_full_contest'] : '';
//     $author = isset($_POST['news_author']) ? $_POST['news_author'] : '';
//     $published = isset($_POST['news_published_on']) ? $_POST['news_published_on'] : '';
//     $id = $_POST['id']

//     // update user data
//     $result = mysqli_query($mysqli, "UPDATE users SET
//                                         news_category='$category',
//                                         news_title='$title',
//                                         news_short_description='$sdesc',
//                                         news_full_contest='$content',
//                                         news_author='$author',
//                                         news_published_on='$published'

//                                         WHERE id='$id';
//                             );

//     header("Location: home.php");
// }

