<?php

session_start();
$itemid = $_POST["itemid"];
$itemtype = $_POST["itemtype"];
$itemname = $_POST["itemname"];
$description = $_POST["description"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

$file = $_POST["file"];
/**
echo $file;
echo $itemid;
echo $itemtype;
echo $itemname;
echo $description;
echo $quantity;
echo $price;

**/


require_once 'php/connect.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit6"]))
{


    
    $sql  ="SELECT * FROM menu WHERE item_id=".$itemid.";";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('product with item id already exists, try adding with another itemid');window.location.href = 'admin.php';</script>";
    }
    else
    {
        
        $sql="INSERT INTO menu(description,item_id,name,price,quantity,type) values('$description','$itemid','$itemname',$price,$quantity,'$itemtype')";
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        

        
        if(!empty($_FILES["file"]["name"]))
        {   
            $target = "menu/";
            $target = $target . $itemid . strstr(basename($_FILES['uploaded']['name']),".") ; 
            $ok=1;

            $allowed_types = array("image/png");

            $allowed_extensions = array("png");

            if ($_FILES['file']['size'] > 900000) {
                $max_size =  round(900000 / 1024);
                echo "Your file is too large. Maximum $max_size Kb is allowed. <br>"; 
                $ok=0;
            } 

            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br />";
                $ok=0;
            } else {

                $path_parts = pathinfo(strtolower($_FILES["file"]["name"]));

                if(in_array($_FILES["file"]["type"],$allowed_types) && in_array($path_parts["extension"],$allowed_extensions)){
                    $filename = $_FILES["file"]["name"]; 
                    $path_parts = pathinfo($_FILES["file"]["name"]);
                } else {
                    echo "Type " . $_FILES["file"]["type"] . "  with extension " . $path_parts["extension"] . " not allowed <br />";
                    $ok=0;
                }
            }
            if($ok == 1){
                @move_uploaded_file($_FILES["file"]["tmp_name"], $target . ".png");
                $file_location = $target . $filename;
                
                
            }
            else {
                echo "Select your file to upload.";
            }        
        }
        else
        {
            echo "<script>alert('Image not uploaded');window.location.href = 'updateitem.php';</script>";
        }
        
        if (($stmt->affected_rows > 0) and ($ok == 1)){

            echo "<script>alert('Congratulations, you have added the item successfully');window.location.href = 'admin.php';</script>";
        
        }
        else
        {   echo "<script>alert('could not add item,please try again');window.location.href = 'admin.php';</script>";
        }
        
       
}
}

else
{
    echo "form not submitted";
}



?>
