<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor="#4a4946";>
    <p style="color:white;display: inline;font-family: Tahoma, Geneva, sans-serif;font-size:30px">
    <?php
    echo "Welcome ";
    echo $_SESSION['username'];
     ?>
     </p>
     <p style="color:white;float:right;font-family: Tahoma, Geneva, sans-serif;">Whenever you need to, be sure to logout using this <a href="logout.php"><input type="submit" name="submit" value="Logout"></a></p>
  </body>
</html>
