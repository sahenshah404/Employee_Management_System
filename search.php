<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>search</title>
    <link rel="stylesheet" href="design.css">
  </head>
  <body>
    <h1>Reports</h1><br>
    <table border="2">


<?php
  include 'connection.php';

$click=$_POST['clicked'];
$th=1;



if($click=="find")
{
          $a=$_POST['findit'];



          $q="SELECT column_name FROM information_schema.columns WHERE table_schema = 'employee' AND table_name = 'employee'";
          $p="SELECT * FROM `employee` WHERE Emp_ID='$a'";
          $x=mysqli_query($conn,$q);
          $y=mysqli_query($conn,$p);
          $count=mysqli_num_rows($y);
        
          if ($count==0)
            {
                  $th=2;
                  echo " <h2>No Result found </h2>";

            }
          $l=0;
  }

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
