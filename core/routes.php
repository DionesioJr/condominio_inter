<?php
include("autoload.php");
include("config.php");
include("database.php");
include("core.php");
$routes['default'] = 'logins';
router($routes);
