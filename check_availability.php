<?php
	session_start();
	
	require_once 'php/connect.php';

	if(isset($_POST["email"]) and $_POST["email"] != "" )
	{
		$sql = "SELECT * FROM user WHERE email_id='".$_POST["email"]."';";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) != 0)
		{
			echo "<div>Sorry, Email is already registered, try another email address</div>";

		}
		else
		{
			echo "<div>Email address can be registered</div>";

		}
	}
?>