<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM emp");
?>

<div class="container">
 <div class ="row">
  <div class="col-md-9">
         
        <?php
if (mysqli_num_rows($result) > 0) {
?>
   <table class="table table-striped table-bordered table-hover">
   <tr>
     <th>Name</th>
     <th>DOB</th>
     <th>Gender</th>
     <th>Department</th>     
     <th>hiring_date</th>
      <th>salary</th>
     <th>Action</th>
    </tr>  
    <?php
       $i=0;
while($row = mysqli_fetch_array($result)) {
?>
         
  <tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["hiring_date"]; ?></td>
     <td><?php echo $row["salary"]; ?></td>
     <td>
      <a class="btn btn-xs btn-primary" href="update.php?id=<?php echo $index; ?>">Edit</a>
      <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $index; ?>">Delete</a>
     </td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>

         
     
       
 
