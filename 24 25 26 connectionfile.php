<?php
	//opens connection to mysql server
	$dbc = mysql_connect('localhost','ifah','password');
	if(!$dbc)
	{
		die('Cant Open Connection: '.mysql_error());
	}
	
	//select database
	$db_selected = mysql_select_db("game", $dbc);
	if(!$db_selected)
	{
		die("Cant Select Database:".mysql_error());
	}
	
	//test database connection
	$query="UPDATE game SET email='mifah@test.com' WHERE username='bucky20'";
	$result=mysql_query($query);
?>