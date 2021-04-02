<?php
session_start();
$user = $_SESSION['username'];
if(!$user){
  header('location: login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <frameset rows = "80, *" noresize border="0">
     <frame src = "top.php" name = "top_page" />
     <frameset cols="14%,80%">
       <frame src = "menu.php" name = "menu_page" />
       <frame src = "main.php" name = "main_page" />
     </frameset>

     <noframes>
        <body>Your browser does not support frames.</body>
     </noframes>
  </frameset>
</html>
