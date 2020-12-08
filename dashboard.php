<?php 
	require_once 'model/db_connect.php';
	
		$query="select * from users";
		$result=get($query);
		//echo $result[0]["name"];
?>


<html>
	<title></title>
	<head></head>
	<body>
		<h1>All User Data</h1>
		<form>
			<table border="45">
				<tr>
					<th>Name</th>
					<th>User name</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>
				<?php 
					foreach($result as $p)
					{
						
						echo "<tr>";
							echo "<td>".$p["name"]."</td>";
							echo "<td>".$p["userName"]."</td>";
							echo "<td>".$p["email"]."</td>";
							echo "<td>".$p["phone"]."</td>";
							
						echo "</tr>";
					}
				?>
			</table>
		</form>
	</body>
</html>
