<?php
include '_dbconnect.php';
$id = $_GET['identity'];
$query = "DELETE FROM user WHERE id = '$id'";

$data = mysqli_query($conn,$query);

if($data){
  echo "<font color='red' background-color='yellow'>Record Deleted from Database";
}
else{
  echo "some error";
}
 ?>
