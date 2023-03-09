<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: PB and Jams');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            return new Response('Genre ' . $slug);
        } else {
            return new Response('All Genre');
        }
    }

    #[Route('/allright')]
    public function allrightpage()
    {
        die('Wow, that\'s kind of cool!');
    }
}
