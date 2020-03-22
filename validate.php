	
	
	<?php
	
	$myemail='mm887549@gmail.com';
	$mypassword='1234';
     if(isset($_POST['login']))
	{
		$email= $_POST['email'];
		$password= $_POST['pass'];
		if($email == $myemail and $password == $mypassword )
		{
			if(isset($_POST['remembar']))
			{ 
		     setcookie('email',$email,time()+60*60*24);
			}
			
			 session_start();
			 $_SESSION['email']=$email;
			 header('location:welcome.php');
			
		}else
		{
		 echo "your email and password is incorret: <a href='login.php'>Click here to login again</a> ";
		}
		
	}else
	{
		header("location:login.php");
	}
	
	?>
