<?php

use App\Controller\GreetingController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('accueil', new Route('/'));
$routes->add('about', new Route('/about'));
$routes->add('contact', new Route('/contact'));
$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => [new GreetingController(), 'hello']
]));
$routes->add('bye', new Route('/bye'));
$routes->add('about', new Route('/about'));

return $routes;
