<?php
session_start();
include 'db_conn.php';

if(isset($_POST['uname']) && isset($_POST['password'])) {

    function validat($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validat($_POST['uname']);
    $pass = validat($_POST['password']);

    if (empty($uname)) {
        header("location: index.php?error=user Name is  requiered");
        exit();
    }else if(empty($pass)) {
        header("location: index.php?error=user password is  requiere");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql); 

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("location: home.php");
                exit(); 
            }else{
                header("location: index.php?error=Incorrect user name or password");
                exit();  
            }
            }else{
                header("location: index.php?error=Incorrect user name or password");
                exit();  
        }
    }
    }else{
        header("location: index.php");
        exit();
    }
?>