<?php


namespace App\Controller;


use App\Exception\CompetitionException;
use App\Service\Competition\RFBRService;
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
            $url = $request->request->get('url', 'https://www.rfbr.ru/rffi/ru/classifieds/o_2098490');
            $RFBRService->addCompetitionByURL($url);
        } catch (CompetitionException $e) {
            $status  = false;
            $message = $e->getMessage();
        }
        return $this->json([
            'status'  => $status,
            'message' => $message,
        ]);
    }


}