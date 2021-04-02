<?php
include '_dbconnect.php';
error_reporting(0);
$identity = $_GET['identity'];
$nm = $_GET['nm'];                  /* display the data already present in database  */
$ad = $_GET['ad'];
$pr = $_GET['pr'];
$qt = $_GET['qt'];
$im = $_GET['im'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" class="input-box" placeholder="Hotel Name" name="hotelname" value="<?php echo "$nm" ?>"><br><br>
      <input type="text" class="input-box" placeholder="Address" name="address" value="<?php echo "$ad" ?>"><br><br>
      <input type="text" class="input-box" placeholder="Price" name="price" value="<?php echo "$pr" ?>"><br><br>
      <input type="text" class="input-box" placeholder="Vacant" name="quantity" value="<?php echo "$qt" ?>"><br><br>
      <input type="file" id="img" name="image" name="img" value="<?php echo "$im" ?>" accept="image/*"><br><br>
      <input type="submit" name="submit" value="UPDATE">
    </form>
  </body>
</html>
<?php
if($_POST["submit"]){
  $hotelname = $_POST['hotelname'];
  $address = $_POST['address'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  /*$img = $_GET['img'];*/
  $img = $_FILES["img"]["name"];
  $tempimg = $_FILES["img"]["tmp_name"];      /* By default it got a tmp_name */
  $folder = "uploads/".$img;
  move_uploaded_file($tempimg,$folder);
  $query = "UPDATE `hotel` SET `hotel_name` = '$hotelname', `hotel_address` = '$address', `hotel_price` = '$price', `hotel_qty` = '$quantity', `hotel_img` = '$folder' WHERE `hotel`.`hotel_name` = '$hotelname'";
  $data = mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('Record Updated')</script>";
  }
  else{
    echo "Failed to update recrod";
  }
}
 ?>
