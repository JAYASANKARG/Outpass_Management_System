<?php
require('database.php');
if(isset($_POST["yes"])){
    
    $num=$_POST["number"];
    $query="UPDATE outpass set status='closed',gate_in=now() where outpass_number=? ";
    $stmt= $db->prepare($query);
    $stmt->execute([$num]);

    $error_message="ok";
}

header('Location:../watchman');


?>
    <script>alert(<?php echo $error_message?>);</script>