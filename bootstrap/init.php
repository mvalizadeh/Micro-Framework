<?php

use App\Core\Request;

define('BASE_PATH', dirname(__DIR__));

require_once(BASE_PATH . '/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

$request = new Request();

require_once BASE_PATH . '/helpers/helpers.php';
require BASE_PATH . '/routes/web.php';
