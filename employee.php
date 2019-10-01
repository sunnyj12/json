 <?php 
 include("connection1.php");
                    $records=mysqli_query($conn,"SELECT * FROM departments");
                    ?>
                      
 <!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
	<?php
	 
	include("header.php");
	 
	?>
	
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   JSON CRUD</a>
  </div>
 
 </div>
</nav>
</br></br></br></br>

<div class="container">

            <h2 class="text-center text-primary my-5">Employee Data</h2>
            <form action="create.php" method="post">
                <div class="container" style="width:50%  ">

                    <div class="form_group">
                        <label>Birth Date:</label>
                        <input class="form-control" type="date" name="birth_date" value="" required="required" />
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
                        <input class="form-control" type="date" name="hiredate" value="" required="required"/>
                    </div>
                                
                      </select> <span class="help-block"></span>
                  </div>
                  
                    
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
                    

                    <div class="form_group">
                        <label>Salary:</label>
                        <input class="form-control" type="text" name="salary" value="" required="required"/>

                    </div>
                    
                    
                    <br>
                    
                    <div class="form_group">
                        <input class="form-control btn btn-success my-5" type="submit" name="Submit" value="Submit">

                    </div>
                </div>
                
                <br>
            </form>
            </div>
            <?php
           header('location:emp.php');
            ?>
        </body>

        </html>


