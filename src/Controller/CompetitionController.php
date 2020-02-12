<?php


namespace App\Controller;


use App\Entity\Competition;
use App\Entity\Industry;
use App\Entity\SupportSite;
use App\Entity\SupportSitesIndustry;
use App\Service\Competition\RFBRService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetitionController extends AbstractController
{

    /**
     * @Route("/competition/add", name="add_competition")
     * @param RFBRService            $RFBRService
     *
     * @param EntityManagerInterface $entityManager
     *
     * @return Response
     */
    public function parseAction(
        RFBRService $RFBRService
    ) : Response {
        $status  = true;
        $message = 'OK';

        try {
            $RFBRService->run();
        } catch (Exception $e) {
            $status  = false;
            $message = $e->getMessage();
        }

        return $this->json([
            'status'  => $status,
            'message' => $message,
        ]);
    }
}