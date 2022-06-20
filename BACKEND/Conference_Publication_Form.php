<?php
session_start();

if (!isset($_SESSION['department'])) {
    header('location:login.php');
}

//DB connection
/*
$HOSTNAME = "sg2nlmysql51plsk.secureserver.net:3306";
$USERNAME = "cu_ait_pub_data";
$PASSWORD = "cu_ait_pub_data";
$DATABASE = "ph17058914977_";
$con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
*/
// Check connection
include 'connect.php';
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$s = "select * from ait__fac";
$rs = $con->query($s);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        li {
            list-style: none;
            color: black;
        }
    </style>
    <title>Publication</title>
	<script>
	window.oncontextmenu = function () {
				return false;
			}
			$(document).keydown(function (event) {
				if (event.keyCode == 123) {
					return false;
				}
				else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
					return false;
				}
			});
		</script>
     <script>
        function test1() {
          
             var e2= document.getElementById("emp_id2").value.length;
			 var d2= document.getElementById("dept2").value.length;
			 var e3= document.getElementById("emp_id3").value.length;
			 var d3= document.getElementById("dept3").value.length;
			 var e4= document.getElementById("emp_id4").value.length;
			 var d4= document.getElementById("dept4").value.length;
			 var e5= document.getElementById("emp_id5").value.length;
			 var d5= document.getElementById("dept5").value.length;
			  var y = document.getElementsByName("year")[0].value;
              if(e2!=0)
			 {
				 if(d2!=0)
				 {
					 if(e3!=0)
					{
						if(d3!=0)
							{
							if(e4!=0)
					        {
						    if(d4!=0)
							{
							
							if(e5!=0)
					        {
						    if(d5!=0)
							{
							if (y.length == 4) {
                
						return true;
				
							} 
							else {
							alert("length of year must be 4");
								return false;
							}
						    }
							else
							{
					        alert("enter 5th Author Department Name");
					        return false;
							}
					        }
					       else
					       {if (y.length == 4) {
                
						return true;
				
							} 
							else {
							alert("length of year must be 4");
								return false;
							}}
							
						    }
							else
							{
					        alert("enter 4th Author Department Name");
					        return false;
							}
					        }
					       else
					       {if (y.length == 4) {
                
						return true;
				
							} 
							else {
							alert("length of year must be 4");
								return false;
							}}
							
							
							
							
						    }
							else
							{
					        alert("enter 3rd Author Department Name");
					        return false;
							}
					}
					else
					{if (y.length == 4) {
                
						return true;
				
							} 
							else {
							alert("length of year must be 4");
								return false;
							}}
				 }
				 else
				 {
					 alert("enter 2nd Author Department Name");
					 return false;
				 }
			 }
			 else 			
			 {if (y.length == 4) {
                
						return true;
				
							} 
							else {
							alert("length of year must be 4");
								return false;
							}}
        
		
		
		
		
		}
    </script>



</head>

<body>
    <?php
    include('header.php');
    $dn = $_REQUEST['dn'];

    ?>

    <?php include "nav1.php"; ?>


    <div class="container" style="margin-top: 80px;">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-9">
                <div class="form-group">
                    <div class="text-success">
                        <?php
                        if (isset($_SESSION['msg2'])) {
                            echo $_SESSION['msg2'];
                            unset($_SESSION['msg2']);
                        }
                        ?>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-body" style="background-color: #E5E8E8;">
                        <div class="card-body">
                            <h4 class="mb-5">Add New Conference Publication</h4>
                            <label class="text-danger">* fields are mandatory.</label>
                            <hr class="bg-dark"><br>
                            <form action="Conference_Publication_Form_save.php?dn=<?php echo $_REQUEST["dn"]; ?>" method="POST" onsubmit="return test1()" enctype="multipart/form-data">


