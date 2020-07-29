<?php
$dbconnect=array("server"=>"localhost","user"=>"root","pass"=>"","dbname"=>"dallas_coffee_house");

$db=new mysqli($dbconnect["server"],$dbconnect["user"],$dbconnect["pass"],$dbconnect["dbname"]);
$conn = mysqli_connect($dbconnect["server"], $dbconnect["user"], $dbconnect["pass"], $dbconnect["dbname"]);
if($db->connect_errno>0){
    echo "Database connectionn error!!".$db->connect_error;
    exit;
}



?>
