<?php
require('database.php');
if(isset($_POST["yes"])){
    
    $num=$_POST["number"];
    $query="UPDATE outpass set warden='yes',status='warden-ok' where outpass_number=? ";
    $stmt= $db->prepare($query);
    $stmt->execute([$num]);

    $error_message="ok";
}
else{
    $num=$_POST["number"];
    $query="UPDATE outpass set warden='no',status='reject' where outpass_number=? ";
    $stmt= $db->prepare($query);
    $stmt->execute([$num]);

    $error_message="no";

}
header('Location:../Student');


?>
    <script>alert(<?php echo $error_message?>);</script>