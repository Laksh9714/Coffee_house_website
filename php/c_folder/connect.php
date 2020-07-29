<?php
$dbconnect=array("server"=>"localhost","user"=>"root","pass"=>"root","dbname"=>"coffee_house","port"=>8889);

$db=new mysqli($dbconnect["server"],$dbconnect["user"],$dbconnect["pass"],$dbconnect["dbname"],$dbconnect["port"]);

if($db->connect_errno>0){
    echo "Database connectionn error!!".$db->connect_error;
    exit;
}



?>
