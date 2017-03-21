<?php

/** @var $routes \FastRoute\RouteCollector */

include_once(__DIR__ . '/controllers/ContentController.php');
include_once (__DIR__ . '/controllers/HomeController.php');

$templates = new \League\Plates\Engine(__DIR__ . '/views');

$routes->addRoute('GET', '/', function() use ($templates) {
    $ctrl = new HomeController($templates);
    return $ctrl->index();
});

$routes->addRoute('GET', '/{programSlug}/{pageSlug}', function($programSlug, $pageSlug) use ($templates) {
    $ctrl = new ContentController($templates, null);
    return $ctrl->index($programSlug, $pageSlug);
});