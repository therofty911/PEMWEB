<?php
    $user = "";
    $pw = "";
    function verifiedlogin(){
        include __DIR__.'..\..\..\News\model\dbconnect.php'; 
        if(isset($_POST['user'])) $user = $_POST['user'];
        if(isset($_POST['pw'])) $pw = $_POST['pw'];
        if($user == "" || $pw == ""){
                echo "<script>console.log('error 14, empty email or password');</script>";
        }
        else{
            $conn = connect_to_db();
            $query = $conn->prepare("SELECT `user_ID`, username, pass, salt, `level` FROM user WHERE username='" . $user . "'");
            $query->execute();
                
            $result = $query->rowCount();
            if($result != 1){
                echo "<script>console.log('error 26, wrong email or password');
                      alert('Wrong Email or Password!!!')</script>";
            }
            else{
                $db = $query->fetch(PDO::FETCH_ASSOC);
                $salt = $db['salt'];
                $hash = $db['pass'];
                $id = $db['user_ID'];
                $photo = $db['photo'];
                
                if(hash("md5",$pw . $salt)==$hash){
                    echo "<script>console.log('ACC');</script>";
                    if($db['level']=="admin"){
                        session_start();
                        // buat session login dan username
                        $_SESSION['user'] = $user;
                        $_SESSION['level'] = "admin";
                        $_SESSION['id'] = $id;
                        $_SESSION['photo'] = $photo;
                        // alihkan ke halaman dashboard admin
                        echo "<script>document.location.href = '../view/home_admin.php';</script>";

                        // cek jika user login sebagai pegawai
                    }else if($db['level']=="user"){
                        session_start();
                        // buat session login dan username
                        $_SESSION['user'] = $user;
                        $_SESSION['level'] = "user";
                        $_SESSION['id'] = $id;
                        $_SESSION['photo'] = $photo;
                        // alihkan ke halaman dashboard pegawai
                        echo "<script>document.location.href = '../view/home_user.php';</script>";
                    }
                }
                else{
                    echo "<script>console.log('error 45, wrong email or password');</script>";
                }
            }
        }
    }
?>