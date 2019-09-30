<?php
require_once("connection1.php");

if(count($_GET)>0) {
  $sql = "DELETE FROM emp_table WHERE emp_no=" . $_GET["emp_no"] . "";
  
 
  if(mysqli_query($conn,$sql))
  {
  	header("Location:emp.php");
  }

  else{
  	echo "Data not deleted";
  }
  //$message = "Employee Details Successfully Deleted.";
}
