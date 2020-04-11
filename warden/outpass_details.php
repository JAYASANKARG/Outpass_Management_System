<?php
require('../database/database.php');
	session_start();
	if(!isset($_SESSION['warden']))
	{
		header('Location: ..');
	}
	$u_email=$_POST['number'];
	$query = "SELECT * FROM outpass where outpass_number='$u_email'";
    $s_data = $db->query($query);
	$s_data = $s_data->fetch();
	$re=$s_data["register_number"];
	$query = "SELECT * FROM student_details where register_number='$re'";
    $s_data1 = $db->query($query);
    $s_data1 = $s_data1->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Out Pass Details	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>


<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="../database/apply.php" method="POST">
				<span class="contact100-form-title">
					Outpass Details
				</span>
				<div>
					<img src="../uploads/<?php echo $s_data1["s_image"];?>" alt="image" readonly  class="center">
				</div><br>
				<div class="wrap-input100">
					<span class="label-input100">Outpass Number</span>
					<input class="input100" type="text" name="name" value="<?php echo $s_data["outpass_number"] ?>" placeholder="Enter your name" readonly>
					<span class="focus-input100"></span>
				</div>
                
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"><b>Register Number</b></span>
					<input class="input100" type="text" name="register_number" value="<?php echo $s_data["register_number"] ?>" placeholder="Enter your register number" readonly>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Student Name</span>
					<input class="input100" type="text" name="name" value="<?php echo $s_data1["student_name"] ?>" placeholder="Enter your name" readonly>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" >
					<span class="label-input100">Department</span>
					<input class="input100" type="text" name="department" value="<?php echo $s_data1["department"] ?>" placeholder="Enter your department" readonly>
					<span class="focus-input100"></span>
				</div>
        
                
                <div class="wrap-input100 validate-input">
					<span class="label-input100">Phone Number</span>
					<input class="input100" type="number" name="sphone" value="<?php echo $s_data1["phone_number"] ?>" placeholder="Enter your phone number" readonly>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="semail" value="<?php echo $s_data1["email"] ?>" placeholder="Enter your parent name" readonly>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" >
					<span class="label-input100">Parent Name</span>
					<input class="input100" type="text" name="pname" value="<?php echo $s_data1["parent_name"] ?>" placeholder="Enter your parent name" readonly>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input">
					<span class="label-input100">Parent Number</span>
					<input class="input100" type="number" name="pphone" value="<?php echo $s_data1["parent_number"] ?>" placeholder="Enter your parent number" readonly>
					<span class="focus-input100"></span>
				</div>

				        
                <div class="wrap-input100 validate-input" >
					<span class="label-input100">Hostel Name</span>
					<input class="input100" type="text" name="hostel" value="<?php echo $s_data1["hostel_name"] ?>" placeholder="Enter your hostel name" readonly>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input">
					<span class="label-input100">Room Number</span>
					<input class="input100" type="number" name="roomn" value="<?php echo $s_data1["room_number"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Outpass Type</span>
					<input class="input100" type="text" name="roomn" value="<?php echo $s_data["outpass_type"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>
				
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Place of Visit</span>
					<input class="input100" type="text" name="roomn" value="<?php echo $s_data["place"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>



                <div class="wrap-input100 input100-select">
					<span class="label-input100">Travel Type</span>
					<div>
                    <input class="input100" type="text" name="roomn" value="<?php echo $s_data["travel_type"] ?>" placeholder="Enter your room number" readonly>
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>  
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">out time</span>
					<input class="input100" type="text" name="roomn" value="<?php echo $s_data["out_time"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">out date</span>
					<input class="input100" type="text" name="roomn" value="<?php echo $s_data["out_date"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">In time</span>
					<input class="input100" type="text" name="roomn" value="<?php echo $s_data["in_time"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">In date</span>
					<input class="input100" type="text" name="roomn" value="<?php echo $s_data["in_date"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Reason</span>
					<input class="input100" type="text" name="roomn" value="<?php echo $s_data["reason"] ?>" placeholder="Enter your room number" readonly>
					<span class="focus-input100"></span>
				</div>

				
			</form>
			</div>
		</form>
		</div>
		</div>
		

		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
