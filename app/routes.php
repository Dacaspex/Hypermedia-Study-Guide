<?php

/** @var $routes \FastRoute\RouteCollector */

$routes->addRoute('GET', '/', function() {
    $ctrl = new HomeController();
    return $ctrl->index();
});

$routes->addRoute('GET', '/{programSlug}/{pageSlug}', function($programSlug, $pageSlug) {
    $ctrl = new ContentController();
    return $ctrl->index($programSlug, $pageSlug);
});