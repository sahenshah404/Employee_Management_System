<?php
include ('connection.php');

$Emp= $_POST['id'];
$en=$_POST['name'];
$eid=$_POST['dept_id'];
$esx=$_POST['gender'];
$ems=$_POST['married'];
$dj=$_POST['doj'];
$db=$_POST['dob'];
$ag=$_POST['age'];
$edu=$_POST['ed'];
$design=$_POST['desi'];
$sal=$_POST['salary'];
$loc=$_POST['location_id'];
$stat=$_POST['empsts'];



$q="INSERT INTO `employee` (`Emp_ID`, `Emp_Name`, `Emp_Dept_ID`, `Emp_Sex`, `Emp_Martial_Status`, `Emp_Join_Date`, `Emp_Birth_Date`, `Emp_Age`, `Emp_Education_ID`, `Emp_Designation_ID`, `Emp_Salary`, `Emp_Location_ID`, `Emp_Active_Status`) VALUES ('$Emp', '$en', '$eid', '$esx', '$ems', '$dj', '$db', '$ag', '$edu', '$design', '$sal', '$loc', '$stat')";

mysqli_query($conn,$q);
 ?>
