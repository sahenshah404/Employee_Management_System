<?php
include ('connection.php');

$ri=$_POST['RID'];
$rn=$_POST['Rname'];
$act=$_POST['active'];

$q="INSERT INTO `region_master` (`Region_ID`, `Region_Name`, `Region_Status`) VALUES ('$ri', '$rn', '$act')";
mysqli_query($conn,$q);
?>
