<?php

error_reporting(0);
include_once("connection1.php");

//echo "<pre>";print_r($_POST);die;

$id = $_GET['emp_no'];
$Dob = $_POST['birth_date'];
$Fname = $_POST['firstname'];
$Lname = $_POST['lastname'];
$Gender = $_POST['gender'];
$join_date = $_POST['hiredate'];
$Salary = $_POST['salary'];
 
if(!empty($_POST['firstname'])){
	
	
	//$result = "UPDATE `emp_table` set `birth_date`='$Dob', `firstname`='$Fname', `lastname`='$Lname',  `gender`='$Gender', `hiredate`='$join_date' WHERE emp_no= '$id' "; 
	
//	$result = "UPDATE emp INNER JOIN salary USING (emp_id) SET emp.first_name='$Fname', emp.last_name='$Lname', emp.dob='$Dob', emp.gender='$Gender', emp.join_date='$join_date', salary.salary_amount='$Salary'  WHERE emp_id='$id' ";

$result = "UPDATE `emp_table` INNER JOIN salaries USING (emp_no) set emp_table.birth_date='$Dob', emp_table.firstname='$Fname', emp_table.lastname='$Lname',  emp_table.gender='$Gender', emp_table.hiredate='$join_date', salaries.salary='$Salary' WHERE emp_no= '$id' "; 
 echo $result;
 
 $conn->query($result) or die(mysqli_error($conn));
 
               // $conn->query($result) or die("error");
                       header("Location:emp.php");
}
?>


<?php

$result = mysqli_query($conn, " select emp_table.*, salaries.salary, departments.dept_name, dept_emp.dept_no from emp_table inner join salaries on salaries.emp_no = emp_table.emp_no inner join  departments on emp_table.emp_no = departments.dept_no INNER JOIN dept_emp on departments.dept_no = dept_emp.dept_no ");


while($row = mysqli_fetch_array($result))
{
$Dob = $row['birth_date'];
$Fname = $row['firstname'];
$Lname = $row['lastname'];
$Gender = $row['gender'];
$join_date = $row['hiredate'];
$Department = $row['dept_name'];
//$Manager = $row['manager'];
$Salary = $row['salary'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>CRUD UPDATE OPERATION</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
</head>

<body>
 <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4>JSON CRUD</h4>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            </div>
        </div>
    </nav>
	<div></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
              
                <form method="POST" action="">
					  <h2 style="padding-top:40px;">Update New Employee</h2>
                    <div class="form_group">
                        <label>Birth Date:</label>
                        <input class="form-control" type="date" name="birth_date" value="<?php echo $Dob;?>" required="required" />
                    </div>
                    <div class="form_group">
                        <label>First Name:</label>
                        <input class="form-control" type="text" name="firstname" value="<?php echo $Fname;?>"" required="required" />
                    </div>
                    
                    <div class="form_group">
                        <label>Last Name:</label>
                        <input class="form-control" type="text" name="lastname" value="<?php echo $Lname;?>"" required="required"/>
                    </div>
                    
                    
                    
                    <div class="form-group">
                    <label for="inputAge">Gender</label>
                      <select class="form-control" name="gender">
                               <option value="">Gender</option>
                        <option value="M">Male</option>
                                <option value="F">Female</option>
                                </div>
                               </select> <span class="help-block"></span>
                               
                           <div class="form-group">     
                                
                        <label>Hire Date:</label>
                        <input class="form-control" type="date" name="hiredate" value="<?php echo $join_date;?>" required="required"/>
                    </div>
                                
                      </select> <span class="help-block"></span>
                  </div>
                  
                    
<!--
                    <div class="form-group">
                       <label for="">Department</label>
                       <select class="form-control" name="dept_no">
						   <option value="">select</option>
                              <?php while($row = mysqli_fetch_array($records)){ ?>
                             <option value="<?php echo $row['dept_no']; ?>"> <?php echo $row['dept_name'];?> </option>
                              <?php } ?>
                       </select>
                     </div>
                    
                    
                    
                    <div class="form_group">
                        <label>Manager:</label>
                        <input class="form-control" type="text" name="manager" value="" required="required"/>
                    </div>
                    
-->


                    <div class="form_group">
                        <label>Salary:</label>
                        <input class="form-control" type="text" name="salary" value="<?php echo $Salary;?>" required="required"/>

                    </div>
                    
                  <br>
                   
                    <div class="form-actions">
						 	<input type="hidden" name="emp_no" value=<?php echo $id;?> > </td>
						<input type="submit" class="btn btn-primary" name="update" value="Update"></tr>
                        <a class="btn btn btn-default" href="emp.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
