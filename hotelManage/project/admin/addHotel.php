<?php
if(isset($_POST["submit"])){
    include '_dbconnect.php';
    $hotelname = $_POST["hotelname"];
    $address = $_POST["address"];
    $price = $_POST["price"];
    $qty = $_POST["quantity"];
    $img = $_FILES["img"]["name"];
    $tempimg = $_FILES["img"]["tmp_name"];      /* By default it got a tmp_name */
    $folder = "uploads/".$img;
    move_uploaded_file($tempimg,$folder);   /* Moves an uploaded file to a new location */
    $sql = "INSERT INTO `hotel` (`hotel_name`, `hotel_address`, `hotel_price`, `hotel_qty`, `hotel_img`) VALUES ('$hotelname', '$address', '$price', '$qty', '$folder')";
    $result = mysqli_query($conn,$sql);
    if($result){
          echo '<script>alert("Hotel Added successfuly")</script>';
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <div>
    <h2 style="text-align:center;">Add Hotel</h2>
    <form action="addHotel.php" method="post" enctype="multipart/form-data">
      <input type="text" class="input-box" placeholder="Hotel Name" name="hotelname"><br><br>
      <input type="text" class="input-box" placeholder="Address" name="address"><br><br>
      <input type="text" class="input-box" placeholder="Price" name="price"><br><br>
      <input type="text" class="input-box" placeholder="Vacant" name="quantity"><br><br>
      <input type="file" id="img" name="img" accept="image/*"><br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    </div>
  </body>
</html>
