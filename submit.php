<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";
$ansno=$_POST["chatn"];
$a=$_SESSION["usern"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql ="INSERT INTO mesamp (uname,text) VALUES ('$a','$ansno')";
$conn->query($sql);
$conn->close();
header('Location: http://127.0.0.1/chatweb/chatarena.php');



?>