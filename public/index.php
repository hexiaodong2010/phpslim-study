<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__DIR__)) . DS);
define("VENDORDIR", ROOT . "vendor" . DS);
define("ROUTEDIR", ROOT . "src" . DS . "routes" . DS);
define("TEMPLATEDIR", ROOT . "templates" . DS);
define("LANGUAGEDIR", ROOT . "languages" . DS);

if (file_exists(VENDORDIR . "autoload.php")) {
    require_once VENDORDIR . "autoload.php";
} else {
    die("<pre>Run 'composer.phar install' in root dir</pre>");
}

$config = require_once ROOT . 'src' . DS . 'config.php';
/**
 * Include bootstrap file
 */
require_once ROOT . 'src' . DS . 'bootstrap.php';


/**
 * Include all files located in routes directory
 */
foreach (glob(ROUTEDIR . '*.php') as $router) {
    require_once $router;
}

//app start
$app->run();