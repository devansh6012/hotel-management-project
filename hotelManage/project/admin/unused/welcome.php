<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: login.php");
   exit;
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    echo "Welcome";
    echo $_SESSION['username'];
     ?>
    <br>
    <p>Whenever you need to, be sure to logout using this <a href="logout.php">link</a></p>
  </body>
</html>
