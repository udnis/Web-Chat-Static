<!DOCTYPE html>
<html>
<head>
    <title>Shat</title>
    <link rel="stylesheet" type="text/css" href="chatstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pangolin|Sansita" rel="stylesheet">
</head>
<body>
<h1 id="chatn"> chat</h1>
<div id="line" >

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


$sql = "SELECT uname,text FROM mesamp ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
        <?php if($row["uname"]==$_SESSION["usern"]){?>
        <p id="user"><?php 
        echo $row["text"];} ?> </p>
        <?php if($row["uname"]!=$_SESSION["usern"]){?>
        <p id="nuser"><?php 
        echo $row["uname"].':'.$row["text"];} ?> </p>
         <?php
    }
}



$conn->close();
?></div>
</body>
</html>