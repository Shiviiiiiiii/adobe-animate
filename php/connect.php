<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$dbname = 'essai_data';
		$dbuser = 'Hizzo';
		$dbpassword = 'Hizzo257';
		$dbhost = 'localhost';

		$connect = @mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

		if (!$connect) {
			echo "Error: " . mysql_connect_error();
			exit();
		}

		echo "Connection Success! <br><br>";

		$IdCarte = $_POST["IdCarte"];

		$query = "INSERT INTO lamp(IdCarte) VALUES ('$IdCarte')";
		$result = mysqli_query($connect,$query);

		echo "Insertion Success!<br>"
	?>
</body>
</html>