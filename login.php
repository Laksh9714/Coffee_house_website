<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$password = sha1($password);

require_once 'php/connect.php';

$sql = "SELECT * FROM user WHERE admin = 0 AND email_id ='".$email."' AND password='".$password."';";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) {
        $_SESSION["fname"] = $row['first_name'];
        $_SESSION["user_id"] = $row['user_id'];
    }
    $_SESSION["email"] = $_POST["email"];
    header('Location:menu.php');
}
else
{
    $sql_admin = "SELECT * FROM user WHERE admin = 1 AND email_id ='".$email."' AND password='".$password."';";
    $result = $conn->query($sql_admin);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
            $_SESSION["fname"] = $row['first_name'];
        }
        $_SESSION["email"] = $_POST["email"];
        header('Location:admin.php');
    }
    else
    {
        echo "<script>alert('invalid credentials');window.location.href = 'login.html';</script>";
    }
}
?>