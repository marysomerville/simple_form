<?php
require("PHPMailer_v5.1/PHPMailer_v5.1/class.phpmailer.php");
$mail = new PHPMailer();
	
$body = '
	<html>
	<head>
	<style>
	body {
		font-family: "Lucida Grande",Verdana,Helvetica,Arial,sans-serif;	
		font-size: 12px;
	}
	tr {
		font-size: 12px;
	}
	p {
		margin: 1px 0px 4px 0px;
		padding: 0px 0px 0px 0px;
	}
	</style>
	</head>
	<body bgcolor="#ffffff">
		<table cellpadding="3" cellspacing="5" border="0" width="620" align="center">
			<tr>
				<td><div style="margin: 10px 0px;"><span style="font-size: 14px; font-weight: bold; color:#c4122f; padding:0 0 0 15px;">New Contact Form Enquiry:</span></div></td>
			</tr>
			<tr>
				<td>
					<table cellpadding="15" cellspacing="5" border="0" width="100%" align="center">
						<tr>
							<td><strong>Name:</strong></td>
							<td>'.$_POST['name'].'</td>
						</tr>
						<tr>
							<td><strong>Email:</strong></td>
							<td>'.$_POST['email'].'</td>
						</tr>
						<tr>
							<td><strong>Enquiry:</strong></td>
							<td>'.$string = ereg_replace("(\r\n\r\n|\n\n|\r\r)", "<p />", $_POST['enquiry']).'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<div style="margin: 0px 0px 5px 0px; padding: 0px 0px 0px 0px; border-bottom: 0px solid #e3e3e3;">
						<span style="font-size: 9px; font-weight: bold; color:#7e7e7e;">Copyright &copy; '.date("Y").' | All rights reserved</span>
					</div>
				</td>
			</tr>

		</table>

	</body>
	</html>
';

$mail->SetFrom("support@marysomerville.co.uk", "Website");
$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->AddAddress('mary@marysomerville.co.uk', 'Mary Somerville Design');
$mail->Subject = 'New Contact Form Enquiry';
$mail->MsgHTML($body);
echo 'Email was sent';

if(!$mail->Send()) { //if the email doesn't send

	print '
		<div id="message_activity">
			<div id="message_activity_inner">
				<p>Oops, there was a problem sending your message. Please try again or email us directly.</p>
			</div>
		</div>';

}
?>