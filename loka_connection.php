<?php

$user = "root";
$server = "localhost";
$password = "";
$dbname = "lokarthservices";

$conn = mysqli_connect($server, $user, $password, $dbname);

if ($conn)
{
    echo "conneccted successfully";
}
else{
    echo "connection failes!";
}

?>