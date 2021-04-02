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
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
      font-family: Tahoma, Geneva, sans-serif;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
  </head>
  <body>
    <p style="font-size:25px;font-weight:bold;font-family: Tahoma, Geneva, sans-serif;">Booked Hotels</p>
    <table border="2">
      <tr>
        <th>payment Id</th>
        <th>Hotel Id</th>
        <th>Hotel Name</th>
        <th>Name</th>
        <th>Rooms</th>
        <th>Price</th>
      </tr>
    <?php

    include '_dbconnect.php';
    $query = "SELECT * FROM payment";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    if($total!=0){
        while($result = mysqli_fetch_assoc($data)){
          echo "
          <tr>
          <td>".$result['payment_id']."</td>
          <td>".$result['hotel_id']."</td>
          <td>".$result['hotel_name']."</td>
          <td>".$result['name']."</td>
          <td>".$result['Rooms']."</td>
          <td>".$result['Price']."</td>
          </tr>
          ";
        }
    }
     ?>
    </table>
  </body>
</html>
