<?php
// include database connection file
include '..\..\News\config\dbconnect.php'; 
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $category = $_POST['news_category'];
    $title = $_POST['news_title']
    $sdesc = $_POST['news_short_description'];
    $content = $_POST['news_full_contest'];
    $author = $_POST['news_author'];
    $published = $_POST['news_published_on']
    $id = $_POST['id']

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET
                                        news_category='$category',
                                        news_title='$title',
                                        news_short_description='$sdesc',
                                        news_full_contest='$content',
                                        news_author='$author',
                                        news_published_on='$published'

                                        WHERE id='$id';
                            );

    header("Location: home.php");
}

<?php
    require '../include/db_connect.php';
    
    function ubah($data){
		global $db;
		$id = $data["Student_Id"];
		$Student_Name = $data["Student_Name"];
		$Student_Nim = $data["Student_Nim"];
		$Student_Angkatan = $data["Student_Angkatan"];
		$Student_Jurusan = $data["Student_Jurusan"];
		
		$query = "UPDATE siswa SET
					Student_Id = '$id',
					Student_Name = '$Student_Name',
					Student_Nim = '$Student_Nim',
					Student_Angkatan = '$Student_Angkatan',
					Student_Jurusan = '$Student_Jurusan'
					
					WHERE Student_Id = '$id';
				 ";
		
		mysqli_query($db, $query);
		
		return mysqli_affected_rows($db);
	}
?>