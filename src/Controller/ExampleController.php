<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ExampleController extends AbstractController
{
    #[Route('/api/example', methods:'get')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Hello world!',
            'status' => 'success',
        ]);
    }
}
