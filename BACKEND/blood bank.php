<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bloodbank.css">
    <link rel="icon" href="favicon.ico">


    </script>
    <title>Blood bank</title>
  </head>
  <body>
    <div class="search_donor">
      <h3>Blood bank</h3>
    </div>
    <div class="main">
        <div class="register">
        <form id="register" method="GET" action="">
        <div class="doner_text">
                <label>State </label>

              <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter State">
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
    <div class="col-md-12">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Blood bank Number</th>
                                                <th>Address</th>
                                                <th>State</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require_once("connection.php");
                                                if(isset($_GET['search']))
                                                {
                                                    $filtervalues = $_GET['search'];
                                                    $query = "SELECT * FROM bloodbankdb_open_doc WHERE State LIKE '%$filtervalues%' ";
                                                    $query_run = mysqli_query($con, $query);

                                                    if(mysqli_num_rows($query_run) > 0)
                                                    {
                                                        foreach($query_run as $items)
                                                        {
                                                            ?>
                                                            <tr>
                                                                <td><?= $items['bbnumber']; ?></td>
                                                                <td><?= $items['Address']; ?></td>
                                                                <td><?= $items['State']; ?></td>
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
