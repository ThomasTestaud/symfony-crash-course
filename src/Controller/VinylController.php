<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'track1', 'artist' => 'artist1'],
            ['song' => 'track2', 'artist' => 'artist2'],
            ['song' => 'track3', 'artist' => 'artist3'],
            ['song' => 'track4', 'artist' => 'artist4']

        ];

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'Cross Records',
            'tracks' => $tracks
        ]);
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

    #[Route('/about')]
    public function allrightpage(): Response
    {
        $table = [
            'first' => ['one', 'two', 'three', '...'],
            'second' => 'Second variable hello world'
        ];

        return $this->render('vinyl/about.html.twig', [
            'title' => 'About',
            'table' => $table
        ]);
    }
}
