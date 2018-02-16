<!DOCTYPE html>
<html>
<head>
	<title>Chat-Arena</title>
</head>
<body>

><?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo $_SESSION["usern"];


?>
        <form action="submit.php" method="post">
        <input type="text" name="chatn" value="">
        <input type="submit" value="NEXT">
        <?php



$conn->close();
?>
</body>
</html