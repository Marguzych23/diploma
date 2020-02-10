<?php


namespace App\Service\Competition;

use App\Parser\Parser;
use App\Service\DataLoadService;
use Doctrine\ORM\EntityManagerInterface;

class RFBRService extends BaseService
{
    /**
     * RFBRService constructor.
     *
     * @param Parser                 $bfbrParser
     * @param DataLoadService        $dataLoadService
     * @param EntityManagerInterface $entityManagerInterface
     */
    public function __construct(
        Parser $bfbrParser,
        DataLoadService $dataLoadService,
        EntityManagerInterface $entityManagerInterface
    ) {
        parent::__construct($bfbrParser, $dataLoadService, $entityManagerInterface);
    }
}