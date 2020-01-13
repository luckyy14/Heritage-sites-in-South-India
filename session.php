<?php
   error_reporting(E_ERROR | E_WARNING | E_PARSE);
   include('connection.php');
   session_start();
   $user_check = $_SESSION['userid'];
  // $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   //$row = mysqli_fetch_assoc($ses_sql,MYSQLI_ASSOC);
   $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");
   $row = mysqli_fetch_assoc($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['username'];
   if(!isset($_SESSION['userid'])){
      header("location:login.php");
      die();
   }
?>
