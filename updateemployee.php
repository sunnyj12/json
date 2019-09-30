<?php
include("connection.php");
$id         = $_POST['id'];
$EmpName    = $_POST['name'];
$dob        =  $_POST['dob'];
$EmpGender  = $_POST['gender'];
$Emphd      = $_POST['department'];
$hiring     = $_POST['hiring_date'];
$salary     = $_POST['salary'];


$updateQuery = "Update emp SET name = '$Empname',dob='$dob',gender='$EmpGender',department='$Emphd 
,hiring_date='$hiring,salary='$salary WHERE id = '$id'";
$data=mysqli_query($conn,$updateQuery);
header("emp.php");
?>
