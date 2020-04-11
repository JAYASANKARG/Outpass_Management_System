<?php
if(isset($_POST["apply"])){
    require('database.php');
	
    
	
	$re_number=$_POST["register_number"];
    $out_type=$_POST["outtype"];
    $place=$_POST["place"];
    $travel_type=$_POST["traveltype"];
    $out_time=$_POST["outtime"];
    $out_date=$_POST["outdate"];
    $in_time=$_POST["intime"];
    $in_date=$_POST["indate"];
    $reason=$_POST["reason"];
    echo $travel_type;

    try{
        $query="INSERT INTO outpass(register_number,outpass_type,place,travel_type,out_time,out_date,in_time,in_date,reason) VALUES(?,?,?,?,?,?,?,?,?)";
        
        
        $stmt= $db->prepare($query);
        $stmt->execute([$re_number,$out_type,$place,$travel_type,$out_time,$out_date,$in_time,$in_date,$reason]);
        
    
        
        $error_message= "Sucessfully added!";
        
    
        
    }
        catch (PDOException $ex)
    {
        $error_message = $ex->getMessage();
        echo $error_message;
    }	
    header('Location:../Student');
    }
    ?>
    <script>alert(<?php echo $error_message?>);</script>