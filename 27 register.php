<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Register</title>
<style type="text/css">
		div@insidebox1 {
							position:absolute;
							padding:10px;
							border:1px solid gray;
							height:auto;
							width:430px;
							top:270px;
							left:170px;
							z-index:2
						}
</style>
</head>
<body>

<!--log in box-->
<div id="insidebox1">
<form name="form1" method="post" action="29 registernext.php">
<p>Username: <input type="text" name="username" size="15" maxlength="20" value=""/></p>
<p>Password: <input type="password" name="pass" size="15" maxlength="20" value=""/></p>
<p>Confirm Password: <input type="password" name="pass2" size="15" maxlength="20" value=""/></p>
<p>Email: <input type="text" name="email" size="15" maxlength="50" value=""/></p>
<p>Confirm Email: <input type="text" name="email2" size="15" maxlength="50" value=""/></p>
<p><input type="submit" name="submit" value="Register"/></p>
</form>
</div>


</body>
</html>