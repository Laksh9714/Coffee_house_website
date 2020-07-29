<?php
require_once 'connect.php';
session_start();
$item_id=$_GET['item_id'];
$username=$_SESSION["fname"];
$userid=$_SESSION["user_id"];

$quantity_s="";


//sending appropriate response
$sql_response="SELECT quantity from menu WHERE item_id=$item_id";
$result = mysqli_query($db, $sql_response);

while($row=mysqli_fetch_assoc($result))
{
    $quantity_s=$row['quantity'];
}
$quantity_i=intval($quantity_s);
if($quantity_i>0){
    $response="available";

}
else{
    $response="unavailable";
}
echo $response;

if($response=="available"){

    //Adding the item in the cart
    $sql_addtocart="INSERT INTO cart (user_id,item_id) VALUES ($userid,'$item_id')";
    mysqli_query($db,$sql_addtocart);

    //Decrementing the item from menu
     $quantity_i=$quantity_i-1;
     $sql_updateitem="UPDATE menu SET quantity=$quantity_i where item_id=$item_id";
     mysqli_query($db,$sql_updateitem);


}


?>
