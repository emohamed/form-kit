<?php
require(__DIR__ . '/../lib/autoload.php');

use \CarbonForms\Config;

Config::load(__DIR__ . '/../settings.php');
Config::load_optional(__DIR__ . '/../settings-local.php');

