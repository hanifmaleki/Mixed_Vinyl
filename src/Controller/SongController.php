<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{

    #[Route(path:"/api/songs/{id<\d+>}", methods:["GET"])]
    public function getSong(int $id, LoggerInterface $logger): JsonResponse
    {
        $song = [
            'id' => $id,
            'name' => 'Waterfall',
            'url' => 'https://',
        ];

        $logger->info('Returning API response for song {song}', [
            'song' => $id,
        ]);

        return new JsonResponse($song); 
    }
}
