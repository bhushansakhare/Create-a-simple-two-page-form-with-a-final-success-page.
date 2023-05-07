<!DOCTYPE html>
<html>
<head>
	<title>Form Page 1</title>
</head>
<body>
	<h1>Page 1: Contact Information</h1>
	<form method="POST" action="page2.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="phone">Phone Number:</label>
		<input type="text" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>

		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br><br>

		<input type="submit" value="Next">
	</form>
</body>
</html>
