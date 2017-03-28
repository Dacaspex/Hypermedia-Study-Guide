<?php

/** @var $routes \FastRoute\RouteCollector */

$routes->addRoute('GET', '/', function() use ($templates, $connection) {
    $ctrl = new HomeController($templates, $connection);
    return $ctrl->index();
});

$routes->addRoute('POST', '/lang', function() {
    if (!isset($_POST['lang'])) {
        return;
    }

    $lang = $_POST['lang'];
    if ($lang !== Language::EN && $lang !== Language::NL) {
        return;
    }

    Language::setLocale($lang);
});

$routes->addRoute('GET', '/{type:^bachelor$|^pre-master$|^master$}/{programSlug}/{pageSlug}', function($type, $programSlug, $pageSlug) use ($templates, $connection) {
    $ctrl = new ContentController($templates, new ContentRetriever($connection));
    return $ctrl->index($type, $programSlug, $pageSlug);
});

$routes->addRoute('GET', '/{programSlug}/curriculum', function ($programSlug) use ($templates, $connection) {
   $ctrl = new CurriculumController($templates, $connection);
   return $ctrl->index($programSlug);
});