<?php
require('database.php');
if(isset($_POST["yes"])){
    
    $num=$_POST["number"];
    $query="UPDATE outpass set watch_man='yes',status='watchman-ok',gate_out=now() where outpass_number=? ";
    $stmt= $db->prepare($query);
    $stmt->execute([$num]);

    $error_message="ok";
}
else{
    $num=$_POST["number"];
    $query="UPDATE outpass set watch_man='no',status='reject' where outpass_number=? ";
    $stmt= $db->prepare($query);
    $stmt->execute([$num]);

    $error_message="no";

}
header('Location:../watchman');


?>
    <script>alert(<?php echo $error_message?>);</script>