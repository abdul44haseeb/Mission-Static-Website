<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<h2>Contact Us</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="message">Message:</label>
		<textarea id="message" name="message" required></textarea><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = "contact@mission.thrissur.in";
		$subject = "New Contact Form Submission";
		$body = "Name: $name\nEmail: $email\nMessage: $message";

		$headers = "From: $email";

		if(mail($to, $subject, $body, $headers)){
			echo "<p>Thank you for contacting us. We will get back to you shortly.</p>";
		}
		else{
			echo "<p>There was an error sending the email. Please try again later.</p>";
		}
	}
	?>
</body>
</html>
