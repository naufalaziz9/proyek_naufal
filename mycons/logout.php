<?php 
session_start();
   session_unset();
    unset($_SESSION['sid']);
    $_SESSION["nama"] ="";
  
    session_regenerate_id();
    session_destroy();
    header('Location:index.php');
 ?>