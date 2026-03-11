<?php

use Tecgdcs\Router;

require __DIR__ . '/../bootstrap/app.php';

require VENDOR_PATH . '/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

$router = new Router();
$router->route();
