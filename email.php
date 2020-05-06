<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$to = "info@jayceedh.co.za";
	$subject = "Email Form website form";

	$message = `
	<html>
		<head>
		<title>Email Form website form</title>
		</head>
		<body>
			<p>Email Form website form</p>
			<table>
				<tr>
					<th>Names</th>
					<th>Surname</th>
					<th>Mobile</th>
					<th>Email</th>
				</tr>
				<tr>
					<td>$names</td>
					<td>$surname</td>
					<td>$mobile</td>
					<td>$email</td>
				</tr>
			</table>
			<p>$message</p>
		</body>
	</html>
	`;

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <noreply@jayceedh.co.za>' . "\r\n";

	mail($to,$subject,$message,$headers);

} else {
	redirect('/');
}

?>