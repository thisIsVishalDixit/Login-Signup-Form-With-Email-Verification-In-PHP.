<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){

  $username=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $password=password_hash($pass,PASSWORD_BCRYPT);
  $cpass=$_POST['cpassword'];
  $cpassword=password_hash($cpass,PASSWORD_BCRYPT); 
  $token= bin2hex(random_bytes(15));

  if($pass !== $cpass) {
    echo "<script>alert('Passwords do not match.'); window.location.href='signup.php';</script>";
    exit();
  }

  $check_query = "SELECT * FROM login WHERE email='$email'";
  $check= mysqli_query($con, $check_query);
  if (mysqli_num_rows($check) > 0) {
    echo "<script>alert('User already exists.');window.location.href='signup.php';</script>";
    exit();
    }else{
      $insertQuery ="INSERT INTO login(name, email, password, cpassword, token, status) VALUES ('$username','$email', '$password', '$cpassword', '$token', 'inactive')";
      $res = mysqli_query($con, $insertQuery);
      if($res){
        $to_email = $email;
        $subject = "Simple mail via PHP";
        $body = "Hii, $username. Click here to activate your account 
                                  http://localhost/t/Complete%20login%20form/activate.php?token=$token";
        $headers = "From:  SenderEmailAddress";          //Write here your email from which you want to send the mail.

        if (mail($to_email, $subject, $body, $headers)) {
          echo "<script>alert('Email Sent succesfully. Please verify mail then login');window.location.href='signin.php';</script>";
        } else {
            echo "Email sending failed...";
        }
        
      }else{
        echo "<script>alert('Data not inserted');</script>";
      }
   }
  }
$con->close();
?> 