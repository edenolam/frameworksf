<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GreetingController{
    public function hello(Request $request, $name, $age): Response
    {
        $name = $request->attributes->get('name');
        // integrer du html
        ob_start();
        include __DIR__ . '/../pages/hello.php';
        //renvoi response
        return new Response(ob_get_clean());
    }

    public function bye(): Response
    {
        // integrer du html
        ob_start();
        include __DIR__ . '/../pages/bye.php';
        //renvoi response
        return new Response(ob_get_clean());
    }
}
