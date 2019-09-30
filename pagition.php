<?php

include ("connection.php");
$query = mysqli_query($conn,"select *from emp");
?>

<html> 
  <head> 
     
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" 
     href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  </head> 
  <body> 
	  
	   <?php 
      
    // Import the file where we defined the connection to Database.   
    require_once "connection.php"; 
  
    $limit = 5;  // Number of entries to show in a page. 
    // Look for a GET variable page if not found default is 1.      
    if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };   
  
    $start_from = ($pn-1) * $limit;   
  
    $sql = "SELECT * FROM emp LIMIT $start_from, $limit";   
    $rs_result = mysql_query ($sql);  
  
  ?> 
  
  <div class="container"> 
    <br> 
    <div> 
      
      
      <table class="table table-striped table-condensed table-bordered"> 
        <thead> 
        <tr> 
          <th width="10%">Rank</th> 
          <th>Name</th> 
          <th>Dob</th> 
          <th>gender</th> 
          <th>department</th>
          <th>hiring_date</th>
          <th>salary</th>   
        </tr> 
        </thead> 
        <tbody> 
        <?php   
          while ($row = mysql_fetch_array($rs_result, MYSQL_ASSOC)) {  
                  // Display each field of the records.  
        ?>   
        <tr>   
          <td><?php echo $row["name"]; ?></td>   
          <td><?php echo $row["dob"]; ?></td> 
          <td><?php echo $row["gender"]; ?></td> 
          <td><?php echo $row["department"]; ?></td> 
          <td><?php echo $row["hiring_date"]; ?></td> 
          <td><?php echo $row["salary"]; ?></td>                                         
        </tr>   
        <?php   
        };   
        ?>   
        </tbody> 
      </table>
      
      <ul class="pagination"> 
      <?php   
        $sql = "SELECT COUNT(*) FROM emp";   
        $rs_result = mysql_query($sql);   
        $row = mysql_fetch_row($rs_result);   
        $total_records = $row[0];   
          
        // Number of pages required. 
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "emp.php";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
              $pagLink .= "<li class='active'><a href='index.php?page="
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
    </div> 
  </div> 
  </body> 
  </html>
