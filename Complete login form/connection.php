<?php
$username="root";
$password="";
$server="localhost";
$db="InsertYourDatabaseName";          //Write here your database Name
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    echo "<script>alert('Database is not connected.')</script>";
}

?>