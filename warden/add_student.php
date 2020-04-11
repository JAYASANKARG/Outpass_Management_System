<?php
	session_start();
	if(!isset($_SESSION['warden']))
	{
		header('Location: ..');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Student...</title>
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
			<form class="contact100-form" action="../database/add_student.php" method="POST" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Add Student
				</span>
				
				<div class="wrap-input100" >
					<span class="label-input100"><b>Register Number</b></span>

					<input type="text"class="input100" name="register_number" onkeyup="this.value = this.value.toUpperCase();"  placeholder="Enter Register number" required>

					

					<span class="focus-input100"></span>
				</div>	

				<div class="wrap-input100">
					<span class="label-input100">Student Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter Student name" onkeyup="this.value = this.value.toUpperCase();" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Email ID</span>
					<input class="input100" type="email" name="semail" placeholder="Enter Student email id" onkeyup="this.value = this.value.toLowerCase();" required>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100" >
				<span class="label-input100">Department</span>
					<div>
						<select class="selection-2" name="department" required>
							<option value="B.Sc Computer Science">B.Sc Computer Science</option>
							<option value="B.Sc Information Technology">B.Sc Information Technology</option>
							<option value="BCA">BCA</option>
							<option value="B.Sc Electronics & Communication">B.Sc Electronics & Communication</option>
							<option value="BBA (Business Administration)">BBA (Business Administration)</option>
							<option value="BBA (Computer Application)">BBA (Computer Application)</option>
							<option value="B.Com">B.Com</option>
							<option value="B.Com (Computer Applications)">B.Com (Computer Applications)</option>
							<option value="B.Com (Information Technology)">B.Com (Information Technology)</option>
							<option value="B.Com (Professional Accounting)">B.Com (Professional Accounting)</option>
							<option value="B.Com (Business Analytics)">B.Com (Business Analytics)</option>
							<option value="B.Sc Nutrition and Dietetics">B.Sc Nutrition and Dietetics</option>
							<option value="B.Sc Biochemistry">B.Sc Biochemistry</option>
							<option value="B.Sc Biotechnology">B.Sc Biotechnology</option>
							<option value="B.Sc Microbiology">B.Sc Microbiology</option>
							<option value="B.Sc Mathamatics">B.Sc Mathamatics</option>
							<option value="B.Sc (CS and HM)">B.Sc (CS and HM)</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				
                
                <div class="wrap-input100">
					<span class="label-input100">Phone Number</span>

					<input class="input100" type="tel" id="phone" name="sphone" placeholder="Enter Student Number" pattern="[0-9]{10}" required>

					

					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100" >
					<span class="label-input100">Parent Name</span>
					<input class="input100" type="text" name="pname" placeholder="Enter parent name" onkeyup="this.value = this.value.toUpperCase();" required>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100">
					<span class="label-input100">Parent Number</span>

					<input class="input100" type="tel" id="phone" name="pphone" placeholder="Enter Parent Number" pattern="[0-9]{10}" required>

					<span class="focus-input100"></span>

					
				</div>

				        
                <div class="wrap-input100" >
					<span class="label-input100">Hostel Name</span>
					<select class="selection-2" name="hostel" required>
							<option value="Velavan">Velavan</option>
							<option value="Kumaran">Kumaran</option>
							<option value="Boys hostel 3">Boys hostel 3</option>
							<option value="Boys hostel 4">Boys hostel 4</option>
							<option value="Girls Hostel">Girls Hostel</option>
					</select>
					
				</div>

				<div class="wrap-input100 ">
					<span class="label-input100">Room Number</span>
					<input class="input100" type="number" name="roomn" placeholder="Enter Room number" required>
					<span class="focus-input100"></span>
					
                </div>


				<div class="wrap-input100 ">
					<span class="label-input100">Upload Student image</span>
					<input class="input100" type="file" name="image" required>

					<span class="focus-input100"></span>
                </div>

                
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="add_student">
							<span>
								Add
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
						</div>
					</div>
				</div>
				
	
			
			</form>
		</div>
	</div>
		<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->
		<script src="../js/main.js"></script>

</body>
</html>


