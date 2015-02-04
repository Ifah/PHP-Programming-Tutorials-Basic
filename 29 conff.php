<?php
	$host="localhost";//hostname
	$username="ifah";//username
	$password="password";//database password
	$db_name="game";//database name
	
	//connect to database
	mysql_connect("$host","$username","$password") or die("Cannot connect to server");
	mysql_select_db("$db_name") or die("Cannot select DB");
?>