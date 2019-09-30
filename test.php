<?php
include ("new_con.php");
$id = $_POST['emp_no'];
    $birthdate = $_POST['birth_date'];
    $fname = $_POST['First Name'];
    $lname = $_POST['Last Name'];
    $gender = $_POST['Gender'];
    $hdate = $_POST['Hire Date'];
    $depart = $_POST['Department'];
    $manager = $_POST['Manager'];
    $salary =$_POST['Salary'];
$sql = "update emp_table set birth_date = '$birthdate', firstname = '$fname', lastname = '$lname', gender = 'm', hiredate = '2019-04-17', department = '$depart', manager = '$manager', salary = '15000' where emp_no = '$id'";

$mysqli->query($sql) or die($mysqli->error);

header('Location:emp.php');

?>
