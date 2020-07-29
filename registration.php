<?php
session_start();

require_once 'php/connect.php';


$email=$_POST["email"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$street=$_POST["street"];
$city=$_POST["city"];
$zipcode=$_POST["zipcode"];
$zipcode=(int)$zipcode;
$isAdmin=0;
$password = $_POST["password"];

$dob = $_POST["dob"];


$password = sha1($password);



if(isset($_POST["email"]) and isset($_POST["fname"]) and isset($_POST["lname"]) and isset($_POST["password"])  and isset($_POST["street"]) and isset($_POST["city"]) and isset($_POST["zipcode"]) and isset($_POST["dob"]) )
{  
    
    $sql = "INSERT INTO user(email_id,password,first_name,last_name,address,dob,city,zipcode,admin) VALUES('$email','$password','$fname','$lname','$street','$dob','$city',$zipcode,$isAdmin);";
    $result = $conn->query($sql);

    if ($result) {

        echo "<script>alert('Congratulations, you have registered successfully');window.location.href = 'login.html';</script>";
    }
    else
    {
        echo "<script>alert('registration unsuccessful,fill all fields with valid data');window.location.href = 'registration.html';</script>";
    }
   
}
else
{   echo "<script>alert('unable to register, fill all fields with valid data');window.location.href = 'registration.html';</script>";
    
}



    ?>