<?php include_once 'connection1.php'; ?>
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
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class=""><a href="index.php">Home</a></li>
    
     <li class="clr1 active"><a href="emp.php">Employee</a></li>
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to Employee Page</h3>      
  <p>All Employee List Show below</p>      
 </div>
</div>
<div class="container">
 <div class="btn-toolbar"> 
  <a class="btn btn-primary" href="employee.php"><i class="icon-plus"></i> Add New Employee</a>
  <div class="btn-group"> </div>
  
 </div>
</div>

<br>
<br>


<?php

// pagination code
$limit =05;
  if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };  
    
    $start_from = ($pn-1) * $limit;   
  
    $sql = "SELECT * FROM emp_table LEFT JOIN salaries ON emp_table.emp_no = salaries.emp_no JOIN dept_manager ON emp_table.emp_no=dept_manager.emp_no JOIN departments ON dept_manager.dept_no=departments.dept_no" ;     
    $rs_result = mysqli_query ($conn,$sql);  
    
  //~ ORDER BY emp_no DESC

//show data 
?>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
	  <?php
if (mysqli_num_rows($rs_result) > 0) 
?>
   <table class="table table-striped table-bordered table-hover">
   <tr>
     <th>Birth Date</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Gender</th>
     <th>Hire Date</th>
     <th>Department</th>
     <th>Manager</th>   
     <th>Salary</th>
     <th>Action</th>
    </tr>  
    <?php
while($row = mysqli_fetch_array($rs_result)) {
?>
	<tr>
    <td><?php echo $row["birth_date"]; ?></td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["hiredate"]; ?></td>
    <td><?php echo $row["dept_name"]; ?></td>
    <td><?php echo $row["manager"]; ?></td>
     <td><?php echo $row["salary"]; ?></td>
   
     <td>
      <a class="btn btn-xs btn-primary" href="emp_update.php?emp_no=<?php echo $row['emp_no']; ?>">Edit</a>
      <a class="btn btn-xs btn-danger" href="emp_delete.php?emp_no=<?php echo $row['emp_no']; ?>">Delete</a>
     </td>
</tr>
<?php
}
?>
</table>
<ul class="pagination"> 
      <?php   
        $sql = "SELECT COUNT(*) FROM emp_table";   
        $rs_result = mysqli_query($conn,$sql);   
        $row = mysqli_fetch_row($rs_result);   
        $total_records = $row[0];   
          
        // Number of pages required. 
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
              $pagLink .= "<li class='active'><a href='emp.php?page="
                                                .$i."'>".$i."</a></li>"; 
          }             
          else  { 
              $pagLink .= "<li><a href='emp.php?page=".$i."'> 
                                                ".$i."</a></li>";   
          } 
        };   
        echo $pagLink;   
      ?> 
      </ul> 

 </body>
</html>


