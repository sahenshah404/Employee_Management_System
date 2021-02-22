<?php
$server="localhost";
$username="root";
$password="";
$database="employee";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn)
{

}
else
{
	echo "connection could not be established with database.";

}
//error_reporting(0);
?>
