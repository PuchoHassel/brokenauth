<html>
	<head>
		<title>Broken Auth</title>
	</head>

	<body>
		<form action="index.php" method="get">
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
		include "db.php";

		echo "Your ID-number is: " .$_GET["ID"];
		echo "<br>";
		echo "Your email is: " .$_GET["Email"];
		echo "<br>";
		echo "Your password is: " .$_GET["passw"];
		echo "<br>";


		$id = $_GET["ID"];
		$email = $_GET["Email"];
		$password = $_GET["passw"];


		$myConn = new DB;

	
		$query = "SELECT * FROM user WHERE ID = '$id' AND Email = '$email' AND password = '$password'";

		$result = $myConn->executeSQL($query);

	

		if (!empty($result)) { 
    		echo "<br> Login as employee $id<br>";
    		
		} else {
    		echo "<br> Invalid login! <br>";
		}


	?>