<?php
	require_once "/include/libs/mail/class.phpmailer.php";
	$mail = new PHPMailer();
	//  $mail->SMTPDebug = true;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = '';  // Specify main and backup server
	$mail->SMTPAuth = false;                               // Enable SMTP authentication
	$mail->Username = '';                            // SMTP username
	$mail->Password = ''; 
	$mail->Port = '';                          // SMTP password
	//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

	$mail->From = '';
	$mail->FromName = '';
	$mail->AddAddress($_POST['']);  // Add a recipient
	//$mail->AddAddress('ellen@example.com');               // Name is 	optional
	//$mail->AddReplyTo('info@example.com', 'Information');
	//$mail->AddCC('cc@example.com');
	//$mail->AddBCC('bcc@example.com');

	//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->Subject = '';
	//$mail->AddEmbeddedImage('logo.gif', 'logoimg', 'logo.gif');
	$mail->Body    = '';
	$mail->AltBody = '';

	/*$mail->Subject = 'test';
	$mail->Body    = 'test';
	$mail->AltBody = 'test';*/

	if(!$mail->Send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}
?>