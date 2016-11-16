<?php
require(__DIR__ . '/load.php');

use \CarbonForms\EmailNotification;
use \CarbonForms\Config;

function send_mail_notification() {
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		return [
			'status'  => 'error',
			'message' => 'Method not allowed. ',
		];
	}

	$validator = new Carbon_Validator($_POST, [
		"name"    => "required",
		"email"   => "required|email",
		"message" => "required",
	]);

	if ($validator->fails()) {
		return [
			'status' => 'error',
			'errors' => $validator->get_errors(),
		];
	}

	try {
		$notification = new EmailNotification(Config::$values);

		$notification->send([
			'name'    => $_POST['name'],
			'email'   => $_POST['email'],
			'message' => $_POST['message'],
		]);

		return [
			'status' => 'success',
			'message' => 'Your message has been sent. ',
		];

	} catch (Exception $e) {
		return [
			'status' => 'error',
			'errors' => ['Could not send send e-mail message: ' . $e->getMessage()],
		];
	}

}

$result = send_mail_notification($_POST);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($result);