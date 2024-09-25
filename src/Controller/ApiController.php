<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api/summary', name: 'api_summary', methods: ['GET'])]
    public function summary(): JsonResponse
    {
        $data = ['message' => 'Summary data here'];
        return $this->json($data);
    }
}
