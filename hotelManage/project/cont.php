
 <?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $sub = $_POST['subject'];
  $msg = $_POST['message'];
  $rec = $_POST['mail'];
  mail($rec,$sub,$msg);
  echo '<script>alert("Message Sent successfuly")</script>';
}
  ?>
