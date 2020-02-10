<?php


namespace App\Controller;


use App\Service\Parser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    /**
     * @Route("/parser", name="app_parser")
     * @return Response
     */
    public function loginAction(): Response
    {
        $parser = new Parser();

        $url = 'https://www.rfbr.ru/rffi/ru/classifieds/o_2098490';
        $data = $parser->getHTML($url);

        return $this->json([
            'url' => $url,
            'data' => strlen($data),
        ]);
    }
}