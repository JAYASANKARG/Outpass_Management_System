<?php
require('../database/database.php');
	session_start();
	if(!isset($_SESSION['student']))
	{
		header('Location: ..');
	}
	$u_email=$_SESSION['student'];
	$query = "SELECT * FROM student_details where register_number='$u_email'";
    $s_data = $db->query($query);
    $s_data = $s_data->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Out Pass Apply Form...</title>
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
					Apply New Outpass
				</span>
				<div>
					<img src="../images/img.jpg" alt="image" readonly  class="center">
				</div><br>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"><b>Register Number</b></span>
					<input class="input100" type="text" name="register_number" value="<?php echo $s_data["register_number"] ?>" placeholder="Enter your register number" readonly>
					<span class="focus-input100"></span>
				</div>

				

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Outpass Type</span>
					<div>
						<select class="selection-2" name="outtype" required>
							<option value="General">General</option>
							<option value="Festival">Festival</option>
							<option value="Emergency">Emergency</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Place of Visit</span>
					<input class="input100" type="text" name="place" placeholder="Enter your travel type" required>
					<span class="focus-input100"></span>
				</div>



                <div class="wrap-input100 input100-select">
					<span class="label-input100">Travel Type</span>
					<div>
						<select class="selection-2" name="traveltype" required>
							<option value="self">Self</option>
							<option value="parent">Parent</option>
							<option value="relatives">Relatives</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>  
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">out time</span>
					<input class="input100" type="time" name="outtime" placeholder="Enter your out time" required>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">out date</span>
					<input class="input100" type="date" name="outdate" placeholder="Enter your out date" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">In time</span>
					<input class="input100" type="time" name="intime" placeholder="Enter your In time" required>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">In date</span>
					<input class="input100" type="date" name="indate" placeholder="Enter your In date" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Reason</span>
					<textarea class="input100" name="reason" placeholder="Your message here..." required></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="apply">
							<span>
								Apply
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
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
