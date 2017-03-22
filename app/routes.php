<?php

/** @var $routes \FastRoute\RouteCollector */

$templates = new \League\Plates\Engine(__DIR__ . '/views');

$routes->addRoute('GET', '/', function() use ($templates, $connection) {
    $ctrl = new HomeController($templates, $connection);
    return $ctrl->index();
});

$routes->addRoute('GET', '/{programSlug}/{pageSlug}', function($programSlug, $pageSlug) use ($templates, $connection) {
    $ctrl = new ContentController($templates, new ContentRetriever($connection));
    return $ctrl->index($programSlug, $pageSlug);
});

$routes->addRoute('GET', '/{programSlug}/curriculum', function ($programSlug) use ($templates, $connection) {
   $ctrl = new CurriculumController($templates, $connection);
   return $ctrl->index($programSlug);
});