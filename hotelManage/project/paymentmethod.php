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
<div>
<form action="cash.php" method="post">
  <input type="hidden" name="final_pay_id" value="<?php echo $row['hotel_id'] ?>">
  <button type="submit" id="finalpaybtn" name="final_pay_data_btn">Pay with Cash</button><br><br>
</form>
<form action="debit.php" method="post">
  <input type="hidden" name="final_pay_id" value="<?php echo $row['hotel_id'] ?>">
  <button type="submit" id="finalpaybtn" name="final_pay_data_btn">Pay with Debit Card</button>
</form>
</div>
