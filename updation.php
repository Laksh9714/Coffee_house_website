<?php
session_start();

$itemid = $_POST["itemid"];
$itemtype = $_POST["itemtype"];
$itemname = $_POST["itemname"];
$description = $_POST["description"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$file = $_POST["file"];
$softdelete = $_POST["softdelete"];


require_once 'php/connect.php';



if(isset($_POST['submit2']) and isset($_POST['itemid']))
{   
    $sql  ="SELECT * FROM menu WHERE item_id=".$itemid.";";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {

        echo "<script>alert('you have entered incorrect Item ID, try again with the correct Item ID');window.location.href = 'updateitem.php';</script>";

    }

    else
    {
        if(isset($_POST["itemname"]))
        {   
           
            $sql = "UPDATE menu ". "SET name = '$itemname'". 
                "WHERE item_id =$itemid;" ;

            $stmt= $conn->prepare($sql);
            $stmt->execute();
            if ($stmt->affected_rows > 0){

                echo "<script>alert('Item name has been updated');window.location.href = 'updateitem.php';</script>";
                 }
            else
            {                    echo "<script>alert('Could not update Item Name');window.location.href = 'updateitem.php';</script>";
            }
        }
    }}

else if(isset($_POST['submit1']) and isset($_POST['itemid']))
{   
    $sql  ="SELECT * FROM menu WHERE item_id=".$itemid.";";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {

        echo "<script>alert('you have entered incorrect Item ID, try again with the correct Item ID');window.location.href = 'updateitem.php';</script>";

    }

    else
    {
        if(isset($_POST["itemtype"]))
        {   
            
            $sql = "UPDATE menu ". "SET type = '$itemtype'". 
                "WHERE item_id =$itemid;" ;

            $stmt= $conn->prepare($sql);
            $stmt->execute();
            if ($stmt->affected_rows > 0){

                echo "<script>alert('Item Category has been updated');window.location.href = 'updateitem.php';</script>";
                            }
            else
            {     
                echo "<script>alert('Could not update Item Category');window.location.href = 'updateitem.php';</script>";
            }
        }
    }}
else if(isset($_POST['submit3']) and isset($_POST['itemid']))
{   
    $sql  ="SELECT * FROM menu WHERE item_id=".$itemid.";";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {

        
        echo "<script>alert('you have entered incorrect Item ID, try again with the correct Item ID');window.location.href = 'updateitem.php';</script>";

    }

    else
    {
        if(isset($_POST["description"]))
        {   
            
            $sql = "UPDATE menu ". "SET description = '$description'". 
                "WHERE item_id =$itemid;" ;

            $stmt= $conn->prepare($sql);
            $stmt->execute();
            if ($stmt->affected_rows > 0){

                echo "<script>alert('Item Description has been updated');window.location.href = 'updateitem.php';</script>";
                
            }
            else
            {    
                echo "<script>alert('Could not update Item Description');window.location.href = 'updateitem.php';</script>";
            }
        }
    }}
else if(isset($_POST['submit4']) and isset($_POST['itemid']))
{   
    
    $sql  ="SELECT * FROM menu WHERE item_id= $itemid;";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {

        
        echo "<script>alert('you have entered incorrect Item ID, try again with the correct Item ID');window.location.href = 'updateitem.php';</script>";

    }

    else
    {
        if(isset($_POST["quantity"]))
        {   
            
            $sql = "UPDATE menu SET quantity = $quantity WHERE item_id =$itemid;" ;

            $stmt= $conn->prepare($sql);
            $stmt->execute();
            
            if ($stmt->affected_rows > 0){

                echo "<script>alert('Item Quantity has been updated');window.location.href = 'updateitem.php';</script>";
                
            }
            else
            {   
                echo "<script>alert('Could not update Item Quantity');window.location.href = 'updateitem.php';</script>";
            }
        }
    }}

else if(isset($_POST['submit5']) and isset($_POST['itemid']))
{   
    $sql  ="SELECT * FROM menu WHERE item_id= $itemid;";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {

        echo "<script>alert('you have entered incorrect Item ID, try again with the correct Item ID');window.location.href = 'updateitem.php';</script>";

    }

    else
    {
        if(isset($_POST["price"]))
        {   

            $sql = "UPDATE menu SET price = $price WHERE item_id = $itemid;" ;

            $stmt= $conn->prepare($sql);
            $stmt->execute();
           
            if ($stmt->affected_rows > 0){

                echo "<script>alert('Item Price has been updated');window.location.href = 'updateitem.php';</script>";
                
            }
            else
            {     
                echo "<script>alert('Could not update Item Price');window.location.href = 'updateitem.php';</script>";
            }
        }
    }}

else if(isset($_POST['submit7']) and isset($_POST['itemid']))
{   
    $sql  ="SELECT * FROM menu WHERE item_id=".$itemid.";";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {

        
        echo "<script>alert('you have entered incorrect Item ID, try again with the correct Item ID');window.location.href = 'updateitem.php';</script>";

    }

    else
    {
        if(isset($_POST["softdelete"]))
        {   if($softdelete == '1')
        {
            $sql = "UPDATE menu SET deleted = 1 WHERE item_id =".$itemid.";";
        }
         else
         {
             $sql = "UPDATE menu SET deleted = 0 WHERE item_id =".$itemid.";";
         }


         $stmt= $conn->prepare($sql);
         $stmt->execute();
        
         if ($stmt->affected_rows > 0){

             echo "<script>alert('Soft Delete Status Updated');window.location.href = 'updateitem.php';</script>";
             
         }
         else
         {     
             echo "<script>alert('Could not update Soft Delete Status');window.location.href = 'updateitem.php';</script>";
         }
        }
    }}
else if(isset($_POST['submit6']))
{   
    $sql  ="SELECT * FROM menu WHERE item_id=".$itemid.";";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {

        echo "<script>alert('you have entered incorrect Item ID, try again with the correct Item ID');window.location.href = 'updateitem.php';</script>";

    }

    else
    {
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

                    echo "<script>alert('Image Updated');window.location.href = 'updateitem.php';</script>";
                } else {

                    $ok=0;
                    echo "<script>alert('Image Not Updated');window.location.href = 'updateitem.php';</script>";
                }
            }
            if($ok == 1){
                @move_uploaded_file($_FILES["file"]["tmp_name"], $target . ".png");
                $file_location = $target . $filename;
                
                
            }
            else {
                echo "Select your file to upload.";
            }        }
        else
        {
            echo "<script>alert('Image not uploaded');window.location.href = 'updateitem.php';</script>";
        }
    }}//test bracket



