<?php
        session_start();
        include('server.php');

            $error = array();

            if(isset($_POST['reg_user'])){
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $emal = mysqli_real_escape_string($conn, $_POST['email']);
                $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
                $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

                if(empty($username)){
                    array_push($error,"กรุณาใส่ Username");
                }
                if(empty($emil)){
                    array_push($error,"กรุณาใส่ email");
                }
                if(empty($password_1)){
                    array_push($error,"กรุณาใส่ password");
                }
                if($password_1 != $password_2 ){
                    array_push($error,"รหัสผ่านไม่เหมือนกัน กณุนาใส่ใหม่");
                }

                $user_check_query = "SELECT * FROM user where username = '$username' or email = '$email' ";
                $query = mysqli_query($conn,$user_check_query);
                $result = mysqli_fetch_assoc($query);

                if ($result){
                    if ($result['username'] === $username){
                        array_push($error, "กรุณาใส่ Username อื่น");
                    }
                    if ($result['email'] === $username){
                        array_push($error, "กรุณาใส่ email อื่น");
                }
                }
                if (count($errors == 0)) {
                $password = md5($password_1);

                $sql = "INSERT INto user (user, email, password) values ('$username','$email','$password')";
                mysqli_query($conn, $sql);

                $_SESSION['username'] =$username;
                $_SESSION['username'] ="เข้าสู่ระบบเรียนร้อย !";
                header('location : index.php');
            }else {
                array_push($errors, "กรุณาใส่ user อื่น ");
                $_SESSION['error'] =  "กรุณาใส่ user อื่น ";
                header ("location : register.php") ; 
              }
        }
?>