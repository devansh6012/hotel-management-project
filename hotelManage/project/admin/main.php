<?php
session_start();
$user = $_SESSION['username'];
if(!$user){
  header('location: login.php');
}
 ?>
<!DOCTYPE html>
<html>

   <body>
      <h1 style="font-family: Tahoma, Geneva, sans-serif">This is Admin Panel.</h3>
   </body>

</html>
