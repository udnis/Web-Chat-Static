<!DOCTYPE html>
<html>
<head>
	<title>Log-Stat</title>
	<link rel="stylesheet" type="text/css" href="chatstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pangolin|Sansita" rel="stylesheet">
</head>
<body>

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

$usern=$_POST["uname"];
$upass=$_POST["upassword"];
$_SESSION["usern"] = $usern;
$_SESSION["upass"] = $upass;
$_SESSION["chatyn"] = "no";
$sql="select name,password from user";
$result=$conn->query($sql);
if($result->num_rows >0){
	while($row = $result->fetch_assoc()) {
       if($row['name']==$usern ){
       	if($row['password']==$upass){
       		$_SESSION["chatyn"] = "yes";
       	header('Location: http://127.0.0.1/chatweb/chatarena.php');}
       }
}
}

?>
<p id="loh"> User Name Or Password Entered Is Wrong !!! <br><a href="log.php">Login Again </a> </p>
<h1 id="lohn"> chat</h1>

<br>


</body>
</html>


