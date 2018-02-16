<!DOCTYPE html>
<html>
<head>
	<title>session</title>
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
$sql="select name,password from user";
$result=$conn->query($sql);
if($result->num_rows >0){
	while($row = $result->fetch_assoc()) {
       if($row['name']==$usern ){
       	if($row['password']==$upass)
       	header('Location: http://127.0.0.1/chatweb/chatm.php');
       }
}
}
echo "Invalid User Name Or PAssword";
?>
<br>

<a href="log.php">here!!! </a>
</body>
</html>


