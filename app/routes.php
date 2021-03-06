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

$routes->addRoute('GET', '/bachelor/{programSlug}/curriculum', function ($programSlug) use ($templates, $connection) {
    $ctrl = new CurriculumController($templates, new ContentRetriever($connection), new CurriculumRetriever($connection), new LinkRetriever($connection));
    return $ctrl->index('bachelor', $programSlug, 'curriculum', $connection);
});

$routes->addRoute('GET', '/{type}/{programSlug}/{pageSlug}', function($type, $programSlug, $pageSlug) use ($templates, $connection) {
    $ctrl = new ContentController($templates, new ContentRetriever($connection), new LinkRetriever($connection));
    return $ctrl->index($type, $programSlug, $pageSlug, $connection);
});

$routes->addRoute('GET', '/search', function() use ($templates, $connection) {
    $ctrl = new SearchController($templates, $connection);
    return $ctrl->runSearch();
});