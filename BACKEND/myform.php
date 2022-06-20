<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database_name="test2";

    $conn = mysqli_connect($server, $username, $password, $database_name);

//check for connection
    if(!$conn){
        die("Connection to the database failed due to ".mysqli_connect_error());
    }

  #  if(isset($_POST['submit']))
  #  {
      echo $_POST['Emailid'];
    
    $DonorName = $_POST['DonorName'];
    $Dateofbirth = $_POST['Dateofbirth'];
    $BloodGroup = $_POST['BloodGroup'];
    $Address = $_POST['Address'];
    $Contactnumber = $_POST['Contactnumber'];
    $Emailid = $_POST['Emailid'];
    $Gender = $_POST['Gender'];
    $City = $_POST['City'];
    $State = $_POST['State'];

    $sql = "INSERT INTO becomedonor(DonorName, Dateofbirth, BloodGroup, Address, Contactnumber,
    Emailid, Gender, City, State, dt) VALUES ('$DonorName', '$Dateofbirth', '$BloodGroup', '$Address', '$Contactnumber', '$Emailid',
    '$Gender','$City','$State', current_timestamp());";

    $conn->query($sql);
    #$conn->close();
  #}
?>
