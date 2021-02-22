<?php
include ('connection.php');

$ci=$_POST['CID'];
$Cn=$_POST['Cname'];

$q="INSERT INTO `country_master` (`Country_ID`, `Country_Name`) VALUES ('$ci', '$Cn')";
mysqli_query($conn,$q);
?>
