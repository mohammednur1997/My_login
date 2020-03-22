
	
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>


	  <h2>Welcome our site</h2>
	  <?php
		 session_start();
		 echo'welcome to our site:'.$_SESSION['email'].'<br/>';
		echo'logout here: <a href="logout.php">click</a> ';
	  ?>
		
	</body>
	</html>