<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $tracks = [
            ['song'=>'Track1', 'artist' => 'Coolio'],
            ['song'=>'Track2', 'artist' => 'Coolio'],
            ['song'=>'Track3', 'artist' => 'Coolio'],
            ['song'=>'Track4', 'artist' => 'Coolio'],
            ['song'=>'Track5', 'artist' => 'Coolio'],
            ['song'=>'Track6', 'artist' => 'Coolio'],
            ['song'=>'Track7', 'artist' => 'Coolio'],
            ['song'=>'Track8', 'artist' => 'Coolio'],
        ];
        return $this->render('homepage.html.twig',[
            'title' => 'PB  James',
            'tracks' => $tracks,
        ]);;
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All';
        }
        return new Response('Breakup ' . $title);
    }

}