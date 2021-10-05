<?php 

//Development connection
// $server="localhost";
// $username="root";
// $password="";
// $db="Bank Database";

//Remote database connection
$server="remotemysql.com";
$username="doTaVHN16m";
$password="Ct0Edzczf3";
$db="doTaVHN16m";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
