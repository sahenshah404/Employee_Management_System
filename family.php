<?php
include ('connection.php');
$Fid=$_POST['fID'];
$emp=$_POST['eID'];
$rname=$_POST['relation'];
$rn= $_POST['Rname'];
$ra=$_POST['Rage'];
$nom =$_POST['nominee'];
$child=$_POST['Child'];


$q="INSERT INTO `family_details` (`Family_ID`, `Emp_ID`, `Emp_Relation_ID`, `Relation_Name`, `Relation_Age`, `Nominee`,`Child`) VALUES ('$Fid', '$emp','$rname', '$rn', '$ra', '$nom','$child')";
mysqli_query($conn,$q);

 ?>
