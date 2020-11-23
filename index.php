<html>
	<head>
		<title>Broken Auth</title>
	</head>

	<body>
		<form action="db.php" method="post">
		<Label>ID-number:</label>
		<input type="number" name="ID"><br>
		
		<label>Email:</label>
		<input type="email" name="Email"><br>
		
		<label>Password:</label>
		<input type="password" name="passw"><br><br>
		
		<button type="submit">Login</button>
		</form>
	</body>
</html>

<?php  


		echo "Your ID-number is: " .$_Post["ID"];
		echo "<br>";
		echo "Your email is: " .$_Post["Email"];
		echo "<br>";
		echo "Your password is: " .$_Post["passw"];
		echo "<br>";


		$id=$_Post["ID"];
		$email=$_Post["Email"];
		$password=$_Post["passw"];


		$myConn = new DB;

	
		$query = "SELECT * FROM user WHERE ID = '$id' AND Email = '$email' AND password = '$password'";

		$result = $myConn->executeSQL($query);

	

		if (!empty($result)) { 
    		echo "<br> Login as employee $id<br>";
    		
		} else {
    		echo "<br> Invalid login! <br>";
		}


	?>