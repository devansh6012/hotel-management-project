<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: login.php");
   exit;
 }
 ?>
 <style>
 table {
   border-collapse: collapse;
   width: 100%;
   font-family: Tahoma, Geneva, sans-serif;
 }

 th, td {
   text-align: left;
   padding: 5px;
 }

 tr:nth-child(even) {background-color: #f2f2f2;}
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
