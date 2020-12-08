<?php
	require_once 'model/db_connect.php';

	$name="";
	$userName="";
	$email="";
	$password="";
	$phone="";
	
	if(isset($_POST["register"]))
	{
		$name=htmlspecialchars($_POST["name"]);
		$userName=htmlspecialchars($_POST["userName"]);
		$email=htmlspecialchars($_POST["email"]);
		$password=htmlspecialchars($_POST["password"]);
		$phone=htmlspecialchars($_POST["phone"]);
		
		$password=md5($password);
		$query="insert into users values ('$name','$userName','$email','$password','$phone')";
		execute($query);
		
		echo "Registered successfully";
	}
	
 
?>

<html>
	<title></title>
	<head></head>
	<body>
		<h1>Registation Form</h1>
		<form method="post" onsubmit="return validate()" action="">
			<table>
				<tr>
					<td>Name </td>
					<td><input type="text" id="name" name="name"><span id="err_name"></span></td>
				</tr>
				<tr>
					<td>User name </td>
					<td><input type="text" id="userName" name="userName"><span id="err_userName"></span></td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" id="password" name="password"><span id="err_password"></span></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><input type="text" id="email" name="email"><span id="err_email"></span></td>
				</tr>
				<tr>
					<td>Phone </td>
					<td><input type="text" id="phone" name="phone"><span id="err_phone"></span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="register" name="register" value="Register"></td>
					
				</tr>
			</table>
		</form>
		<script src="js/validation.js"></script>
		
	</body>
</html>
