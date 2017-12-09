<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'oltany@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body = 'From: '.$field_name."\n";
$body = 'E-mail: '.$field_email."\n";
$body = 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers = 'Reply-To: '.$field_email."\r\n";

$status = mail($mail_to, $subject, $body_message, $headers);

if (!$_POST['name']) {
	$errName = 'Please enter your name';
}

// Check if email has been entered and is valid
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errEmail = 'Please enter a valid email address';
}

//Check if message has been entered
if (!$_POST['message']) {
	$errMessage = 'Please enter your message';
}
//Check if simple anti-bot test is correct
if ($human !== 5) {
	$errHuman = 'Your anti-spam is incorrect';
}

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'white.html';
	</script>
<?php
}
?>
