<?php
	include("conff.php");
	
	//test to see if username is alphanumeric
	$testname=$_POST[username ];
	if(!eregi("{[A-Za-z0-9]"},$test))
	{
		//test for duplicate names
		$query="SELECT username FROM users WHERE username = '$testname'";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		if($num == 0)
		{
			//test for duplicate email
			$query2="SELECT email FROM users WHERE email = '$_POST[email]'";
			$result2=mysql_query($query2);
			$num2=mysql_num_rows($result2);
			if($num2 == 0)
			{
				//if emails and passwords match up
				if(($_POST['pass']==$_POST['pass2'])&&($_POST['email']==$_POST['email2'])
				{
					//generate random confirmation code
					$confirm_code=md5(uniqid(rand()));
					
					//get rid of all html markup
					$name=strip_tags($_POST['username']);
					$email=strip_tags($_POST['email']);
					$pass=strip_tags($_POST['pass']);
					
					//insert data in to database
					$sql="INSERT INTO temp SET code='$confirm_code', username='$name', email='$email', password='$pass'";
					$result=mysql_query($sql);
					if($result)
					{
						$message="Your Confirmation link \r\n";
						$message.="Click on this link to activate your account \r\n";
						$message.="http://localhost:8080/PHP%20Programming%20Tutorials/confirmation.php?passkey=$confirm_code";
						
						$sentmail=mail("$sentmail", 'Regsitration Confirmation', "$message");
						header("Location:thankyou.html");
					}
					else
					{
						echo "Not Found your email in our database";
					}
					
					//if email sent successfully
					if($sentmail)
					{
						echo "Your confirmation link has been sent to your email address";
					}
					else
					{
						echo "Cannot send Confirmation link to your email address";
					}
					
				}
				else
				{
					header("Location:badmatch.html");
				}
			}
			else
			{
				header("Location:emailinuse.html");
			}
		}
		else
		{
			header("Location:nameinuse.html");
		}
	}
	else
	{
		header("Location:invalidname.html");
	}

?>