<?php
require('../database/database.php');
	session_start();
	if(!isset($_SESSION['warden']))
	{
		header('Location: ..');
	}
	if(isset($_POST["edit"])){
		$temp=$_POST["number"];
		$query1="SELECT * from student_details where register_number='$temp' ";
		$onestudent = $db->query($query1);
    	$onestudent = $onestudent->fetch();
	}
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


<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form" action="../database/update_student.php" method="POST">
            <span class="contact100-form-title">
                Add Student
            </span>
            <img src="../uploads/<?php echo $onestudent["s_image"];?>" height="100" width="100" class="center" />
            <div class="wrap-input100" >
                <span class="label-input100"><b>Register Number</b></span>

                <input type="text" class="input100" name="renumber" onkeyup="this.value = this.value.toUpperCase();"  value="<?php echo $onestudent["register_number"];?>" disabled>
                <input type="hidden" value="<?php echo $onestudent["register_number"];?>" name="register_number">

                

                <span class="focus-input100"></span>
            </div>	

            <div class="wrap-input100">
                <span class="label-input100">Student Name</span>
                <input class="input100" type="text" name="name" value="<?php echo $onestudent["student_name"]?>" onkeyup="this.value = this.value.toUpperCase();" required>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100">
                <span class="label-input100">Email ID</span>
                <input class="input100" type="email" name="semail" value="<?php echo $onestudent["email"]?>"  onkeyup="this.value = this.value.toLowerCase();" required>
                <span class="focus-input100"></span>
            </div>
            
            <div class="wrap-input100" >
            <span class="label-input100">Department</span>
                <div>
                    <select class="selection-2" name="department"   ?>" required>
                        <option value="B.Sc Computer Science" <?php if($onestudent["department"]=="B.Sc Computer Science") echo "selected"?>>B.Sc Computer Science</option>
                        <option value="B.Sc Information Technology" <?php if($onestudent["department"]=="B.Sc Information Technology") echo "selected"?>>B.Sc Information Technology</option>
                        <option value="BCA" <?php if($onestudent["department"]=="") echo "selected"?>>BCA</option>
                        <option value="B.Sc Electronics & Communication" <?php if($onestudent["department"]=="B.Sc Electronics & Communication") echo "selected"?> >
                        B.Sc Electronics & Communication</option>
                        <option value="BBA (Business Administration)" <?php if($onestudent["department"]=="BBA (Business Administration)") echo "selected"?>>BBA (Business Administration)</option>
                        <option value="BBA (Computer Application)" <?php if($onestudent["department"]=="BBA (Computer Application)") echo "selected"?>>BBA (Computer Application)</option>
                        <option value="B.Com" <?php if($onestudent["department"]=="B.Com") echo "selected"?>>B.Com</option>
                        <option value="B.Com (Computer Applications)" <?php if($onestudent["department"]=="B.Com (Computer Applications)") echo "selected"?>>B.Com (Computer Applications)</option>
                        <option value="B.Com (Information Technology)" <?php if($onestudent["department"]=="B.Com (Information Technology)") echo "selected"?>>B.Com (Information Technology)</option>
                        <option value="B.Com (Professional Accounting)" <?php if($onestudent["department"]=="B.Com (Professional Accounting)") echo "selected"?>>B.Com (Professional Accounting)</option>
                        <option value="B.Com (Business Analytics)" <?php if($onestudent["department"]=="B.Com (Business Analytics)") echo "selected"?>>B.Com (Business Analytics)</option>
                        <option value="B.Sc Nutrition and Dietetics" <?php if($onestudent["department"]=="B.Sc Nutrition and Dietetics") echo "selected"?>>B.Sc Nutrition and Dietetics</option>
                        <option value="B.Sc Biochemistry" <?php if($onestudent["department"]=="B.Sc Biochemistry") echo "selected"?>>B.Sc Biochemistry</option>
                        <option value="B.Sc Biotechnology" <?php if($onestudent["department"]=="B.Sc Biotechnology") echo "selected"?>>B.Sc Biotechnology</option>
                        <option value="B.Sc Microbiology" <?php if($onestudent["department"]=="B.Sc Microbiology") echo "selected"?>>B.Sc Microbiology</option>
                        <option value="B.Sc Mathamatics" <?php if($onestudent["department"]=="B.Sc Mathamatics") echo "selected"?>>B.Sc Mathamatics</option>
                        <option value="B.Sc (CS and HM)" <?php if($onestudent["department"]=="B.Sc (CS and HM)") echo "selected"?>>B.Sc (CS and HM)</option>
                    </select>
                </div>
                <span class="focus-input100"></span>
            </div>
            
            
            <div class="wrap-input100">
                <span class="label-input100">Phone Number</span>

                <input class="input100" type="tel" id="phone" name="sphone" value="<?php echo $onestudent["phone_number"]?>" pattern="[0-9]{10}" required>

                

                <span class="focus-input100"></span>
            </div>
            
            <div class="wrap-input100" >
                <span class="label-input100">Parent Name</span>
                <input class="input100" type="text" name="pname" value="<?php echo $onestudent["parent_name"]?>" onkeyup="this.value = this.value.toUpperCase();" required>
                <span class="focus-input100"></span>
            </div>
            
            <div class="wrap-input100">
                <span class="label-input100">Parent Number</span>

                <input class="input100" type="tel" id="phone" name="pphone" value="<?php echo $onestudent["parent_number"]?>" pattern="[0-9]{10}" required>

                <span class="focus-input100"></span>

                
            </div>

                    
            <div class="wrap-input100" >
                <span class="label-input100">Hostel Name</span>
                <select class="selection-2" name="hostel" required>
                        <option value="Velavan"  <?php if($onestudent["hostel_name"]=="Velavan") echo "selected"?>>Velavan</option>
                        <option value="Kumaran" <?php if($onestudent["hostel_name"]=="Kumaran") echo "selected"?>>Kumaran</option>
                        <option value="Boys hostel 3" <?php if($onestudent["hostel_name"]=="Boys hostel 3") echo "selected"?>>Boys hostel 3</option>
                        <option value="Boys hostel 4" <?php if($onestudent["hostel_name"]=="Boys hostel 4") echo "selected"?>>Boys hostel 4</option>
                        <option value="Girls Hostel" <?php if($onestudent["hostel_name"]=="Girls Hostel") echo "selected"?>>Girls Hostel</option>
                </select>
                
            </div>

            <div class="wrap-input100 ">
                <span class="label-input100">Room Number</span>
                <input class="input100" type="number" name="roomn" value="<?php echo $onestudent["room_number"]?>" required>
                <span class="focus-input100"></span>
                
            </div>


            

            
            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn" name="update_student">
                        <span>
                            Update
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
