<?php
include ('connection.php');

$di=$_POST['dID'];
$dn=$_POST['Dname'];

$r="INSERT INTO `department_master` (`Dept_ID`, `Dept_Name`) VALUES ('$di', '$dn')";
mysqli_query($conn,$r);
?>
