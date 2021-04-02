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
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="font-family: Tahoma, Geneva, sans-serif;">
    <div class="navbar">
    <ul>
      <li><a href="#">HotelProject</a></li>
      <li><a class="#" href="#home">Home</a></li>
      <li><a href="booked.php">Booked</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  <br>
  <div style="margin-left:50px">
  <h1 style="color:#3a404a">
  <?php
  echo "Welcome ";
  echo $_SESSION['username'];
   ?>
 </h1>
  <?php

    include '_dbconnect.php';
    $query = "SELECT * FROM hotel";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total!=0){
        while($result = mysqli_fetch_assoc($data)){

          ?>
          <div style="background-color:#dfebe9">

          <h2><?php echo $result['hotel_name']?></h2><br>
          <?php  echo '<img src="admin/'.$result['hotel_img'].'" height="300" width="400">'?>
          <div style="float:right;position:relative;right:700px;">
          <div><p style="font-weight:bold;display:inline">Price: </p>₹<?php echo $result['hotel_price'] ?><br><br></div>
          <div><p style="font-weight:bold;display:inline">Address: </p><br><?php echo $result['hotel_address']?><br><br></div>
          <div><p style="font-weight:bold;display:inline">Rating: </p><br><?php echo $result['rating']?><br><br></div>
          <form action="payment1.php" method="post">
            <input type="hidden" name="pay_id" value="<?php echo $result['hotel_id'] ?>">
            <button type="submit" id="paybtn" name="pay_data_btn">Reserve</button>
          </form>
          </div>
          <br><br>
          </div>
          <hr style='width:800px'>
          <br><br>

           <?php
        }
    }
    ?>
    </div>
    <div class="footer">&copy; 2020</div>
  </body>
</html>
