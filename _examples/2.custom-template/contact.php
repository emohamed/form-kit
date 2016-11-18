<?php
require_once(__DIR__ . "/../../src/load.php");

use \CarbonForms\EmailNotification;
use \CarbonForms\Config;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $message = new EmailNotification(Config::$values);
    $message->set_template(__DIR__ . '/email-template.php');
    $message->send($_POST);

    $result = "Your message has been sent. ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test form with recaptcha</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php if (isset($result)): ?>
            <div class="alert alert-info">
                <p><?php echo $result ?></p>
            </div>
        <?php endif ?>

        <form method="POST">
             <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    
</body>
</html>