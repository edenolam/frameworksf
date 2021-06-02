<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PageController
{
    public function home(): Response
    {
        // integrer du html
        ob_start();
        include __DIR__ . '/../pages/home.php';
        //renvoi response
        return new Response(ob_get_clean());
    }

    public function about(): Response
    {
        // integrer du html
        ob_start();
        include __DIR__ . '/../pages/about.php';
        //renvoi response
        return new Response(ob_get_clean());
    }

    public function contact(): Response
    {
        // integrer du html
        ob_start();
        include __DIR__ . '/../pages/contact.php';
        //renvoi response
        return new Response(ob_get_clean());
    }
}
