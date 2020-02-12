<?php


namespace App\Controller;


use App\Service\Competition\RFBRService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetitionController extends AbstractController
{

    /**
     * @Route("/competition/add", name="add_competition")
     * @param Request     $request
     * @param RFBRService $RFBRService
     *
     * @return Response
     */
    public function parseAction(
        Request $request,
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