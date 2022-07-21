<?php 

// Development connection
$server="localhost";
$username="root";
$password="";
$db="Bank Database";

//Remote database connection
// $server="remotemysql.com";
// $username="TMYDPECOlQ";
// $password=" 6a3cppv34D";
// $db="TMYDPECOlQ";

$conn=mysqli_connect("remotemysql.com","TMYDPECOlQ","6a3cppv34D","TMYDPECOlQ");

// $conn = new mysqli("remotemysql.com","TMYDPECOlQ","6a3cppv34D","TMYDPECOlQ");

if($conn){
  
}

else
    die("connection to this database failed due to " .mysqli_connect_error());


?>
