<?php

/** @var $routes \FastRoute\RouteCollector */

$routes->addRoute('GET', '/', 'HomeController@index');
$routes->addRoute('GET', '/{programSlug}/{pageSlug}', 'ProgramController@index');