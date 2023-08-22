<html>
<head>
	<title>Registration</title>
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
	
	if(isset($_POST["register"])) {
		$username = $_POST["username"];
		$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
		
		$file = fopen("/mnt/d/user.txt","a+");
		fwrite($file,$username . ":" .$password .PHP_EOL);
		fclose($file);
		
		echo "<h2>Registered Successfully</h2>" ;
	}
?>
</body>
</html>