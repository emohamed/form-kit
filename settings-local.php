<?php
return [
	/*
	| SMTP configuration
	|
	| Use https://mailtrap.io/ for testing. 
	|
	*/
	'smtp_config' => [
		"enable"     => true,
		"host"       => 'mailtrap.io',
		"port"       => '2525',
		"username"   => '',
		"password"   => '',
		"encryption" => false, // "ssl", "tls" or false for plain-text
	],
];