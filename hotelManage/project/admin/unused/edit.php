<?php
include '_dbconnect.php';
error_reporting(0);
$identity = $_GET['identity'];
$nm = $_GET['nm'];                   /* display the data already present in database  */
$em = $_GET['em'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="GET">
      <input type="text" placeholder="Your Name" name="username" value="<?php echo "$nm" ?>"><br><br>
      <input type="text" placeholder="Your Email" name="email" value="<?php echo "$em" ?>"><br><br>
      <input type="submit" name="submit" value="UPDATE">
    </form>
  </body>
</html>
<?php
if($_GET['submit']){
  $name = $_GET['username'];
  $email = $_GET['email'];
  $query = "UPDATE user SET name='$name',email='$email' WHERE name='$name'";
  $data = mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('Record Updated')</script>";
  }
  else{
    echo "Failed to update recrod";
  }
}
 ?>
