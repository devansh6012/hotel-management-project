<?php
session_start();

session_unset();    //This function frees all session variables currently registered.
session_destroy();

header("location:login.php");
 ?>
