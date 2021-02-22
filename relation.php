<?php
include ('connection.php');

$r= $_POST['RID'];
$rn=$_POST['RName'];

$q="INSERT INTO `relation_master` (`Relation_ID`, `Relation_Desc`) VALUES ('$r', '$rn')";
mysqli_query($conn,$q);
 ?>
