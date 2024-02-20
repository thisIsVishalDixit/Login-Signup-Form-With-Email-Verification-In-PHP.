<?php
session_start();

include 'connection.php';
if(isset($_GET['token'])){
   $token= $_GET['token'];
   $updateQuery= "update login set status='active' where token='$token'";
   $query=mysqli_query($con, $updateQuery);

   if($query){
    if(isset($_SESSION['msg'])){
        $_SESSION="Account Updated Successfull";
        header('location:signin.php');
    }else{
        $_SESSION="Please are logged out.";
        header('location:signin.php');
    }

   }else{
        $_SESSION="Please Not Updated";
        header('location:signup.php');
   }
}

?>