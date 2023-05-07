<!DOCTYPE html>
<html>
<head>
	<title>Form Page 2</title>
</head>
<body>
	<h1>Page 2: Personal Information</h1>
	<?php
		if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])){
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];

			echo "<p>Name: $name</p>";
			echo "<p>Phone Number: $phone</p>";
			echo "<p>Email Address: $email</p>";

			echo "<form method='POST' action='success.php'>";
			echo "<input type='hidden' name='name' value='$name'>";
			echo "<input type='hidden' name='phone' value='$phone'>";
			echo "<input type='hidden' name='email' value='$email'>";

			echo "<label for='location'>Location:</label>";
			echo "<input type='text' id='location' name='location' required><br><br>";

			echo "<label for='age'>Age:</label>";
			echo "<input type='number' id='age' name='age' min='1' max='150' required><br><br>";

			echo "<label for='university'>University:</label>";
			echo "<input type='text' id='university' name='university' required><br><br>";

			echo "<input type='submit' value='Submit'>";
			echo "</form>";
		}else{
			echo "<p>Please fill out the form on the previous page.</p>";
		}
	?>
</body>
</html>
