<?php
session_start();
require_once 'connect.php';
$result_per_page=8;

if($_SESSION["fname"] && $_SESSION["email"])
{
if(isset($_GET['search']))
{
	$search_data=$_GET['search'];
	$search_cat=$_GET['searchcat'];

	$menu_items="";



    $stmt=$db->prepare("SELECT item_id,name,description,price,deleted from menu where type='$search_cat' and name LIKE '%$search_data%'");
	$stmt->bind_result($item_id,$name,$description,$price,$deleted);
	$stmt->execute();

	while ($stmt->fetch()) {
        if($deleted==1)
        {
            $message = "Yes";
        }
        else
        {
            $message = "No";
        }
		$menu_items.="<div class='card-container_item'>
				<div class='upper-container' style='background-image: url(menu//".$item_id.".png); background-size: 290px 220px;'>
				<div class='description'>
						<h5>Chef's note</h5>
						<p>$description</p>
					</div>
				</div>
				<div class='lower-container'>
				<div class='itemname'><h5>$name  $$price</h5><h4>Item ID:  $item_id</h4><h4>Soft Deleted? $message</h4></div>
				</div>
				</div>";
	}

	if($menu_items==""){
		echo "<h3 style='text-align:center;'>Sorry No results where found!!<span style='font-size:60px;'>&#128533;</span></h3>";
	}
	else{
		echo $menu_items;
	}
	
	
}
else{
	if(!isset($_GET['category_name']))
	{
		$category="drinks";
	}
	else{
		$category=$_GET['category_name'];
	}
	$menu_items="";
	$page_data="";

	$sql="SELECT item_id,name,description,price from menu where type='$category'";
	$result = mysqli_query($db, $sql);
	$number_of_results = mysqli_num_rows($result);
	$number_of_pages = ceil($number_of_results/$result_per_page);

	if (!isset($_GET['page'])) {
	  $page = 1;
	} else {
	  $page = $_GET['page'];
	}
	$saved_page=$page;
	$this_page_first_result = ($page-1)*$result_per_page;




	$stmt=$db->prepare("SELECT item_id,name,description,price,deleted from menu where type='$category'  LIMIT ".$this_page_first_result.",".$result_per_page);
	$stmt->bind_result($item_id,$name,$description,$price,$deleted);
	$stmt->execute();
     
	while ($stmt->fetch()) {
        if($deleted==1)
        {
            $message = "Yes";
        }
        else
        {
            $message = "No";
        }
		$menu_items.="<div class='card-container_item'>
				<div class='upper-container' style='background-image: url(menu//".$item_id.".png); background-size: 290px 220px;'>
				<div class='description'>
						<h5>Chef's note</h5>
						<p>$description</p>
					</div>
				</div>
				<div class='lower-container'>
				<div class='itemname'><h5>$name  $$price</h5><h4>Item ID:  $item_id</h4><h4>Soft Deleted? $message</h4></div>
				</div>
				</div>";
	}
	for($page=1;$page<=$number_of_pages;$page++)
	{
		if($saved_page==$page)
		{

			$page_data.="<a class='active_page' id='$page'>$page</a>";	
		}
		else{
			$page_data.="<a id='$page'>$page</a>";
		}
	}


	echo $menu_items.",".$page_data;
	$stmt->close();

}
}
else{
    echo "<h3>Please login to view the items</h3>";
}
?>
