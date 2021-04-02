<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: login.php");
   exit;
 }
 ?>
<?php
if(isset($_POST['pay_data_btn']))
{
  include '_dbconnect.php';
  $id = $_POST['pay_id'];
  $query = "SELECT * FROM hotel where hotel_id='$id'";
  $query_run = mysqli_query($conn,$query);
  foreach ($query_run as $row) {
    ?>
    <table border="2">
      <tr>
        <th>Hotel Name</th>
        <th>Price</th>
        <th>Username</th>
      </tr>
      <tr>
        <td><?php echo $row['hotel_name'] ?></td>
        <td><?php echo $row['hotel_price'] ?></td>
        <td><?php echo $_SESSION['username'] ?></td>
      </tr>
    </table>
    <?php
  }
}
 ?>
