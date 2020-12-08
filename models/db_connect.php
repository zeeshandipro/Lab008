<?php 
	$dbUsername="root";
	$serverName="localhost";
	$dbPassword="";
	$dbname="js_db";
	
	function execute($query)
	{
		global $dbUsername, $serverName, $dbPassword, $dbname;
		$conn= mysqli_connect($serverName,$dbUsername,$dbPassword,$dbname);
		if($conn)
		{
			mysqli_query($conn,$query);
		}
		else
		{
			echo "Execute function is not working";
		}
	}
	
	function get($query)
	{
		global $dbUsername, $serverName, $dbPassword, $dbname;
		$conn= mysqli_connect($serverName,$dbUsername,$dbPassword,$dbname);
		if($conn)
		{
			$result=mysqli_query($conn,$query);
			$data=array();
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$data[]=$row;
				}
			}
			return $data;
		}
		else
		{
			echo "Execute function is not working";
		}
	}


?>