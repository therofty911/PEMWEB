<?php
    function register(){
        include __DIR__.'..\..\..\News\model\dbconnect.php'; 
        if(isset($_POST['Fname']))$Fname = $_POST['Fname'];
        if(isset($_POST['Lname']))$Lname = $_POST['Lname'];
        if(isset($_POST['user']))$user = $_POST['user'];
        if(isset($_POST['pw']))$pass = $_POST['pw'];
        if(isset($_POST['gender']))$gender = $_POST['gender'];
        if(isset($_POST['birth']))$birth = $_POST['birth'];
        $date = date("Y-m-d", strtotime($birth));
        $salt = $pass;
        $pass = hash("md5",$pass . $salt);
        $level = "user";
        $conn = connect_to_db();
        $query = $conn->prepare("INSERT INTO `user`(`F_Name`, `L_Name`, `username`, `pass`, `salt`, `level`, `gender`, `date_of_birth`) VALUES (?,?,?,?,?,?,?,?)");
        $result = $query->execute(array($Fname, $Lname, $user, $pass, $salt, $level, $gender, $date));
        if($result){
            echo "<script>alert('Sign Up Succesffully');</script>";
            header("location:index.php");
        }
    }
?>