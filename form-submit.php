<?php
if (isset($_POST["submit"])) {

	//Selecting the variables
	$name = $_POST["name"];
	$emailFrom = $_POST["email"];
	$position = $_POST["subject"];
	$message = $_POST["message"];

	//E-mail Variables
	$mailTo = "your-email@domain.com";
	$headers = "From: contact@zipup.io" . "\r\n" .
		"Reply-To: " . $emailFrom . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
	$subject = "Hello, I want to " . $position;
	$body = "You Have Received a new Contact Form" . "\n\n";
	$body .= "The Sender is " . $name . ".\n\n";
	$body .= "The Sender E-mail is " . $emailFrom . ".\n\n";
	$body .= "And he wants to " . $position . ".\n\n";
	$body .= "The Message: " . ".\n\n" . $message;

	//Checking if inputs are empty
	if (empty($name) || empty($emailFrom) || empty($message)) {
		header("Location: ./contact-us.php?form=empty");
		exit();
	}

	//Success
	else {

		//If a string or not
		if (!preg_match("/^[a-zA-z]*/", $name)) {
			header("Location: ./contact-us.php?form=char");
			exit();
		}

		//Validating E-mail
		if (!filter_var($emailFrom, FILTER_VALIDATE_EMAIL)) {
			header("Location: ./contact-us.php?form=email");
			exit();
		}

		//Redirecting to Form submitted 
		else {
			//Mail to
			mail($mailTo, $subject, $body, $headers);
			header("Location: ./form-submitted.html");
			exit();
		}
	}
}

//Redirecting to the local Page
else {
	header("Location: ./contact-us.php");
	exit();
}
