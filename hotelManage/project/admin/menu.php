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
    <style>
      ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 185px;
      background-color: #f1f1f1;
      font-family: Tahoma, Geneva, sans-serif;
    }

    li a {
      display: block;
      color: #000;
      padding: 12px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #555;
      color: white;
    }
    </style>
  </head>
  <body style="background-color:#f1f1f1">
    <img src="" alt="">
    <ul>
    <li><a href="dashboard.php" target = "main_page">Dashboard</a></li>
    <li><a href="hotel.php" target = "main_page">Hotels</a></li>
    <li><a href="customers.php" target = "main_page">Customers</a></li>
    <li><a href="bookedRooms.php" target = "main_page">Bookings</a></li>
    </ul>

  </body>
</html>
