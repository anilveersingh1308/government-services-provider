<?php
include("loka_connection.php");

$query = "CREATE TABLE required_services (id INT(6) AUTO_INCREMENT PRIMARY KEY, detail_name VARCHAR (100) NOT NULL)";
$data = mysqli_query($conn, $query);

if($data){
    echo "successfully created";
}else{
    echo "failed to create";
}