<?php
//     include_once 'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\config\dbconnect.php'; 
    include '..\..\News\config\dbconnect.php'; 
    $user = "";
    $pw = "";
    function verifiedlogin(){
        if(isset($_POST['user'])) $user = $_POST['user'];
        if(isset($_POST['pw'])) $pw = $_POST['pw'];
        
        if($user == "" || $pw == ""){
                echo "<script>console.log('error 14, empty email or password');</script>";
                header('location:..\index.php');
            }
            else{
                
                $query = $conn->prepare("SELECT username, pass, salt FROM user WHERE username='" . $user . "'");
                $query->execute();
                
                $result = $query->rowCount();
                if($result != 1){
                    echo "<script>console.log('error 26, wrong email or password');</script>";
                    //header('location:..\index.php');
                }
                else{
                    $db = $user->fetch(PDO::FETCH_ASSOC);
                    $salt = $db['salt'];
                    $hash = $db['pass'];
        
                    if(hash("md5",$pw . $salt)==$hash){
                        echo "<script>console.log('ACC');</script>";
                        if($db['level']=="admin"){
 
                            // buat session login dan username
                            $_SESSION['user'] = $user;
                            $_SESSION['level'] = "admin";
                            // alihkan ke halaman dashboard admin
                            header("location:..\index.php");
                     
                        // cek jika user login sebagai pegawai
                        }else if($db['level']=="user"){
                            // buat session login dan username
                            $_SESSION['user'] = $user;
                            $_SESSION['level'] = "user";
                            // alihkan ke halaman dashboard pegawai
                            header("location:..\index.php");
                        }
                    }
                    else{
                        echo "<script>console.log('error 45, wrong email or password');</script>";
                        //header('location:..\index.php');
                    }
                }
            }
    }