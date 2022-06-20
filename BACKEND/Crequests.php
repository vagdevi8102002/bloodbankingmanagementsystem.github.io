<?php
    require_once("connection.php");
    $query = "select * from requestblood";
    $result = mysqli_query($con,$query);
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta  name="viewport" content="width=device-width", initial-scale="1.0">
        <title>current requests</title>
        <link href="cr.css" rel="stylesheet" type="text/css">
      </head>
            <body>
            <div class="test">
            <div class="currentreq">
                <h1>CURRENT REQUESTS</h1>
            </div>
            <table >
              <tr>
              
                  <td><h2>Patient Name</h2></td>
                  <td><h2>Contact Name</h2></td>
                  <td><h2>Email id</h2></td>
                  <td><h2>Phone Number</h2></td>
                  <td><h2>Gender</h2></td>
                  <td><h2>City</h2></td>
                  <td><h2>Blood Group</h2></td>
                  <td><h2>Required Date</h2></td>
          
              </tr>
              </div>
              <?php
                while($rows=mysqli_fetch_assoc($result))
                {
              ?>
              <tr>
                    <td><?php echo $rows['PatientName']; ?></td>
                    <td><?php echo $rows['ContactName']; ?></td>
                    <td><?php echo $rows['Emailid']; ?></td>
                    <td><?php echo $rows['PhoneNumber']; ?></td>
                    <td><?php echo $rows['Gender']; ?></td>
                    <td><?php echo $rows['City']; ?></td>
                    <td><?php echo $rows['BloodGroup']; ?></td>
                    <td><?php echo $rows['RequiredDate']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
            </body>
    </html>
