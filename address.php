<?php
include ('connection.php');

$Addr=$_POST['aID'];
$Emp= $_POST['eID'];
$Addr1=$_POST['addr1'];
$Addr2=$_POST['addr2'];
$cno=$_POST['Cno'];
$AddrT=$_POST['addr'];

$r="INSERT INTO `address` (`Address_ID`, `Emp_ID`, `Address1`, `Address2`, `Tel_No`, `Address_Type`) VALUES('$Addr', '$Emp', '$Addr1', '$Addr2', '$cno', '$AddrT')";
mysqli_query($conn,$r);

 ?>
