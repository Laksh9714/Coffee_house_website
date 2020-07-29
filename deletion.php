<?php


session_start();
$itemid = $_POST["itemid"];

require_once 'php/connect.php';

if(isset($_POST["itemid"]))

{   

    $sql = "UPDATE menu SET deleted = 1 WHERE item_id=".$itemid.";";
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    if ($stmt->affected_rows > 0){

        echo "<script>alert('Item has been soft deleted, item will not be visible in regular menu search');window.location.href = 'deleteitem.php';</script>";
    }
    else
    {
        echo "<script>alert('Unable to delete Item, Check for correct Item ID');window.location.href = 'deleteitem.php';</script>";   
    }
}

else
{
    echo "form not submitted";
}




?>
