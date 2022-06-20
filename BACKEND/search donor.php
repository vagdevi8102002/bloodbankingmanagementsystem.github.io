<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="search.css">
    <link rel="icon" href="favicon.ico">
    <title>Search Donor</title>
  </head>
  <body>
    <div class="search_donor">
      <h3>Who can give blood</h3>
      <div class="search_btn">
      <a href="blood bank.php"><span></span>Blood Bank</a>
      </div>
    </div>
    <div class="main">
        <div class="register">
        <form id="register" method="GET" action="">
        <div class="doner_text">
        <label>City </label>
	<input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="donor-text" placeholder="Enter City">
 </div>
                <div class="sub">
                    <id="container">
                    <input type="submit" onclick="openPopup()" value="Search"
                    name="submit" id="submit" class="btn">
                </div>
        </form>
        </div>
    </div>
    <br><br>
            <div class="data">
            <div class="col-md-12">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Donor Name</th>
                                                <th>Blood Group</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Contact Number</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                require_once("connection.php");
                                                if(isset($_GET['search']))
                                                {
                                                    $filtervalues = $_GET['search'];
                                                    $query = "SELECT * FROM becomedonor WHERE City LIKE '%$filtervalues%' ";
                                                    $query_run = mysqli_query($con, $query);

                                                    if(mysqli_num_rows($query_run) > 0)
                                                    {
                                                        foreach($query_run as $items)
                                                        {
                                                            ?>
                                                            <tr>
                                                                <td><?= $items['DonorName']; ?></td>
                                                                <td><?= $items['BloodGroup']; ?></td>
                                                                <td><?= $items['City']; ?></td>
                                                                <td><?= $items['State']; ?></td>
                                                                <td><?= $items['Contactnumber']; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <tr>
                                                                <td colspan="4">No Record Found</td>
                                                            </tr>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>



  </body>
</html>
