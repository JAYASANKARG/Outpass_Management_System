<?php
	function isValidAdminLogin($username,$password)
	{
		global $db;
		$valid = false;
		$query = 'Select * from admin where username =:username and passwd = :password';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}

	function isValidStudentLogin($username,$password)
	{
		global $db;
		$valid = false;
		$query = 'Select * from student_details where register_number = :username and phone_number= :password';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}

	function isValidWatchmanLogin($username,$password)
	{
		global $db;
		$valid = false;
		$query = 'Select * from watchman where username = :username and passwd = :password';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}

	function isValidWardenLogin($username,$password)
	{
		global $db;
		$valid = false;
		$query = 'Select * from warden where username = :username and passwd = :password';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}
?>