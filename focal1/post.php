<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
	$to = "7yatan@gmail.com";
	$subject = 'Contact Me';
	$message = ' <h2>Contact Me</h2>
		   <p>Name <b> '.$_POST['name'].'</b></p>
		   <p>Email Address <b> '.$_POST['email'].'</b></p>
		   <p>Text message <b> '.$_POST['message'].'</b></p>';
		   
	$header = "From: support@7yatan.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";    
	
	$isMail = mail($to, $subject, $message, $header);
	
	if (mail($to, $subject, $message, $header)) {
		echo('Your message was sent');
	} else {
		echo('Your message was not sent');	
	}
}

