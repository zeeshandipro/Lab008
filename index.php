<?php 
	require_once 'model/db_connect.php';
	$userName="";
	$password="";
	
	if(isset($_POST["login"]))
	{
		//echo "yo";
		$userName=htmlspecialchars($_POST["userName"]);
		$password=htmlspecialchars($_POST["password"]);
		$password=md5($password);
		$query="select * from users where userName='$userName' and password='$password'";
		$result=get($query);
		//echo $result[0]["userName"];
		//echo $result[0]["password"]
		if($result)
		{
			header("Location: dashboard.php");
			//echo $result[0]["userName"]
		}
		else{echo "user not found";}
	}
?>

<html>
	<title></title>
	<head></head>
	<body>
		<h1>Login Form</h1>
		<form method="post" onsubmit="return validate()" action="">
			<table>
				
				<tr>
					<td>User name </td>
					<td><input type="text" id="userName" name="userName"><span id="err_userName"></span></td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" id="password" name="password"><span id="err_password"></span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="login" name="login" value="Login"></td>
					
				</tr>
			</table>
		</form>
		<script>
			function getElement(id){
				return document.getElementById(id);
			}
			
			function validate()
			{
				var allSet=true;
				var userName = getElement("userName");
				var password = getElement("password");
				var err_userName = getElement("err_userName");
				var err_password = getElement("err_password");
				
				if(userName.value == ""){
					allSet=false;
					err_userName.innerHTML = "Username Required";
					//e_name.focus();
					//return !hasErr;
				}
				else{err_userName.innerHTML = "";}
				
				if(password.value == ""){
					allSet=false;
					err_password.innerHTML = "Password Required";
					//e_name.focus();
					//return !hasErr;
				}
				else{err_password.innerHTML = "";}
				
				if(allSet)
				{
					return true;
				}
				else{return false;}
			}
		</script>
	</body>
</html>