<?php
if(isset($_POST['edit_data_btn']))
{
  include '_dbconnect.php';
  $id = $_POST['edit_id'];
  $query = "SELECT * FROM hotel where hotel_id='$id'";
  $query_run = mysqli_query($conn,$query);
  foreach ($query_run as $row) {
    ?>
    <link rel="stylesheet" href="styles/style.css">
    <div>
      <h2 style="text-align:center">Edit</h2>
    <form action="code.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="edit_id" value="<?php echo $row['hotel_id'] ?>">
      Name:<input type="text" name="edit_name" value="<?php echo $row['hotel_name'] ?>" placeholder="name"><br>
      Address:<input type="text" name="edit_address" value="<?php echo $row['hotel_address'] ?>" placeholder="address"><br>
      Price:<input type="text" name="edit_price" value="<?php echo $row['hotel_price'] ?>" placeholder="price"><br>
      Vacant:<input type="text" name="edit_qty" value="<?php echo $row['hotel_qty'] ?>" placeholder="Vacant"><br>
      <input type="file" name="edit_image" id="ed_image" value="<?php echo $row['hotel_img'] ?>"><br>
      <button type="submit" name="update_btn">UPDATE</button>
    </form>
  </div>
    <?php
  }
}
 ?>
