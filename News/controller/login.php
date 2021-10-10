<?php
//     include_once 'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\config\dbconnect.php'; 
    
    $user = "";
    $pw = "";
    function verifiedlogin(){
        include __DIR__.'..\..\..\News\config\dbconnect.php'; 
        if(isset($_POST['user'])) $user = $_POST['user'];
        if(isset($_POST['pw'])) $pw = $_POST['pw'];
        
        if($user == "" || $pw == ""){
                echo "<script>console.log('error 14, empty email or password');</script>";
                //echo "<script>document.location.href = '../index.php';</script>";
            }
            else{
                $conn = connect_to_db();
                $query = $conn->prepare("SELECT `user_ID`, username, pass, salt, `level` FROM user WHERE username='" . $user . "'");
                $query->execute();
                
                $result = $query->rowCount();
                if($result != 1){
                    echo "<script>console.log('error 26, wrong email or password');
                            alert('Wrong Email or Password!!!')</script>";
                    //echo "<script>document.location.href = '../index.php';</script>";
                    
                }
                else{
                    $db = $query->fetch(PDO::FETCH_ASSOC);
                    $salt = $db['salt'];
                    $hash = $db['pass'];
                    
                    if(hash("md5",$pw . $salt)==$hash){
                        echo "<script>console.log('ACC');</script>";
                        if($db['level']=="admin"){
                            session_start();
                            // buat session login dan username
                            $_SESSION['user'] = $user;
                            $_SESSION['level'] = "admin";
                            // alihkan ke halaman dashboard admin
                            //header("location:..\index.php");
                            echo "<script>document.location.href = '../view/home_admin.php';</script>";
                        

                        
                        // cek jika user login sebagai pegawai
                        }else if($db['level']=="user"){
                            session_start();
                            // buat session login dan username
                            $_SESSION['user'] = $user;
                            $_SESSION['level'] = "user";
                            // alihkan ke halaman dashboard pegawai
                            //header("location:..\News\index.php");
                            echo "<script>document.location.href = '../view/home_user.php';</script>";
                        }
                    }
                    else{
                        echo "<script>console.log('error 45, wrong email or password');</script>";
                        //header('location:..\News\index.php');
                        //echo "<script>document.location.href = '../index.php';</script>";
                        //echo "<script>console.log('$user, $pw');</script>";
                    }
                }
            }
    }