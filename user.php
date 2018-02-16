<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="chatstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pangolin|Sansita" rel="stylesheet">
</head>
<body>
<div id="uheader">

<h1 id="uh"> &nbsp&nbsp&nbspLogin /&nbsp Register </h1>
<h1 id="uhn"> chat</h1>
</div>

<?php
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



?>

       <?php
        $conn->close();
?>
</body>
</html>