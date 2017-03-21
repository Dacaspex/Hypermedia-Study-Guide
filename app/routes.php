<?php

/** @var $routes \FastRoute\RouteCollector */

include_once(__DIR__ . '/controllers/ContentController.php');

$templates = new \League\Plates\Engine(__DIR__ . '/views');

$routes->addRoute('GET', '/', function() {
    $ctrl = new HomeController();
    return $ctrl->index();
});

$routes->addRoute('GET', '/{programSlug}/{pageSlug}', function($programSlug, $pageSlug) {
    $ctrl = new ContentController($views, null);
    return $ctrl->index($programSlug, $pageSlug);
});