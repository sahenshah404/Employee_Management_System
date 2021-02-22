<?php
include ('connection.php');

$loc=$_POST['LID'];
$rid= $_POST['RID'];
$c=$_POST['CID'];


$r="INSERT INTO `company_location` (`Location_ID`, `Region_ID`, `Country_ID`) VALUES ($loc, $rid, $c)";
mysqli_query($conn,$r);

 ?>
