<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><h1>Report<h1></title>
      <link rel="stylesheet" href="design.css">
  </head>
  <body>
    <h2>Reports</h2>
    <table border="1">

<?php
  include 'connection.php';
//$=$_POST[''];
$click=$_POST['clicked'];
$th=1;



if($click=="rep1")
{
          $a=$_POST['deptm'];

          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM `employee` WHERE Emp_Dept_ID='$a'";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
}

if($click=="rep2")
{
          $a=$_POST['year'];

          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM `employee` WHERE year(Emp_Join_Date)>='$a'";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
}

if($click=="rep3")
{


          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM `employee` WHERE `Emp_Salary`>=137";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
}

if($click=="rep4")
{
          $a=$_POST['design'];

          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM `employee` WHERE `Emp_Designation_ID`='$a'";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
}

if($click=="rep5")
{
          $a=$_POST['country'];

          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM `employee` WHERE `Emp_Location_ID`='$a'";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
}


if($click=="rep6")
{
          $a=$_POST['child'];

          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM employee WHERE Emp_Id in(SELECT Emp_id FROM family_details WHERE Child>=$a)";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
}

if($click=="rep7")
{


          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM `employee` WHERE Emp_Education_ID in(20,40,51,53,55)";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
}

if($click=="rep8")
{
        //  $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
        $p="SELECT count(account_details.Account_No),Bank_Name FROM bank_master,account_details WHERE bank_master.Bank_ID=account_details.Bank_ID && account_details.Account_Typpe=1	 group by bank_master.Bank_Name";

        //  $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
          $th=2;
          echo "
                <th> Count</th>
                <th> bank name</th>
                ";

                while($i=mysqli_fetch_array($y))
                {
                        echo " <tr>
                            <td>
                            $i[0]
                            </td>
                            ";
                        echo "
                            <td>
                            $i[1]
                            </td>
                            </tr>
                            ";
                      }
}


if($click=="rep9")
{

          $a=$_POST['techm'];
        //  $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT count(Emp_Designation_ID) FROM employee WHERE Emp_Dept_ID=$a && Emp_Designation_ID=92";
          //$x=mysqli_query($conn,$q);

          $y=mysqli_query($conn,$p);
          $l=0;
          $th=2;



          echo "
                <th> Count of technical manager</th>
                ";

                while($i=mysqli_fetch_array($y))
                {

                        echo " <tr>
                            <td>
                            $i[0]
                            </td>
                            </tr>
                            ";
                          }

}



if($click=="rep10")
{

          $a=$_POST['expenditure'];
        //  $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT SUM(Emp_Salary) FROM employee WHERE Emp_Dept_ID=$a && Emp_ID in(select Emp_ID from account_details where Account_Typpe=1)";
          //$x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $l=0;
          $th=2;

          echo "
                <th> total expenditure of selected department</th>
                ";

                while($i=mysqli_fetch_array($y))
                {

                        echo " <tr>
                            <td>
                            $i[0]
                            </td>
                            </tr>
                            ";
                          }

}









//echo "nothig";
?>


  <tr>
<?php
if($th==1)
{
while($h=mysqli_fetch_row($x))
{
  $l=$l+1;
echo "
        <th>
        $h[0]
        </th>


      ";
}
}
?>
</tr>

<?php
if($th==1)
{
while($i=mysqli_fetch_array($y))
{
?>
<tr>
  <?php
  $t=0;
      while ($t < $l)
      {
        // code...
        echo "
            <td>
            $i[$t]
            </td>
            ";
            $t=$t+1;
      }


}
}
 ?>

</tr>

</table>
</body>
</html>
