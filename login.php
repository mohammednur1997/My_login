	
	
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
		.error{
			color:red;
		}
		</style>
	</head>
	<body>
	<h2>You need to longin our site</h2>
	<?php
	//Error ae jonno code
	$emailErr= $passwordErr ='';
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST['email']))
		{
			$emailErr='enter your Email';
		}
		
		if(empty($_POST['pass']))
		{
			$passwordErr='enter your password';
		}
		
	}
	?>
	
	 <form action="validate.php" method="post">
	 <p>Email:</p>
	 <input type="text" name="email" />
	 <span class="error">* <?php echo $emailErr;?></span>
	 <p>Password</p>
	 <input type="password" name='pass' />
	<span class="error">* <?php echo $passwordErr;?></span>
	 <br/>
	 <input type="checkbox" name='remembar' />Remembar me
	  <br/>
	 <input type="submit" value="login" name='login' />
	 </form>
		
	</body>
	</html>