<?php 

if(isset($_POST["register_number"])){
    echo $_POST["register_number"];
}
else{
    echo "no";
}
if(isset($_POST["update_student"])){
	
	require('database.php');
	
    $re_number=$_POST["register_number"];
	$s_email=$_POST["semail"];  
	
	$s_name=$_POST["name"];
	$s_depart=$_POST["department"];
	$s_phone=$_POST["sphone"];
	$p_name=$_POST["pname"];
	$p_phone=$_POST["pphone"];
	$s_hostel=$_POST["hostel"];
	$s_room=$_POST["roomn"];

	
	
	try{
        $query="UPDATE student_details set student_name=?,email=?,department=?,phone_number=?,parent_name=?,parent_number=?,hostel_name=?,room_number=? WHERE register_number=?";	
        $stmt= $db->prepare($query);
	    $stmt->execute([$s_name,$s_email,$s_depart,$s_phone,$p_name,$s_phone,$s_hostel,$s_room,$re_number]);
	

	
	$error_message= "Sucessfully added!";
	

	
}
	catch (PDOException $ex)
{
	$error_message = $ex->getMessage();
      	echo $error_message;
}	
}
header('Location: ../warden/view.php');
	
?>
<script>alert(<?php echo $error_message?>);</script>


