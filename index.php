<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login...</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>


<!--===============================================================================================-->

<?php
	session_start();
	if(isset($_SESSION['admin']))
	{
		header('Location: admin.php');
	}
	else if(isset($_SESSION['student'])){
		header('Location: Student');	
	}
	else if(isset($_SESSION['warden'])){
		header('Location: warden');
	}

	if(isset($_POST['login']))
	{
		require('database/database.php');
		require('database/functions.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(isValidAdminLogin($username, $password))
		{
			$_SESSION['admin'] = $username;
			header('Location: admin');
		}
		else if(isValidStudentLogin($username, $password))
		{
			$_SESSION['student'] = $username;
			header('Location: Student');	
		}
		else if(isValidWatchmanLogin($username, $password))
		{
			$_SESSION['watchman'] = $username;
			header('Location: watchman');	
		}
		else if(isValidWardenLogin($username, $password))
		{
			$_SESSION['warden'] = $username;
			header('Location: warden');	
		}
		else
		{
			echo "	Username and Password mismatch";
		}
	}
?>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="POST">
				<span class="contact100-form-title">
					Login
				</span>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"><b>User</b></span>

					<input class="input100" type="text" name="username" placeholder="Enter Your Email" onkeyup="this.value = this.value.toUpperCase();" required>

					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="password" placeholder="Enter Your Password" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="login">
							<span>
								Login
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
	
			</div>
		</form>
		</div>
		</div>
		

		</div>
	</div><br>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

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
