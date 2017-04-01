<?php require_once("connection.php"); ?>
<?php
   
   if (isset($_POST['submit'])) {
      
      $title = $_POST['title'];
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $gender = $_POST['gender'];
      $state = $_POST['state'];
      $city = $_POST['city'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $bankname = $_POST['bankname'];
      $accountname=  $_POST['accountname'];
      $accountnumber = $_POST['accountnumber'];
      $password = $_POST['password'];


      $create = "INSERT INTO users(title,fullname,username,gender,state,city,email,phone,bank,account_name,account_number,password) VALUES ('$title','$fullname','$username','$gender','$state','$city','$email','$phone','$bankname','$accountname','$accountnumber','$password')";

      $query = mysql_query($create);
      
      if ($query) {
         echo "<script>window.open('profile.php','_self')</script>";
      }else{
         echo "<script> alert('User not Created') </script>";
         exit();
      }


   }
 ?>
