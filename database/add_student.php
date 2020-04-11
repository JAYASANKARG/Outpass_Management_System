<?php 
if(isset($_POST["add_student"])){
	
	require('database.php');
	
    
	$s_email=$_POST["semail"];
	$re_number=$_POST["register_number"];
	$s_name=$_POST["name"];
	$s_depart=$_POST["department"];
	$s_phone=$_POST["sphone"];
	$p_name=$_POST["pname"];
	$p_phone=$_POST["pphone"];
	$s_hostel=$_POST["hostel"];
	$s_room=$_POST["roomn"];
	$images=$_FILES["image"]["name"];
	$tmp_dir=$_FILES["image"]["tmp_name"];
	
	
	try{
		$upload_dir='/opt/lampp/htdocs/Project_Outpass/uploads/';
		$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
		$valid_extensions=array('jpeg', 'jpg', 'png');
		$picProfile=$re_number.".".$imgExt;
		move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
	
	$query="INSERT INTO student_details(register_number,student_name,email,department,phone_number,parent_name,parent_number,hostel_name,room_number,s_image) VALUES(?,?,?,?,?,?,?,?,?,?)";
	
	
	$stmt1= $db->prepare($query);
	$stmt1->execute([$re_number,$s_name,$s_email,$s_depart,$s_phone,$p_name,$s_phone,$s_hostel,$s_room,$picProfile]);
	
	
	$error_message= "Sucessfully added!";
	

	
}
	catch (PDOException $ex)
{
	$error_message = $ex->getMessage();
      	echo $error_message;
}	

}
?>
<script>alert(<?php echo $error_message?>);</script>

