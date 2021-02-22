<?php
include ('connection.php');

$BnId=$_POST['BID'];
$Bnme=$_POST['BankName'];

$d="INSERT INTO `bank_master` (`Bank_ID`, `Bank_Name`) VALUES ('$BnId', 'Bnme')";
mysqli_query($conn,$d);
?>
