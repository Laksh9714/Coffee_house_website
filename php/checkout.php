<?php

date_default_timezone_set('America/Chicago'); 

session_start();

require_once 'connect.php';
$username = $_SESSION["user_id"];
$total_price = $_GET['total'];
$trans_id = time();
$date_of_order = date("Y-m-d",$trans_id);
$time_of_order = date("h:i a");


$stmt = $db->prepare("INSERT INTO transaction(trans_id,user_id,date_of_order,time_of_order,total_price) VALUES('$trans_id',$username,'$date_of_order','$time_of_order',$total_price)");

$stmt->execute();



$stmt1 = $db->prepare("SELECT item_id from cart WHERE user_id=$username");

$stmt1->bind_result($temp_item_id);
$stmt1->execute();
while ($stmt1->fetch()) {
    $sql = "INSERT INTO order_items(trans_id,item_id) VALUES('$trans_id','$temp_item_id')";
    $result = mysqli_query($conn,$sql);
    
}

$sql_delete="DELETE FROM cart where user_id=$username";
mysqli_query($conn,$sql_delete);















?>
