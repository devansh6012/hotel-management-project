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


 }
  ?>
 <div>
 <form action="payment2.php" method="post">
   Card No.<input type="text"><br><br>
   Validity<input type="text"><br><br>
   Vaild From<input type="text"><br><br>
   Vaild Thru<input type="text"><br><br>
   Cv no.<input type="text"><br><br>
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
   <button type="submit" id="finalpaybtn" name="final_pay_data_btn">Pay With Debit Card</button>
   <br>
 </form>
</div>
