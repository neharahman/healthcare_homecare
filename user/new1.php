<?php
session_start();
include('../include/config.php');
$name = $_POST['name1'];
$email = $_POST['email1'];
$pass = $_POST['pass'];
$address = $_POST['address'];
$city = $_POST['city'];
$gender = $_POST['gender'];
echo $email;
echo $pass;


$sql3="INSERT INTO users(email,pass,address,fullname,city,gender) VALUES('$email', '$pass', '$address', '$name', '$city', '$gender')";
      
$result =mysqli_query($conn,$sql3);
if($result)
{
    
    echo "<script>
    alert('Sign Up Successfull please logged in');
    window.location.href='login.php';
    </script>";

}
else
{
    
  
    echo "<script>
    alert('Some Error Occured please SignUp Again');
    window.location.href='signup.php';
    </script>";
}
  

?> 