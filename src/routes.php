<?php

use App\Controller\GreetingController;
use App\Controller\PageController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/', [
    '_controller' => [new PageController(), 'home']
]));

$routes->add('about', new Route('/about', [
    '_controller' => [new PageController(), 'about']
]));

$routes->add('contact', new Route('/contact', [
    '_controller' => [new PageController(), 'contact']
]));

$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => [new GreetingController(), 'hello']
]));

$routes->add('bye', new Route('/bye', [
    '_controller' => [new GreetingController(), 'bye']
]));

return $routes;