<!--------------------------------------------------------FIRST AUTHOR---------------------------------------------------------------------->
                                <div class="form-group">

                                    <div class="form-row row">
                                        <div class="col-12 form-group">

                                            <label>Author's Name* <label style="color:blue"> (e.g Rahul Rastogi, Anish Gupta, Nitika Raghawa)</label></label>
                                            <div class="author-name1-wrapper">
                                                <input type="text" class="form-control mb-2" placeholder="Author's Name" required name="author1">
                                            </div>
                                        </div>




                                    </div>


                                    <div class="form-group">
									    <label style="color:blue"> Author's Details*</label><br>
                                        <label style="color:blue">Author -1&nbsp; Details*</label>
                                         
                                        <div class="form-row row">
                                          
                                            <div class="col-3 form-group">
                                               <label>Department  <br>Name*</label>
                                                <div class="faculty-id-wrapper">
                                                <select class="form-control" name="dept[]"  id="dept"  placeholder="Enter Department Name" required>
                                                    
                                                    <option>Select</option>
                                                    <?php $s = "select * from dept order by dept_id";
                                                    
                                                    $rs = $con->query($s);
                                                    while ($rw = $rs->fetch_assoc()) { ?>
                                                        <option value="<?php echo $rw['dept_id']; ?>"><?php echo $rw['dept_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                           

                                                </div>
                                            </div><br>
										  
                                              <div class="col-4 form-group">
											  <label>Employee UID *</label>
											  <div class="faculty-name-wrapper">
											  <br>
                                              <select class="form-control" name="new_select[]" id="new_select" >
                                                        
                                                        <option>Select</option>
                                                    
                                                    </select>
											 </div>
											 </div>
											  <div class="col-3 form-group">
                                                <label>Position*</label>
                                                <div class="department-name-wrapper">

                                                   
											  
											 <label id="l1" class="text-primary"></label>
											 <select class="form-control" name="pos[]" required id="pos" placeholder="Enter position">
											    
                                             <option value="1">1</option>
												 <option value="2">2</option>
												 <option value="3">3</option>
												 <option value="4">4</option>
												 <option value="5">5</option>
                                                 <option value="6">6</option>
												 <option value="7">7</option>
												 <option value="8">8</option>
												 <option value="9">9</option>
												 <option value="10">10</option>
											 
											 </select>
                                                </div>
                                            </div>
											
											
                                            
                                        </div>
                                    </div>

            <!--------------------------------------------------------SECOND AUTHOR---------------------------------------------------------------------->

                                    <div class="form-group">
									
                                        <label style="color:blue">Author -2&nbsp; Details</label>
                                         
                                        <div class="form-row row">
                                          
                                            <div class="col-3 form-group">
                                               <label>Department  <br>Name </label>
                                                <div class="faculty-id-wrapper">
                                                <select class="form-control" name="dept[]"  id="dept1"  placeholder="Enter Department Name" required>
                                                 
                                                <option>Select</option>
                                                  
                                                    <?php $s = "select * from dept order by dept_id";
                                                    
                                                    $rs = $con->query($s);
                                                    while ($rw = $rs->fetch_assoc()) { ?>
                                                        <option value="<?php echo $rw['dept_id']; ?>"><?php echo $rw['dept_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                           

                                                </div>
                                            </div><br>
										  
                                              <div class="col-4 form-group">
											  <label>Employee UID </label>
											  <div class="faculty-name-wrapper">
											  <br>
                                              <select class="form-control" name="new_select[]" id="new_select1" >
                                                        <option>Select</option>
                                                    </select>
											 </div>
											 </div>
											  <div class="col-3 form-group">
                                                <label>Position</label>
                                                <div class="department-name-wrapper">

                                                   
											  
											 <label id="l1" class="text-primary"></label>
											 <select class="form-control" name="pos[]" required id="pos1" placeholder="Enter position">
											    
												
                                             <option value="1">1</option>
												 <option value="2">2</option>
												 <option value="3">3</option>
												 <option value="4">4</option>
												 <option value="5">5</option>
                                                 <option value="6">6</option>
												 <option value="7">7</option>
												 <option value="8">8</option>
												 <option value="9">9</option>
												 <option value="10">10</option>
												 
											 
											 </select>
                                                </div>
                                            </div>
											
											
                                            
                                        </div>
                                    </div>
                                        


<!-------------------------------------------------------THIRD AUTHOR---------------------------------------------------------------------->
                                    <div class="form-group">
									
                                        <label style="color:blue">Author -3&nbsp; Details</label>
                                         
                                        <div class="form-row row">
                                          
                                            <div class="col-3 form-group">
                                               <label>Department  <br>Name </label>
                                                <div class="faculty-id-wrapper">
                                                    <select class="form-control" name="dept[]"  id="dept2"  placeholder="Enter Department Name" required>
                                                    
                                                        <option>Select</option>
                                                        <?php $s = "select * from dept order by dept_id";
                                                    
                                                        $rs = $con->query($s);
                                                        while ($rw = $rs->fetch_assoc()) { ?>
                                                        <option value="<?php echo $rw['dept_id']; ?>"><?php echo $rw['dept_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                           

                                                </div>
                                            </div><br>
										  
                                              <div class="col-4 form-group">
											        <label>Employee UID </label>
											        <div class="faculty-name-wrapper">
											            <br>
                                                            <select class="form-control" name="new_select[]" id="new_select2" >
                                                                <option>Select</option>
                                                             </select>
											        </div>
											    </div>
											    <div class="col-3 form-group">
                                                        <label>Position</label>
                                                    <div class="department-name-wrapper">

                                                   
											  
											                <label id="l1" class="text-primary"></label>
											                    <select class="form-control" name="pos[]" required id="pos2" placeholder="Enter position">
											    
												
											
                                                                <option value="1">1</option>
												 <option value="2">2</option>
												 <option value="3">3</option>
												 <option value="4">4</option>
												 <option value="5">5</option>
                                                 <option value="6">6</option>
												 <option value="7">7</option>
												 <option value="8">8</option>
												 <option value="9">9</option>
												 <option value="10">10</option>
												 
											 
											                    </select>
                                                     </div>
                                                </div>
											
											
                                        </div>
                                    </div>
                                            
<!--------------------------------------------------------FOURTH AUTHOR---------------------------------------------------------------------->

                                <div class="form-group">	
                                        <label style="color:blue">Author -4&nbsp; Details</label>
                                         
                                    <div class="form-row row">
                                          
                                        <div class="col-3 form-group">
                                               <label>Department  <br>Name </label>
                                                <div class="faculty-id-wrapper">
                                                        <select class="form-control" name="dept[]"  id="dept3"  placeholder="Enter Department Name" required>
                                                    
                                                            <option>Select</option>
                                                            <?php $s = "select * from dept order by dept_id";
                                                    
                                                            $rs = $con->query($s);
                                                            while ($rw = $rs->fetch_assoc()) { ?>
                                                            <option value="<?php echo $rw['dept_id']; ?>"><?php echo $rw['dept_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                           

                                                </div>
                                            </div><br>
										  
                                              <div class="col-4 form-group">
											     <label>Employee UID </label>
											     <div class="faculty-name-wrapper">
											        <br>
                                                    <select class="form-control" name="new_select[]" id="new_select3" >
                                                        <option>Select</option>
                                                    </select>
											    </div>
											 </div>
											    <div class="col-3 form-group">
                                                    <label>Position</label>
                                                    <div class="department-name-wrapper">

                                                   
											  
											            <label id="l1" class="text-primary"></label>
											            <select class="form-control" name="pos[]" required id="pos3" placeholder="Enter position">
											    
												
												
                                                        <option value="1">1</option>
												 <option value="2">2</option>
												 <option value="3">3</option>
												 <option value="4">4</option>
												 <option value="5">5</option>
                                                 <option value="6">6</option>
												 <option value="7">7</option>
												 <option value="8">8</option>
												 <option value="9">9</option>
												 <option value="10">10</option>
												 
											 
											            </select>
                                                     </div>
                                                </div>
											
											
                                        </div>
                                    
<!--------------------------------------------------------FIFTH AUTHOR---------------------------------------------------------------------->

                                    <div class="form-group">
									
                                        <label style="color:blue">Author -5&nbsp; Details</label>
                                         
                                        <div class="form-row row">
                                          
                                            <div class="col-3 form-group">
                                               <label>Department  <br>Name </label>
                                                <div class="faculty-id-wrapper">
                                                    <select class="form-control" name="dept[]"  id="dept4"  placeholder="Enter Department Name" required>
                                                    
                                                        <option>Select</option>
                                                        <?php $s = "select * from dept order by dept_id";
                                                    
                                                         $rs = $con->query($s);
                                                            while ($rw = $rs->fetch_assoc()) { ?>
                                                        <option value="<?php echo $rw['dept_id']; ?>"><?php echo $rw['dept_name']; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                           

                                                </div>
                                            </div><br>
										  
                                              <div class="col-4 form-group">
											        <label>Employee UID </label>
											        <div class="faculty-name-wrapper">
											            <br>
                                                        <select class="form-control" name="new_select[]" id="new_select4" >
                                                            <option>Select</option>
                                                        </select>
											        </div>
											    </div>

											  <div class="col-3 form-group">
                                                    <label>Position</label>
                                                    <div class="department-name-wrapper">

                                                   
											  
											                <label id="l1" class="text-primary"></label>
											                 <select class="form-control" name="pos[]" required id="pos4" placeholder="Enter position">
											    
												
												
                                                             <option value="1">1</option>
												 <option value="2">2</option>
												 <option value="3">3</option>
												 <option value="4">4</option>
												 <option value="5">5</option>
                                                 <option value="6">6</option>
												 <option value="7">7</option>
												 <option value="8">8</option>
												 <option value="9">9</option>
												 <option value="10">10</option>
											 
											                </select>
                                                    </div>
                                                </div>
											
											
                                        </div>
                                    

                                    
                 <!-- <a href="javascript:void(0)" class="btn btn-primary" id="addMoreApplicantBtn" style="font-weight:200">Add More Author</a>-->
                                    
                                    <div class="form-row">
                                        <div class="col-4 form-group">
                                            <div class="a">
                                            </div>
                                        </div>
                                        <div class="col-4 form-group">
                                            <div class="b">
                                            </div>
                                        </div>
                                        <div class="col-4 form-group">
                                            <div class="c">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label>Title of Paper*</label>
                                        <input type="text" class="form-control" name="title" required id="title" placeholder="Enter Title of Paper">
                                    </div>

                                    <div class="form-group">
                                        <label>Article URL*</label>
                                        <input type="text" class="form-control" name="url" required id="url" placeholder="Enter URL">
                                    </div>

                                    <div class="form-row">
                                        <div class="col-6 form-group">
                                            <label>Year*</label>
                                            <input type="number" class="form-control" name="year" required id="year" placeholder="Enter Year">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label>Conference Number</label>
                                            <input type="number" class="form-control" name="C_no" id="C_no" placeholder="Enter Conference Number">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-6 form-group">
                                            <label>Conference Name*</label>
                                            <input type="text" class="form-control" name="C_name" required id="C_name" placeholder="Enter Conference Name">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label>Conference Period*</label>
                                            <input type="text" class="form-control" name="C_period" required id="C_period" placeholder="Enter Conference Period">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Conference Location*</label>
                                        <input type="text" class="form-control" name="C_location" required id="C_location" placeholder="Enter Conference Location">
                                    </div>

                                    <div class="form-group">
                                        <label>Volume</label>
                                        <input type="text" class="form-control" name="volume" id="volume" placeholder="Enter Volume">
                                    </div>

                                    <div class="form-group">
                                        <label>Issue</label>
                                        <input type="number" class="form-control" name="issue" id="issue" placeholder="Enter Issue">
                                    </div>

                                    <div class="form-row">
                                        <div class="col-6 form-group">
                                            <label>Pages From*</label>
                                            <input type="number" class="form-control" name="PF" required id="PF">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label>Pages To*</label>
                                            <input type="number" class="form-control" name="PT" required id="PT">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Publisher*</label>
                                        <input type="text" class="form-control" name="publisher" required id="publisher" placeholder="Enter Publisher Name">
                                    </div>

                                    <div class="form-group">
                                        <label>DOI</label>
                                        <input type="text" class="form-control" name="doi" id="doi" placeholder="Enter DOI">
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="col-md-12 form-row">
                                            <div class="col-md-6 form-group">
                                                <label>Scopus Index* : </label>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="scopus" required value="Yes">
                                                    <label class="form-check-label">Yes</label>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="scopus" required value="No">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 form-row">
                                            <div class="col-md-6 form-group">
                                                <label>Web of Science* : </label>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="sci" required value="Yes">
                                                    <label class="form-check-label">Yes</label>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="sci" required value="No">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <label for="photo" style="color:red">Upload First Cover Page(file must be in image/pdf size up to 200 kb)</label>
                                                <input type="file" class="container-fluid form-control-file" id="photo" name="image" accept=".png, .gif, .bmp, .webp, .jpeg, .jfif" required="require">
                                            </div>
                                        </div>
                                    </div>
                                    <br>




                                    <button type="submit" name="submit2" class="btn btn-primary btn-block">Add New
                                        Conference Publication</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:40px">
        <?php include("footer.php"); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script>
          $(document).ready(function() {
      
        $("#dept").on("change", function(e){
      var dept_id = $(this).val();
     
      if(dept_id != "") {
        $.ajax({
          url:"test1.php",
          data:{c_id:dept_id},
          type:'POST',
          success:function(response) {
            var resp = $.trim(response);
            $("#new_select").html(resp);
           // alert('hello' +response);
          }
        });
      } else {
        $("#new_select").html("<option value=''>------- Select --------</option>");
      }
    });
  });
        </script>

<script>
          $(document).ready(function() {
      
        $("#dept1").on("change", function(e){
      var dept_id = $(this).val();
      //alert('hello');
   
      if(dept_id != "") {
        $.ajax({
          url:"test1.php",
          data:{c_id:dept_id},
          type:'POST',
          success:function(response) {
            var resp = $.trim(response);
            $("#new_select1").html(resp);
           // alert('hello' +response);
          }
        });
      } else {
        $("#new_select1").html("<option value=''>------- Select --------</option>");
      }
    });
  });
        </script>
        <script>
          $(document).ready(function() {
      
        $("#dept2").on("change", function(e){
      var dept_id = $(this).val();
      //alert(dept_id);
      if(dept_id != "") {
        $.ajax({
          url:"test1.php",
          data:{c_id:dept_id},
          type:'POST',
          success:function(response) {
            var resp = $.trim(response);
            $("#new_select2").html(resp);
           // alert('hello' +response);
          }
        });
      } else {
        $("#new_select2").html("<option value=''>------- Select --------</option>");
      }
    });
  });
        </script>
        <script>
          $(document).ready(function() {
      
        $("#dept3").on("change", function(e){
      var dept_id = $(this).val();
     // alert(dept_id);
      if(dept_id != "") {
        $.ajax({
          url:"test1.php",
          data:{c_id:dept_id},
          type:'POST',
          success:function(response) {
            var resp = $.trim(response);
            $("#new_select3").html(resp);
           // alert('hello' +response);
          }
        });
      } else {
        $("#new_select3").html("<option value=''>------- Select --------</option>");
      }
    });
  });
        </script>
        <script>
          $(document).ready(function() {
      
        $("#dept4").on("change", function(e){
      var dept_id = $(this).val();
     // alert(dept_id);
      if(dept_id != "") {
        $.ajax({
          url:"test1.php",
          data:{c_id:dept_id},
          type:'POST',
          success:function(response) {
            var resp = $.trim(response);
            $("#new_select4").html(resp);
           // alert('hello' +response);
          }
        });
      } else {
        $("#new_select4").html("<option value=''>------- Select --------</option>");
      }
    });
  });
        </script>
      <!--  <script>
          $(document).ready(function() {
      
        $("#dept5").on("change", function(e){
      var dept_id = $(this).val();
     // alert(dept_id);
      if(dept_id != "") {
        $.ajax({
          url:"test1.php",
          data:{c_id:dept_id},
          type:'POST',
          success:function(response) {
            var resp = $.trim(response);
            $("#new_select5").html(resp);
           // alert('hello' +response);
          }
        });
      } else {
        $("#new_select5").html("<option value=''>------- Select --------</option>");
      }
    });
  });
        </script>-->
    <script>
        $(document).ready(function() {
            $("#addMoreApplicantBtn").click(function() {
                $('.a').append(
                    "<input type='text' class='form-control mb-2' placeholder='Enter Employee Code''>"
                );
            })
            console.log("ready!");
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#addMoreApplicantBtn").click(function() {
                $('.b').append(
                    "<input type='number' class='form-control mb-2' placeholder='Enter Employee Name''>"
                );
            })
            console.log("ready!");
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#addMoreApplicantBtn").click(function() {
                $('.c').append(
                    "<input type='text' class='form-control mb-2' placeholder='Enter Department Name''>"
                );
            })
            console.log("ready!");
        });
    </script>

<script>
   $(document).ready(function(){
	$("#emp_id1").on("change", function(e){
		var x= document.getElementById("emp_id1").value;
		$.ajax({
			url: "test.php",
            method:"POST",
            data:{data:x},			
			success: function(result){
   var l1= document.getElementById("l1");
	    l1.innerHTML=result;
  }});
	});
	
});
   </script>
    <script>
   $(document).ready(function(){
	$("#emp_id2").on("change", function(e){
		var x= document.getElementById("emp_id2").value;
		$.ajax({
			url: "test.php",
            method:"POST",
            data:{data:x},			
			success: function(result){
   var l2= document.getElementById("l2");
	    l2.innerHTML=result;
  }});
	});
	
});
   </script>
    <script>
   $(document).ready(function(){
	$("#emp_id3").on("change", function(e){
		var x= document.getElementById("emp_id3").value;
		$.ajax({
			url: "test.php",
            method:"POST",
            data:{data:x},			
			success: function(result){
   var l3= document.getElementById("l3");
	    l3.innerHTML=result;
  }});
	});
	
});
   </script>
    <script>
   $(document).ready(function(){
	$("#emp_id4").on("change", function(e){
		var x= document.getElementById("emp_id4").value;
		$.ajax({
			url: "test.php",
            method:"POST",
            data:{data:x},			
			success: function(result){
   var l4= document.getElementById("l4");
	    l4.innerHTML=result;
  }});
	});
	
});
   </script>
    <script>
   $(document).ready(function(){
	$("#emp_id5").on("change", function(e){
		var x= document.getElementById("emp_id5").value;
		$.ajax({
			url: "test.php",
            method:"POST",
            data:{data:x},			
			success: function(result){
   var l5= document.getElementById("l5");
	    l5.innerHTML=result;
  }});
	});
	
});
   </script>

</body>

</html>