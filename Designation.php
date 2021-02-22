<?php
include ('connection.php');

$did= $_POST['DID'];
$des=$_POST['Designation'];


$q="INSERT INTO `designation_master` (`Designation_ID`, `Designation_Desc`) VALUES ('$did', '$des')";
mysqli_query($conn,$q);

 ?>
