<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="health";

$con = new mysqli($servername, $username, $password,$dbname);
$UserName= $_POST["UserName"];
$Password = $_POST["Password"];
$sql = "SELECT UserName,Password FROM register";
$Password=md5($Password);
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc())
{
	
if($UserName==$row["UserName"]&&$Password==$row["Password"])
{
echo "logged in successfully";
goto a;
}
}
echo "enter a valid username or password";
}
a:
?>