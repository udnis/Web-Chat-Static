<!DOCTYPE html>
<html>
<head>
<title>Res-Stat</title>
<link rel="stylesheet" type="text/css" href="chatstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Pangolin|Sansita" rel="stylesheet">

	
</head>
<body>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="chat";
 
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
die("Connection failed: " . $conn->connect_error);

$rname=$_POST['rname'];
$rpass=$_POST['rpassword'];
$sql="INSERT INTO register (name,password) VALUES ('$rname','$rpass')";
$conn->query($sql);


?>


<p id="rh"> YOU HAVE SUCCESSFULLY REGISTERED!!!<br> WE WILL GET BACK TO YOU SOON !</p>
<h1 id="rhn"> chat</h1>




</body>
</html>
