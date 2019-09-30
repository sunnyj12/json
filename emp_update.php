<?php

include_once("new_con.php");




if(isset($_POST['update']))


{
     $id = $_POST['emp_no'];
    $birthdate = $_POST['birth_date'];
    $fname = $_POST['First Name'];
    $lname = $_POST['Last Name'];
    $gender = $_POST['Gender'];
    $hdate = $_POST['Hire Date'];
    $depart = $_POST['Department'];
    $manager = $_POST['Manager'];
    $salary =$_POST['Salary'];
   
$sql = "update emp_table set birth_date = '$birthdate', firstname = '$fname', lastname = '$lname', gender = 'F', hiredate = '2019-04-17', department = '$depart', manager = '$manager', salary = '15000' where emp_no = '$id'";

$mysqli->query($sql) or die($mysqli->error);
     
       echo "employee data successfully update.";
       header("Location:emp.php");
    
}
else{ 
	echo "";
	
	
}		
?>

<?php

$id = $_GET['emp_no'];

$sql = "SELECT * FROM `emp_table` WHERE emp_no=$id";
$mysqli->query($sql) or die($mysqli->error);

while($row = mysqli_fetch_array($result))
{

$birthdate = $row['birth_date'];
$fname = $row['firstname'];
$lname = $row['lastname'];
$gender = $row['gender'];
$hiredate = $row['hiredate'];
$depart = $row['depart'];
$salary = $row['salary'];


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial CRUD JSON DATA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
</head>

<body><nav class="navbar navbar-default">
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
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
              
</head> <form action="emp_update.php" method="post">
        
        <div class="form_group">
                        <label>Birth Date:</label>
                        <input class="form-control" type="text" name="birth_date" value="" required="required" />
                    </div>
                    <div class="form_group">
                        <label>First Name:</label>
                        <input class="form-control" type="text" name="firstname" value="" required="required" />
                    </div>
                    
                    <div class="form_group">
                        <label>Last Name:</label>
                        <input class="form-control" type="text" name="lastname" value="" required="required"/>
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
                        <input class="form-control" type="text" name="hiredate" value="" required="required"/>
                    </div>
                                
                      </select> <span class="help-block"></span>
                  </div>
                  
                    <div class="form_group">
                        <label>Department:</label>
                        <input class="form-control" type="text" name="depart" value="" required="required"/>
                    </div>
                    
                    
                    
                    <div class="form_group">
                        <label>Manager:</label>
                        <input class="form-control" type="text" name="manager" value="" required="required"/>
                    </div>
                    

                    <div class="form_group">
                        <label>Salary:</label>
                        <input class="form-control" type="text" name="salary" value="" required="required"/>

                    </div>
                    
                    
                    <br>
                    
                    

                    </div>
                </div>


        
        <div class="form-actions">
                    	<input type="hidden" name="emp_no" value=<?php echo $_GET['emp_no'];?> > 
						<input type="submit" class="btn btn-primary" name="update" value="Update">
                        <a class="btn btn btn-default" href="emp.php">Back</a>
                         </div>
                         
                       
      </form>


            </div>
        </div>
    </div>
      
</body>

</html>
