<?php
session_start();
include('serverforlogin.php');

$errors = array();

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    

    if (empty($username)) {
        array_push($errors, "Username is required");
       }
       if (empty($username)) {
        array_push($errors, "Password is required");
       }

       if(count($errors) == 0 ){
           $password = md5($password);
           $query = "SELECT * FROM  user WHERE username ='$username' AND password = '$password'";
           $result = mysqli_query($conn, $query);

           if (mysqli_num_rows($result) == 1) {
               $_SESSION['username'] = $username;
               $_SESSION['success'] = "เข้าสู้่ระบบเรียนร้อยแล้ว !";
               header("location: sindex.php");

           }else {
            array_push($errors, "รหัสผิดพลาด");
            $_SESSION['error'] = "Username หรือ password มีปัญหากรุณาลองใหม่!";
            header("location: login.php");
        }
       }
    


}
?>