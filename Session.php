<?php
   include('dbcon.php');
   session_start();
   $user_check = $_SESSION['Email'];
   $ses_sql = mysqli_query($conn,"select Email from registration where Email = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['Email'];
   if(!isset($_SESSION['Email'])){
      header("location:Login.php");
      die();
   }
?>