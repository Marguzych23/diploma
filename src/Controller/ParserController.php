<?php


namespace App\Controller;


use App\Service\CompetitionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParserController extends AbstractController
{

    /**
     * @Route("/parser", name="app_parser")
     * @return Response
     */
    public function parseAction(): Response
    {
        $url = 'https://www.rfbr.ru/rffi/ru/classifieds/o_2098490';
//        $data = $parser->getHTML($url);

        return $this->json([
            'url' => $url,
//            'data' => strlen($data),
        ]);
    }
}