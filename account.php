<?php
include ('connection.php');

$Emp= $_POST['eID'];
$Acc=$_POST['AccNo'];
$Bank =$_POST['bank'];
$Acct =$_POST['acctype'];

$q="insert into account_details(Emp_ID,Account_No,Bank_ID,Account_Typpe) values($Emp,$Acc,$Bank,$Acct)";
mysqli_query($conn,$q);

 ?>