else 
{echo "form not submitted";}

/**
     if(isset($_POST["description"]))
     {

         $sql = "UPDATE menu SET description = $description WHERE item_id='".$itemid."';";
         $stmt= $conn->prepare($sql);
         $stmt->execute();
         if ($stmt->affected_rows > 0){

             echo "<script>alert('Item description has been updated);</script>";
         }
         else
         {
             echo "<script>alert('Could not update Item description');</script>";
         }

     }
     if(isset($_POST["quantity"]))
     {

         $sql = "UPDATE menu SET quantity = $quantity WHERE item_id='".$itemid."';";
         $stmt= $conn->prepare($sql);
         $stmt->execute();
         if ($stmt->affected_rows > 0){

             echo "<script>alert('Item quantity has been updated);</script>";
         }
         else
         {
             echo "<script>alert('Could not update Item quantity');</script>";
         }

     }
     if(isset($_POST["price"]))
     {

         $sql = "UPDATE menu SET price = $price WHERE item_id='".$itemid."';";
         $stmt= $conn->prepare($sql);
         $stmt->execute();
         if ($stmt->affected_rows > 0){

             echo "<script>alert('Item price has been updated);</script>";
         }
         else
         {
             echo "<script>alert('Could not update Item price');</script>";
         }

     }
     if(isset($_POST["price"]))
     {

         $sql = "UPDATE menu SET price = $price WHERE item_id='".$itemid."';";
         $stmt= $conn->prepare($sql);
         $stmt->execute();
         if ($stmt->affected_rows > 0){

             echo "<script>alert('Item price has been updated);</script>";
         }
         else
         {
             echo "<script>alert('Could not update Item price');</script>";
         }

     }
     if(!empty($_FILES["file"]["name"]))
     {
         $target = "menu/";
         $target = $target . basename($_FILES['uploaded']['name']) ; 
         $ok=1;

         //$allowed_types = array("image/gif","image/jpeg","image/pjpeg","image/png","image/bmp");
         $allowed_types = array("image/png");

         $allowed_extensions = array("png");

         if ($_FILES['file']['size'] > 350000) {
             $max_size =  round(350000 / 1024);
             echo "Your file is too large. Maximum $max_size Kb is allowed. <br>"; 
             $ok=0;
         } 

         if ($_FILES["file"]["error"] > 0) {
             echo "Error: " . $_FILES["file"]["error"] . "<br />";
             $ok=0;
         } else {

             $path_parts = pathinfo(strtolower($_FILES["file"]["name"]));

             if(in_array($_FILES["file"]["type"],$allowed_types) && in_array($path_parts["extension"],$allowed_extensions)){
                 //$filename = $timestamp."-".$_FILES["file"]["name"];
                 $filename = $_FILES["file"]["name"]; 
                 echo "Name: " . $filename . "<br />";
                 echo "Type: " . $_FILES["file"]["type"] . "<br />";
                 $path_parts = pathinfo($_FILES["file"]["name"]);
                 echo "Extension: " . $path_parts["extension"] . "<br />";
                 echo "Size: " . round($_FILES["file"]["size"] / 1024) . " Kb<br />";
                 //echo "Stored in: " . $_FILES["file"]["tmp_name"]. " <br />";
             } else {
                 echo "Type " . $_FILES["file"]["type"] . "  with extension " . $path_parts["extension"] . " not allowed <br />";
                 $ok=0;
             }
         }
         if($ok == 1){
             @move_uploaded_file($_FILES["file"]["tmp_name"], $target . $filename);
             $file_location = $target . $filename;
         }
         else {
             echo "Select your file to upload.";
         }
     }
 }}
else
{
    echo "<script>alert('form was not submitted);</script>";
}

/**
                $sql="INSERT INTO menu(description,imagepath,item_id,name,price,quantity,specials,type) values('$description','$imagepath',$itemid,'$itemname',$price,$quantity,0,'$itemtype')";
                $stmt= $conn->prepare($sql);
                $stmt->execute();


                if ($stmt->affected_rows > 0){

                    echo "<script>alert('Congratulations, you have added the item successfully');window.location.href = 'admin.php';</script>";
                    //echo "You have added the item successfully";

                }
                else
                {   echo "<script>alert('could not add item,please try again');window.location.href = 'admin.php';</script>";
                 //echo "could not add item, please try again";
                 //echo $sql;
                }
            }

            else
            {
                echo "error, try again";
            }

            **/




?>