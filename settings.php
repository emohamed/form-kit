<?php
return [
	/*
	| Message recipients
	| 
	| You can also pass an array like that:
	|
	|     array('johndoe@gmail.com', 'janedoe@gmail.com'),
	|
	| or like that, in order to specify recipients names along
	| with the email address:
	|
	|   array(
	|		'johndoe@gmail.com' => 'John Doe',
	|		'doejane@gmail.com' => 'Jane Doe'
	|	),
	|
	*/
	'recipients' => 'somebody@example.com',

	/*
	| "From" email message header setup
	| 
	| Some hosts(godaddy) require sender email address to be 
	| in the hosting's domain name and won't allow sending from
	| different email addresses.
	|
	*/
	'from' => 'no-reply@' . ( isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : gethostname() ),
	'from_name' => 'Contact Form',

	/*
	| Message subject
	|
	*/
	'subject' => 'Contact Form Submission',

	/*
	| SMTP configuration
	|
	| By default mail is sent through the PHP's built-in `mail()` 
	| function. To enable SMTP, declare smtp_config array with 
	| host, port, username, password and encryption type.
	|
	*/
	# 'smtp_config' => [
	# 	"enable"     => true,
	# 	"host"       => '',
	# 	"port"       => '',
	# 	"username"   => '',
	# 	"password"   => '',
	# 	"encryption" => '', // "ssl", "tls" or false for plain-text
	# ],
];