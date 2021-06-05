<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/', [
    '_controller' => 'App\Controller\PageController::home'
]));

$routes->add('about', new Route('/about', [
    '_controller' => 'App\Controller\PageController::about'
]));

$routes->add('contact', new Route('/contact', [
    '_controller' => 'App\Controller\PageController::contact'
]));

$routes->add('hello', new Route('/hello/{name}/{age}', [
    'name' => 'Mec',
    'age' => "l'age que tu as",
    '_controller' => 'App\Controller\GreetingController::hello'
]));

$routes->add('bye', new Route('/bye', [
    '_controller' => 'App\Controller\GreetingController::bye'
]));

return $routes;
