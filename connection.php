<?php
$servername="localhost";
$dbname='local-story';
$username="root";
$password="";

//create connection
$conn= new mysqli($servername, $dbname, $username, $password);

//check connection
if ($conn->connect_error) {
    die("connection failed:". $conn->connect_error);
}

echo "Connected successfully";
?>