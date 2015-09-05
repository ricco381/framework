<?php

require "../vendor/autoload.php";

$config = require "../config/config.php";

$application = new app\core\App();
$application->start($config);