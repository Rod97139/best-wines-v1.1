<?php
const BASE_DIR = '/best-wines';

require_once 'vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

require_once 'config/routes.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Core\Router;

$request_uri = str_replace(BASE_DIR, '', $_SERVER['REQUEST_URI']);

try {
    Router::resolve($request_uri);
}catch (Exception $e)
{
    echo $e->getMessage();
}


