<?php
include("connection.php");
$id = $_GET['id'];
$sql="SELECT * FROM emp WHERE id =".$id;
$data=mysqli_query($conn,$sql);
if ( false==$data ) {
  printf("error: %s\n", mysqli_error($conn));
}
$rows=mysqli_fetch_array($data);

?>

<html>
<head>
<title>Edit Employee Details</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
 <link rel="stylesheet" href="assets/css/ilmudetil.css">

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head> 
<body> 
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

	<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update User</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form action="updateemployee.php" "method="post">
        
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?php echo $row['name']; ?>" type="text" name="Name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">dob</label>
          <input value="<?php echo $row['dob']; ?>" type="text" name="dob" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">gender</label>
          <input value="<?php echo $row['gender']; ?>" type="text" name="gender" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">department</label>
          <input value="<?php echo $row['department']; ?>" type="text" name="department" id="name" class="form-control">
        </div>
        
        
        <div class="form-group">
          <label for="name">hiring_date</label>
          <input value="<?php echo $row['hiring_date']; ?>" type="text" name="hiring_date" id="name" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="name">salary</label>
          <input value="<?php echo $row['salary']; ?>" type="text" name="salary" id="name" class="form-control">
        </div>
         <div class="form-group">
          <label for="name">hiring_date</label>
          <input value="<?php echo $row['department_manager']; ?>" type="text" name="department_manager" id="name" class="form-control">
        </div>
        
        <div class="form-actions">
                    	<input type="hidden" name="id" value=<?php echo $_GET['id'];?> > </td>
						<input type="submit" class="btn btn-primary" name="update" value="Update"></tr>
                        <a class="btn btn btn-default" href="index.php">Back</a>
                         </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>

