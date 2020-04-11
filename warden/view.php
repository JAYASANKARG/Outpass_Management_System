<?php
require('../database/database.php');
	session_start();
	if(!isset($_SESSION['warden']))
	{
		header('Location: ..');
	}
	$query = 'SELECT * FROM student_details
              ORDER BY register_number';
	$student = $db->query($query);
	
	

?>

<html>
<header>
<link rel="stylesheet" type="text/css" href="../css/dash.css">
<script src="../js/dash.js"></script>
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</header>

<body>
  <div class="">
    <header class="navbar-fixed-top">
      <div class="row">
        <div class="container-fluid">
          <div class="pull-left">
            <div class="pull-left logo text-center">
				<a href="index.php" style="text-decoration:none;"><span> <?php $user=$_SESSION['warden'];
					echo $user ?><span></a>
            </div>
          </div>
          <div class="pull-right">
            <div class="marr20">
              <ul class="nav navbar-top-links navbar-right">
                
               
                <li class="dropdown user">
                  <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class=
                  "fa fa-user fa-fw"></i> </a>
                  <ul class="dropdown-menu dropdown-user">
                    <li>
                      <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="../database/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                  </ul><!-- /.dropdown-user -->
                </li><!-- /.dropdown -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <br>
   
	
		  

          <div class="col-sm-12">
		  <div class="page-title-box">
            <a href="index.php"><h3 class="page-title pull-left">Home \ student details</h3></a>
            
            <div class="clearfix"></div>
          </div>

            <div class="panel panel-success">
              <div class="panel-heading">
				<i class="fa fa-table fa-fw"></i> Table student Details
				<div class="pull-right">
					<a href="add_student.php">Add Student</a>
				</div>
              </div>
              <div class="table-responsive">
                <table class="table table-striped" id="example">
                  <tr>
				  	        <th></th>
                    <th></th>
                    <th>Register Number</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Phone Number</th>
                    <th>Parent Name</th>
                    <th>Parent Number</th>
                    <th>Hostel name</th>
                    <th>Room Number</th>
					
				  </tr>
				  <?php foreach ($student as $one) : $r=$one["register_number"]?>
					
                  <tr >
				  <td>
				  <form action="update_student.php" method="POST" target="_blank">
					<input type="hidden" value="<?php echo $one["register_number"] ?>" name="number" >

					<button type="submit" class="btn btn-primary" name="edit">Edit</button>
					</form>
					</td>
          <td><img src="../uploads/<?php echo $one["s_image"];?>" height="100" width="100" /> </td>

          

            

          <td><?php echo $one["register_number"] ?></td>
          <td><?php echo $one["student_name"]?></td>
          <td><?php echo $one["email"]?></td>
					<td><?php echo $one["department"]?></td>
					<td><?php echo $one["phone_number"]?></td>
					<td><?php echo $one["parent_name"]?></td>
					<td><?php echo $one["parent_number"]?></td>
					<td><?php echo $one["hostel_name"]?></td>
					<td><?php echo $one["room_number"]?></td>
					
                  </tr>
				  
                  <?php endforeach; ?>
                </table>
                
              </div>
              
            </div>
            
          </div>