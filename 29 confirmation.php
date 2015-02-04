<?php

	include("conff.php");
	
	//set variable
	$passkey=$_GET['passkey'];
	
	//retreive data where table n row match passkey
	$sql1="SELECT * from temp WHERE code='$passkey'";
	$result1=mysql_query($sql1);
	
	//if successfully queried
	if($result1)
	{
		//how many rows have passkey
		$count=mysql_num_rows($result1);
		
		//if passkeyis in database, retreive data
		if($count==1)
		{
			$rows=mysql_fetch_array($result1);
			$namex=$rows['username'];
			$emailx=$rows['email'];
			$passwordx=$rows['password'];
			
			//takeout white space
			$name=str_replace(' ', '', $namex);
			$email=str_replace(' ', '', $emailx);
			$password=str_replace(' ', '', $passwordx);
			
			//insert in to users table
			$sql2="INSERT INTO users SET username='$name', email='$email', password='$password'";
			$result2=mysql_query($sql2);
		}
		else
		{
			echo "Wrong Confirmation code";
		}
		
		if($result2)
		{
			header("Location:29confirmation2.html");
			
			//remove from temp table
			$sql5 = "DELETE FROM temp WHERE code='$passkey'";
			$result5=($sql5);
		}
	}

?>