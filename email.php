<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$to = "info@jayceedh.co.za";
	$subject = "Email Form website form";

	$names = $_POST['names'];
	$surname = $_POST['surname'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$messages = $_POST['messages'];

	$message = '
	<html>
		<head>
		<title>Email Form website form</title>
		</head>
		<body>
			<h1>Website Email</h1>
			<table border="1" style="border: solid 1px #999; width: 100%">
				<tr><th>Names</th></tr>
				<tr><td>'.$names.'</td></tr>
				<tr><th>Surname</th></tr>
				<tr><td>'.$surname.'</td></tr>
				<tr><th>Mobile</th></tr>
				<tr><td>'.$mobile.'</td></tr>
				<tr><th>Email</th></tr>
				<tr><td>'.$email.'</td></tr>
			</table>
			<h1>Message</h1>
			<p>'.$messages.'</p>
		</body>
	</html>
	';

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: noreply@jayceedh.co.za';

	try {
		echo mail($to,$subject,$message,$headers);
	} catch(Exception $e) {
	  	echo 'Message: ' .$e->getMessage();
	}

} else {
	header('Location: https://jayceedh.co.za');
}

?>