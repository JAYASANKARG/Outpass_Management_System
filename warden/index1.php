<?php
	session_start();
	if(!isset($_SESSION['warden']))
	{
		header('Location: ..');
	}
	
    
?>
<form action="../database/logout.php" method="POST">
			<input type="submit" name="logout" value="Logout">
		</form>

<a href="add_student.php" >add student</a>
<?php
echo "Login warden";





?>
<?php
require('../database/database.php');	
$query = "SELECT * FROM student_details";
$st_data = $db->query($query);
?>


<table>
                <tr>
                    <th>register_number</th>
                    <th>Name</th>
                    <th class="right">email</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($st_data as $product) : ?>
                <tr>
                    <td><?php echo $product["register_number"]; ?></td>
                    <td><?php echo $product["student_name"]; ?></td>
                    <td class="right"><?php echo $product["email"]; ?></td>
            
                </tr>
                <?php endforeach; ?>
</table>