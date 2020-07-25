<?php
$servername="localhost";
$username="root";
$password="";
$dbname="health";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	die("Connection Failed".$con->connect_error);
}
echo "Connected Successfully";
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$PhoneNo=$_POST['PhoneNo'];
$Password=md5($Password);
$sql="INSERT INTO register(UserName,Password,PhoneNo) VALUES ('$UserName','$Password','$PhoneNo');";
if(mysqli_query($con, $sql))
{  
	echo nl2br("\nYou have been successfully registered");
}
else
{  
	echo "Could not insert record"; 
}
?>