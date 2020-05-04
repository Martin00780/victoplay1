

<?php
    session_start(); 
     if (!isset($_SESSION['username'])){
         $_SESSION['msg']  = "กรุณาสมัครก่อน" ;
            header ('location: login.php');
     }

     if (isset($_GET['login'])){
         session_destroy();
         unset($_SESSION['username']);
         header('location: login.php');
     }
    
     
?>



<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>home page</title>

            <link rel="stylesheet" href="style.css">
        </head>
        <body>

            <div class="header"> 
                <h2>Home page</h2>
            </div>

            <div class="conte">
            <?php if (isset($_SESSION['SUCCESS'])) : ?>

            <div class="success">
                <h3>
                <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
                </h3>
            
            </div>
            <?php endif ?>

            

        <!-- check foe login -->

            <?php if (isset($_SESSION["username"])) ; ?>
            <p><a href="index.php?logout='1'" style="color :tomato;">logout</a></p>
            </div>
            
        </body>
</html>