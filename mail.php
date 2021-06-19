<?php
	//****************************************
	//edit here
	$senderEmail = 'site@example.com';
	$targetEmail = 'site@example.com';
	$messageSubject = 'Message from web-site';
	$redirectToReferer = true;
	//****************************************

	// mail content
	$uname = $_POST['name'];
	$uemail = $_POST['email'];
	$usubject = $_POST['subject'];
	$umessage = $_POST['message'];

	// company email:
	$messageText =	'Name: '.$uname."\n".
					'Email: '.$uemail."\n".
					'Subject: '.$usubject."\n".
					'Message: '.$umessage."\n";

	// client email:
	$messageHeaders =	'From: '.$senderEmail."\r\n".
						'Reply-To: '.$senderEmail."\r\n".
						'X-Mailer: PHP/'.phpversion();

	mail($targetEmail, $messageSubject, $messageText, $messageHeaders);

	// redirect
	if($redirectToReferer) {
		header("Location: ".@$_SERVER['HTTP_REFERER']);
	} else {
		header("Location: ".$redirectURL);
	}
?>