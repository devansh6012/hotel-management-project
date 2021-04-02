<?php
$login = false;
$showError = false;
if(isset($_POST["submit"])){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    //$sql = "Select * from user where name='$username' AND password='$password'";
    $sql = "Select * from admin where name='$username'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result); //no, of fetched records
    if($num == 1){
      while($row=mysqli_fetch_assoc($result)){
        if(password_verify($password,$row['password'])){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location: frame.php");
        }
        else{
          echo '<script>alert("Invalid Credentials")</script>';
        }
      }
    }
    else{
      echo '<script>alert("Invalid Credentials")</script>';     }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body style="background-image:url(uploads/form1.jpg);background-repeat: no-repeat;background-size:cover;font-family: Tahoma, Geneva, sans-serif;">
    <?php
    if($login){
      echo "<br>you are logged in";
    }
     ?>
    <div>
      <h2 style="text-align:center">Log in</h2>
      <form  onsubmit="return validate()" action="login.php" method="post">
        <input type="text" class="input-box" placeholder="Username" id="username" name="username"><br><br>
        <input type="password" class="input-box" placeholder="Your password" id="pass" name="password"><br><br><br>
        <input type="submit" name="submit" value="Login"><br><br>
        <p>Don't have an account?<a href="register.php"> Register</a></p>
      </form>
    </div>
    <script>
      function validate()
      {
        var username = document.getElementById("email");
        var password = document.getElementById("pass");

        if(username.value == "" || password.value == "")
        {
          alert("No blank values allowed");
          return false;
        }
      }
    </script>
  </body>
</html>
