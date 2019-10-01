<?php
error_reporting(E_ALL);

include("connection1.php");
if(isset($_POST['Submit']))
{
$bdate = $_POST['birth_date'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$Hiring = $_POST['hiredate'];
$dept = $_POST['dept_no'];
$manager= $_POST['manager'];
$Salary = $_POST['salary'];
  



$query = "INSERT INTO `emp_table`( `birth_date`, `firstname`, `lastname`, `gender`, `hiredate`) VALUES ('$bdate','$fname','$lname','$gender','$Hiring')";

$conn->query($query) or die($conn->error);
$data = $conn->insert_id;

if($data)
{
	$query1 = "INSERT INTO `salaries`(`emp_no`,`salary` ) VALUES ('$data','$Salary')";
}
	$conn->query($query1) or die($conn->error);
	
	$query2="INSERT INTO dept_manager(dept_no,emp_no)VALUES('$dept','$data')";
	$conn->query($query2) or die($conn->error);
}
?>
 <?php
 header('location:emp.php');
 ?>
