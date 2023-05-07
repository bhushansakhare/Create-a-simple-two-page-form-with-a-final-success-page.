<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
</head>
<body>
	<h1>Thank You!</h1>
	<?php
		if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['location']) && isset($_POST['age']) && isset($_POST['university'])){
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$location = $_POST['location'];
			$age = $_POST['age'];
			$university = $_POST['university'];

			echo "<p>Thank you for filling the form, $name!</p>";
			echo "<p>Your form has been submitted successfully with the following information:</p>";
			echo "<p>Name: $name</p>";
			echo "<p>Phone Number: $phone</p>";
			echo "<p>Email Address: $email</p>";
			echo "<p>Location: $location</p>";
			echo "<p>Age: $age</p>";
			echo "<p>University: $university</p>";
		}else{
			echo "<p>Please fill out the form on the previous page.</p>";
		}
	?>
</body>
</html>
