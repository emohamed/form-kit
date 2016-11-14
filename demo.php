<?php
require(__DIR__ . '/vendor/autoload.php');

use \CarbonForms\EmailNotification;
use \CarbonForms\Config;

Config::load(__DIR__ . '/settings.php');
Config::load_optional(__DIR__ . '/settings-local.php');

function send_mail_notification($input_data) {
	// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// 	return [
	// 		'status' => 'error',
	// 		'message' => 'Method not allowed. ',
	// 	];
	// }

	$validator = new Carbon_Validator($input_data, [
		"name"    => "required",
		"email"   => "required|email",
		"message" => "required",
	]);

	if ($validator->fails()) {
		return [
			'status' => 'error',
			'message' => 'Invalid input',
			'validation_errors' => $validator->get_errors(),
		];
	}

	try {
		$notification = new EmailNotification(Config::$values);

		// You can add attachments to the message:
		// $notification->attach('demo.jpg', 'demo.jpg');

		$notification->send([
			'name'    => $input_data['name'],
			'email'   => $input_data['email'],
			'message' => $input_data['message'],
		]);

		return [
			'status' => 'success',
			'message' => 'Your message has been sent. ',
		];
	} catch (Exception $e) {
		return [
			'status' => 'error',
			'message' => 'Could not send send e-mail message: ' . $e->getMessage(),
		];
	}

}

$result = send_mail_notification([
	'name' => 'Emil Mohamed',
	'email' => 'emil@2c-studio.com',
	'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima magni assumenda. ',
]);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($result);