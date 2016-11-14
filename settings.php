<?php
return array(
	/*
	| Message recepients
	| 
	| You can also pass an array like that:
	|
	|     array('johndoe@gmail.com', 'janedoe@gmail.com'),
	|
	| or like that, in order to specify recepients names along
	| with the email address:
	|
	|   array(
	|		'johndoe@gmail.com' => 'John Doe',
	|		'doejane@gmail.com' => 'Jane Doe'
	|	),
	|
	*/
	'recepients' => 'tocreatedev+prod@gmail.com',

	/*
	| "From" email message header setup
	| 
	| Some hosts(godaddy) require sender email address to be 
	| in the hosting's domain name and won't allow sending from
	| different email addresses
	|
	*/
	'from' => 'no-reply@' . ( isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : gethostname() ),
	'from_name' => 'Contact Form',

	/*
	| Message subject
	|
	*/
	'subject' => 'Contact Form',

	/*
	| SMTP configuration
	|
	| By default mail is sent through the built-in `mail()` PHP function
	| To enable SMTP, declare smtp_config array with 
	| host, port, username, password and encryption type
	|
	*/
	# 'smtp_config' => array(
	# 	"host"       => '',
	# 	"port"       => '',
	# 	"username"   => '',
	# 	"password"   => '',
	# 	"encryption" => '', // "ssl", "tls" or false for plain-text
	# ),
);