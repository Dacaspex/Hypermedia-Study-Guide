<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

$lang = require_once __DIR__ . '/../app/lang/' . strtolower(Language::getLocale()) . '.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode('/', $uri);
$pageSlug = $uriParts[count($uriParts) - 1];

$templates = new \League\Plates\Engine(__DIR__ . '/../app/views');
$templates->registerFunction('activeLink', function($slug) use ($pageSlug) {
    return ($slug === $pageSlug) ? 'class="active"' : '';
});

$templates->registerFunction('trans', function($key) use ($lang) {
    if (array_key_exists($key, $lang)) {
        return $lang[$key];
    }

    return $key;
});

$connection = new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_NAME'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $routes) use ($connection, $templates) {
    require __DIR__ . '/../app/routes.php';
});

if (($pos = strpos($uri, '?')) !== false) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($method, $uri);  
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo $templates->render('404');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo $templates->render('404');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        try {
            echo $handler(...array_values($vars));
        } catch (Exception $e) {
            echo $templates->render('404');
        }

        break;
}