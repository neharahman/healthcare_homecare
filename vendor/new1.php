<?php
session_start();
include('../include/config.php');
$name = $_POST['name1'];
$email = $_POST['email1'];
$pass = $_POST['pass'];
$address = $_POST['address'];
$specilization = $_POST['specilization'];
echo $specilization;
$number = $_POST['number'];
$fees = $_POST['fees'];

echo $email;
echo $pass;

$sql4="SELECT img from faccat where facility = '$specilization'";
$result1 = mysqli_query($conn,$sql4);
while($row = mysqli_fetch_assoc($result1))
{

    $img = $row['img'];
    
    $sql3="INSERT INTO facility(name1,cat,email,pass,rate,phone,address,img) VALUES('$name', '$specilization', '$email', '$pass', '$fees', '$number', '$address', '$img')";
        
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
    
}



?> 