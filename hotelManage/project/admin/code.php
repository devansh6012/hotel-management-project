<?php
include '_dbconnect.php';
if(isset($_POST['update_btn'])){
  $edit_id = $_POST['edit_id'];
  $edit_name = $_POST['edit_name'];
  $edit_address = $_POST['edit_address'];
  $edit_price = $_POST['edit_price'];
  $edit_qty = $_POST['edit_qty'];
  $edit_image = $_FILES['edit_image']['name'];
  $folder = "uploads/".$edit_image;
  move_uploaded_file($_FILES["edit_image"]["tmp_name"],$folder);

  $query = "UPDATE `hotel` SET hotel_name = '$edit_name', hotel_address = '$edit_address', hotel_price = '$edit_price', hotel_qty = '$edit_qty', hotel_img = '$folder' WHERE hotel_id='$edit_id' ";
  $query_run = mysqli_query($conn,$query);

  if($query_run){

    echo "<script>alert('Record Updated')</script>";
  }
  else{
    echo "Failed to update recrod";
  }
}
 ?>
