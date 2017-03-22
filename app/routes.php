<?php

/** @var $routes \FastRoute\RouteCollector */

//include_once(__DIR__ . '/controllers/ContentController.php');
//include_once(__DIR__ . '/controllers/HomeController.php');
//include(__DIR__ . '/services/ContentRetriever.php');

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