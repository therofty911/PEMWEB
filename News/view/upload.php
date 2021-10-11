<?php
    // include '..\model\dbconnect.php';
    // function createData(){
    //     $pdo = connect_to_db();
    //     // Check if POST data is not empty
    //     if (!empty($_POST)) {
    //         $category = isset($_POST['news_category']) ? $_POST['news_category'] : '';
    //         $title = isset($_POST['news_title']) ? $_POST['news_title'] : '';
    //         $sdesc = isset($_POST['news_short_description']) ? $_POST['news_short_description'] : '';
    //         $content = isset($_POST['news_full_content']) ? $_POST['news_full_content'] : '';
    //         $author = isset($_POST['news_author']) ? $_POST['news_author'] : '';
    //         $published = isset($_POST['news_published_on']) ? $_POST['news_published_on'] : '';
            
    //         $stmt = $pdo->prepare("INSERT INTO news_info (news_category, news_title, news_short_description, news_full_content, news_author, news_published_on) VALUES ( ?, ?, ?, ?, ?, ?)");
    //         $stmt->execute(array($category, $title, $sdesc, $content, $author, $published));
            
    //         // Output message
    //         if($stmt){
    //             echo("<script>console.log('Created Successfully!')</script>");
    //             header('Location:..\..\News\view\create.php');
    //         }
    //         else{
    //             echo("<script>console.log('failed!')</script>");
    //         }
    //     }
    // }
?>

<?php	
	require_once '../model/dbconnect.php';
	$pdo = connect_to_db();
	if(ISSET($_POST['upload'])){
		$title = $_POST['news_title'];
		$category = $_POST['news_category'];
		$sdesc = $_POST['news_short_description'];
		$content = $_POST['news_full_content'];
		$author = $_POST['news_author'];
		$published = $_POST['news_published_on'];
		$file_name = $_FILES['image']['name'];
		$file_temp = $_FILES['image']['tmp_name'];
		$allowed_ext = array("jpg", "jpeg", "gif", "png");
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$path = "upload/".$file_name;
		if(in_array($ext, $allowed_ext)){
			if(move_uploaded_file($file_temp, $path)){
				try{
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "INSERT INTO `news_info`(news_title, news_category, news_short_description, news_full_content, news_author, news_published_on, image_name, `location`)  VALUES ('$title','$category','$sdesc','$content','$author','$published','$file_name', '$path')";
					$pdo->exec($sql);
				}catch(PDOException $e){
					echo $e->getMessage();
				}
				
				$pdo = null;
				echo "<script>alert('Your data has been added'); 
				window.location='../view/create.php';</script>";
				// header('location: ../view/create.php');
			}
		}else{
			echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
		}
	}
?>