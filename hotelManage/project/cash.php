<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: login.php");
   exit;
 }
 ?>
 <style>
 div{
   width: 540px;
   text-align: center;
   border-radius: 5px;
   background-color: #349bcf;
   padding: 30px;
   margin: auto;
   margin-top: 80px;
 }
 #finalpaybtn{
   background-color: #2cb843;
   border: 1px solid black;
   color: white;
   padding: 10px 25px;             /* top 10px and sides 25px */
   text-align: center;
   text-decoration: none;
   font-size: 16px;
   cursor: pointer;
   }
 </style>
 <?php
 if(isset($_POST['final_pay_data_btn'])){
   include '_dbconnect.php';
   $id = $_POST['final_pay_id'];
   $query = "SELECT * FROM hotel where hotel_id='$id'";
   $query_run = mysqli_query($conn,$query);
   $result = mysqli_fetch_assoc($query_run);

   /*sending otp through mail*/
   $user_name = $_SESSION['username'];
   $query_email = "SELECT * FROM user where name='$user_name'";
   $query_run_email = mysqli_query($conn,$query_email);
   $result_email = mysqli_fetch_assoc($query_run_email);
   $a = rand(1000,9999);
   $sub = 'OTP';
   $msg = $a;
   $rec = $result_email['email'];
   mail($rec,$sub,$msg);
 }
  ?>
<div>
  OTP Sent On Your Mail <br><br>
  <form onsubmit="return validate()" action="payment2.php" method="post">
    OTP: <input type="text" id="otp"><br><br>
    <input type="hidden" name="otp" id="correctotp" value="<?php echo $a ?>">
    <label for="rooms">Rooms:</label>
   <input type="text" name="rooms"><br><br>
   <label for="rating">Rating:</label>
   <select name="rating">
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
   </select><br><br>
   <input type="hidden" name="final_pay_id" value="<?php echo $result['hotel_id'] ?>">
   <button type="submit" id="finalpaybtn" name="final_pay_data_btn">Pay with Cash</button>
  </form>
</div>
<script>
  function validate(){
    var entered_otp = document.getElementById("otp");
    var correct = document.getElementById("correctotp");
    if(entered_otp.value == correct.value ){
      return true;
    }
    else{
      return false;
    }
  }
</script>
