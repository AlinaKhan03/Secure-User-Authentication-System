<html>
<head>
	<title>Login</title>
	<style>
		h2 {
			text-align : center;
		}
	</style>
</head>
<body style = "background-color : 7A316F;">
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$users = file("/mnt/d/user.txt",FILE_IGNORE_NEW_LINES);
		
		foreach ($users as $user) {
			list($savedUsername,$hashedPassword) = explode(':',$user);
			
			if($username === $savedUsername && password_verify($password,$hashedPassword)) {
				echo "<h2>Welcome, $username</h2>" ;
				echo "<h2>You logged in successfully</h2>" ;
				exit();
			}
		}
		
		echo "Invalid Username and Password" ;
	}
?>
</body>
</html>