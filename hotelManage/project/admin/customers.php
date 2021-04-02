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
      padding: 5px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}

    #deletebtn{
      background-color: #f44336;
      border: none;
      color: white;
      padding: 10px 25px;   /* top 10px and sides 25px */
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
    }
    </style>
  </head>
  <body>
    <br>
    <p style="font-size:25px;font-weight:bold;font-family: Tahoma, Geneva, sans-serif;">Customers</p>
    <table border="2">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Operaions</th>
      </tr>
    <?php

    include '_dbconnect.php';
    $query = "SELECT * FROM user";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total!=0){
        while($result = mysqli_fetch_assoc($data)){
          echo "
          <tr>
          <td>".$result['id']."</td>
          <td>".$result['name']."</td>
          <td>".$result['email']."</td>
          <td><a href = 'delete.php?identity=$result[id]' onclick='return checldelete()'><input type='submit' value='Delete' id='deletebtn'></td>
          </tr>
          ";
        }
    }
     ?>
    </table>
    <script>
    function checldelete(){
      return confirm('Are you sure you want to Delete this record');
    }
    </script>
  </body>
</html>
