<?php
$showAlert = false;
if(isset($_POST["submit"])){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    //$exists = false;

    //check whether this username exists
    $existSql = "SELECT * FROM `admin` WHERE name = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows>0){
      //$exists = true;
        echo '<script>alert(Usename Already Exists)</script>';
    }
    else{
      //$exists = false;
      if($password == $cpassword){
        $hash = password_hash($password, PASSWORD_DEFAULT);    //generates hash password
        $sql = "INSERT INTO `admin` (`name`, `email`, `password`) VALUES ('$username', '$email', '$hash')";
        $result = mysqli_query($conn,$sql);
        if($result){
          $showAlert = true;
        }
      }
      else{
        echo '<script>alert("Password not match or Username Already Exists!")</script>';
      }
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
  <body style="background-image:url(uploads/form1.jpg);background-repeat: no-repeat;background-size:cover">
    <?php
    if($showAlert){
      echo '<script>alert("Your account created successfully")</script>';
    }
    ?>
    <div class="signup">
      <h2 style="text-align:center;">Register</h2>
      <form onsubmit="return validate()" action="register.php" method="post">
        <input type="text" class="input-box" placeholder="Your Name" name="username" id="fname"><br><br>
        <input type="text" class="input-box" placeholder="Your Email" name="email" id="email"><br><br>
        <input type="password" class="input-box" placeholder="Your password" name="password" id="password"><br><br>
        <input type="password" class="input-box" placeholder="Confirm password" name="cpassword" id="cpassword"><br><br><br>
        <input type="submit" name="submit" value="Register">
        <p>Already have an account?<a href="login.php"> Login</a></p>
      </form>
    </div>
    <script>
      function validate()
      {
        var username = document.getElementById("fname");
        var password = document.getElementById("password");
        var email = document.getElementById("email");
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if(username.value == ""||password.value == ""||email.value == "")
       {
       alert("No blank values allowed");
       return false;
       }
       if(email.value.match(mailformat))
       {
       alert("Valid email address");
       return true;
       }
       else
       {
       alert("You have entered an invalid email address");
       return false;
       }
       }
      </script>
  </body>
</html>
