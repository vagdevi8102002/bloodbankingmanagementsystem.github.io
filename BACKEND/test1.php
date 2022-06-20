<?php



include 'connect.php';
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if (isset($_POST['c_id'])) {
    $x=$_POST['c_id'];
  $qry = "select emp_id ,emp_name from ait__fac where dept_id=$x";
  $res = $con->query($qry);
 
    while($row=$res->fetch_assoc()) {
      echo "<option  value=".$row['emp_id'].">"  .$row['emp_id']."-- ".$row['emp_name']."</option>";
    }
    }
  
  
 
?>