<?php

/** @var $routes \FastRoute\RouteCollector */

$routes->addRoute('GET', '/', function() use ($templates, $connection) {
    $ctrl = new HomeController($templates, $connection);
    return $ctrl->index();
});

$routes->addRoute('GET', '/{type}/{programSlug}/{pageSlug}', function($type, $programSlug, $pageSlug) use ($templates, $connection) {
    $ctrl = new ContentController($templates, new ContentRetriever($connection));
    return $ctrl->index($type, $programSlug, $pageSlug);
});

$routes->addRoute('GET', '/{type}/{programSlug}/curriculum', function ($type, $programSlug) use ($templates, $connection) {
   $ctrl = new CurriculumController($templates, new ContentRetriever($connection), new CurriculumRetriever($connection));
   return $ctrl->index($type, $programSlug, 'curriculum');
});