<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "undergraduateproject"; // database name

if($conn) {
    echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 
?>