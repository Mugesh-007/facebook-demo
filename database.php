<?php

global $conn;

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name ="login";


$connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name); 


if ($connection) {
    
    $conn = $connection;
}else{

    echo "connection error";
}
?>