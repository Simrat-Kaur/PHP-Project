<?php
$url='localhost:3307';
$username='root';
$password='';
$dbname="mydb";
$conn=mysqli_connect($url,$username,$password,$dbname);
if(!$conn){
 echo '<script>alert("not connected")</script>';
}
else
{
	
}
?>