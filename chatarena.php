<!DOCTYPE html>
<html>
<head>
	<title>Chat-Arena</title>
	<link rel="stylesheet" type="text/css" href="chatstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pangolin|Sansita" rel="stylesheet">
    
    
</head>
<body >

<?php
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


if($_SESSION["usern"]=="")
	header('Location: http://127.0.0.1/chatweb/lor.php');

?>
<h1 id="cahn"> chat</h1>
        <form id="caform" action="submit.php" method="post">
        
        <textarea  id="catxt" name="chatn" rows="10" cols="60"></textarea><br>
        <input id="casub" type="submit" value="NEXT">
        
        </form>
<p id="canc"><a  href="chat.php" >CHAT_BOX</a></p>
        
        <?php



$conn->close();
?>
</body>
</html