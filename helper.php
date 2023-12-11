<?php

$conn=mysqli_connect('localhost','root','1972Mysql@1','db_payroll');
if (!$conn){die('connection failed');}

$val=$_GET["value"];

$val_M=mysqli_real_escape_string($conn,$val);

$sql="SELECT emp_name,ic_number FROM tbl_payslips WHERE emp_name='$val_M'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
  echo "<select>";
  while ($rows=mysqli_fetch_assoc($result)){
    echo "<option>" .$rows["ic_number"] ."</option>";
  }
  echo "</select>";
}

?>