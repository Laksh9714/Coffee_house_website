<?php
require_once 'connect.php';
session_start();
$op=$_GET['operation'];
$item_id=$_GET['item_id'];

$quantity_s="";

$username=$_SESSION["user_id"];



if($op=="add"){

    

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
        $sql_addtocart="INSERT INTO cart (user_id,item_id) VALUES ('$username','$item_id')";
        mysqli_query($db,$sql_addtocart);
    
        //Decrementing the item from menu
         $quantity_i=$quantity_i-1;
         $sql_updateitem="UPDATE menu SET quantity=$quantity_i where item_id=$item_id";
         mysqli_query($db,$sql_updateitem);
    
    
    }

}
elseif($op=="sub"){
    $quantity_s_cart='';
    $quantity_s_menu='';

    $sql_cart="SELECT COUNT(item_id) as quantity FROM cart WHERE item_id=$item_id GROUP BY item_id";
    $result_cart = mysqli_query($db, $sql_cart);

    while($row=mysqli_fetch_assoc($result_cart))
    {
        $quantity_s_cart=$row['quantity'];
    }
    $quantity_i_cart=intval($quantity_s_cart);

    if($quantity_i_cart==1){
        echo "one";
    }
    else{
        echo "many";
    }


    $sql_menu="SELECT quantity FROM menu where item_id=$item_id";
    $result_menu = mysqli_query($db, $sql_menu);

    while($row=mysqli_fetch_assoc($result_menu))
    {
        $quantity_s_menu=$row['quantity'];
    }
    $quantity_i_menu=intval($quantity_s_menu);

    $quantity_i_menu=abs($quantity_i_menu+1);

    $sql_updateitem="UPDATE menu SET quantity=$quantity_i_menu where item_id=$item_id";
    mysqli_query($db,$sql_updateitem);

    $stmt=$db->prepare("DELETE FROM cart where item_id='$item_id' LIMIT 1");
    $stmt->execute();


}



?>