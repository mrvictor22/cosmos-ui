<?php
namespace App\Controller\Api;

use App\Entity\Summary; // Asegúrate de que la entidad Summary esté correctamente configurada
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class ApiController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/api/summary', name: 'api_summary', methods: ['GET'])]
    public function summary(): JsonResponse
    {
        // Consulta para obtener todos los datos de la tabla Summary
        $summaryRepository = $this->entityManager->getRepository(Summary::class);
        $summaries = $summaryRepository->findAll();

        // Preparar los datos en un formato que sea útil para los gráficos
        $data = [];
        foreach ($summaries as $summary) {
            $data[] = [
                'id' => $summary->getId(),
                'total_users' => $summary->getTotalUsers(),
                'extraction_date' => $summary->getExtractionDate()->format('Y-m-d H:i:s'),
            ];
        }

        return $this->json($data);
    }
}

