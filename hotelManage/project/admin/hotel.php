<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: login.php");
   exit;
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
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
  #editbtn,#addhotel{
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 10px 25px;             /* top 10px and sides 25px */
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    }
    #deletebtn{
      background-color: #f44336;
      border: none;
      color: white;
      padding: 10px 25px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
  <body>
    <p style="font-size:25px;font-weight:bold;font-family: Tahoma, Geneva, sans-serif;">Hotel List</p>
    <a href="addHotel.php"><input id="addhotel" type="submit" name="submit" value="Add Hotel"></a><br>
    <table border="2">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Price</th>
        <th>Vacant</th>
        <th>Image</th>
        <th colspan="2" style="text-align: center;">Operaions</th>
      </tr>
    <?php

    include '_dbconnect.php';
    $query = "SELECT * FROM hotel";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

        while($result = mysqli_fetch_assoc($data))
        {
        ?>

          <tr>
          <td><?php echo $result['hotel_id']?></td>
          <td><?php echo $result['hotel_name']?></td>
          <td><?php echo $result['hotel_address']?></td>
          <td><?php echo $result['hotel_price']?></td>
          <td><?php echo $result['hotel_qty']?></td>
          <td><?php echo '<img src="'.$result['hotel_img'].'" width="40px;" height="40px;">'?></td>
          <td>
            <form action="hotel_edit1.php" method="post">
              <input type="hidden" name="edit_id" value="<?php echo $result['hotel_id'] ?>">
              <button type="submit" id="editbtn" name="edit_data_btn">Edit</button>
            </form>
          </td>
          <?php
          echo"
          <td><a href = 'hotel_delete.php?identity=$result[hotel_id]' onclick='return checldelete()'><input type='submit' value='Delete' id='deletebtn'></td>
          "
           ?>
          </tr>
        <?php

        }
    ?>
   </table>
   <script>
   function checldelete(){
     return confirm('Are you sure you want to Delete this record');
   }
   </script>
  </body>
</html>
