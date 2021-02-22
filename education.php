<?php
include ('connection.php');

$edID=$_POST['EID'];
$deg=$_POST['Degree'];
$p="INSERT INTO `education_master` (`Education_ID`, `Education_Desc`) VALUES ('$edID', '$deg')";
mysqli_query($conn,$p);
 ?>
