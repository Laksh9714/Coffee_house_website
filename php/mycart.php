<?php

require_once 'connect.php';
session_start();
$cart_items="";
$sub_total=0;
if(isset($_GET['item_id']))
{
    $item_remove=$_GET['item_id'];
    $quantity_s_menu="";
    $quantity_s_cart="";

    $sql_menu="SELECT quantity FROM menu where item_id=$item_remove";
    $result_menu = mysqli_query($db, $sql_menu);

    while($row=mysqli_fetch_assoc($result_menu))
    {
        $quantity_s_menu=$row['quantity'];
    }
    $quantity_i_menu=intval($quantity_s_menu);


    $sql_cart="SELECT COUNT(item_id) as quantity FROM cart WHERE item_id=$item_remove GROUP BY item_id";
    $result_cart = mysqli_query($db, $sql_cart);

    while($row=mysqli_fetch_assoc($result_cart))
    {
        $quantity_s_cart=$row['quantity'];
    }
    $quantity_i_cart=intval($quantity_s_cart);

    $quantity_i_menu=$quantity_i_menu+$quantity_i_cart;

    $sql_updateitem="UPDATE menu SET quantity=$quantity_i_menu where item_id=$item_remove";
    mysqli_query($db,$sql_updateitem);


    $stmt=$db->prepare("DELETE FROM cart where item_id='$item_remove'");
    $stmt->execute();
}

$stmt=$db->prepare("SELECT menu.name,menu.price*COUNT(cart.item_id) as price,cart.item_id,COUNT(cart.item_id) as quantity from menu INNER JOIN cart WHERE cart.item_id=menu.item_id GROUP BY cart.item_id");
$stmt->bind_result($name,$price,$item_id,$quantity);
$stmt->execute();

while ($stmt->fetch()) {
    $cart_items.="<div id='$item_id' class='single_item'>
    <hr>
    <div class='item_tab1'>
        <div class='item_name'><p>$name</p></div>
        <div class='price'><p>$ $price</p></div>
    </div>
    <div class='item_tab2'>
        <img src='menu/$item_id.png'>
    </div>
    <div class='item_tab3'>
        <div class='add' onclick='add(\"$item_id\")'><i class='fas fa-plus-square' style='color: green;'></i></div>
        <div class='quantity'><p style='font-size: 30px;'>$quantity</p></div>
        <div class='subtract' onclick='subtract(\"$item_id\")'><i class='fas fa-minus-square' style='color: green;'></i></div>
        <div class='remove' onclick='removecart(\"$item_id\")'>Remove</div>
    </div>
    
</div>";
$sub_total=$sub_total+$price;
}
if($sub_total!=0){
    $sub_total=strval($sub_total);

    echo $cart_items.",".$sub_total;
}
else{
    echo "no_items";
}









?>