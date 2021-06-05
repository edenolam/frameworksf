<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();
$routes = require __DIR__ . '/../src/routes.php';
$context = new RequestContext();
$context->fromRequest($request);
$urlMatcher = new UrlMatcher($routes, $context);

$controllerResolver = new ControllerResolver();

$argumentResolver = new ArgumentResolver();

try {
    $request->attributes->add($urlMatcher->match($request->getPathInfo()));
    // $controller = le callable
    $controller = $controllerResolver->getController($request);
    $arguments = $argumentResolver->getArguments($request, $controller);
    $response = call_user_func_array($controller, $arguments);
} catch (ResourceNotFoundException $e) {
    $response = new Response("la page demandé n'existe pas", 404);
} catch (Exception $e) {
    $response = new Response("erreur sur le serveur", 500);
}

$response->send();
