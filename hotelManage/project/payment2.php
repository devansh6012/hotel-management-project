<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: login.php");
   exit;
 }
 ?><?php
include '_dbconnect.php';
if(isset($_POST['final_pay_data_btn'])){
  $rooms = $_POST['rooms'];
  $rating = $_POST['rating'];
  $user_rating=$rating;
  echo '<script>alert("Booking successful for rooms")</script>';
}
$id = $_POST['final_pay_id'];
$queryrating = "SELECT * FROM payment where hotel_id='$id'";
$queryrating_run = mysqli_query($conn,$queryrating);
$total = mysqli_num_rows($queryrating_run);
foreach ($queryrating_run as $rowrate){
  $rating += $rowrate['rating'];
}
$rating = $rating / ($total + 1);
$query = "SELECT * FROM hotel where hotel_id='$id'";
$query_run = mysqli_query($conn,$query);
foreach ($query_run as $row){
    $hotel_id = $row['hotel_id'];
    $hotel_name = $row['hotel_name'];
    $price = $row['hotel_price'] * $rooms;
    $qty = $row['hotel_qty'] - $rooms;
}
$name = $_SESSION['username'];
$querypay = "INSERT INTO `payment` (`hotel_id`, `hotel_name`, `name`, `Rooms`, `Price`, `rating`) VALUES ('$hotel_id', '$hotel_name', '$name', '$rooms', '$price', '$user_rating')";
$querypay_run = mysqli_query($conn,$querypay);

$queryreduce = "UPDATE `hotel` SET `hotel_qty` = '$qty', `rating` = '$rating' WHERE `hotel`.`hotel_id` = $hotel_id";
$queryreduce_run = mysqli_query($conn,$queryreduce);
 ?>
 <link rel="stylesheet" href="style.css">
 <div class="navbar">
 <ul>
   <li><a href="#">HotelProject</a></li>
   <li><a class="#" href="welcome.php">Home</a></li>
   <li><a href="booked.php">Booked</a></li>
   <li><a href="logout.php">Logout</a></li>
 </ul>
</div>
