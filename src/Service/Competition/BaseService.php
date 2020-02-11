<?php


namespace App\Service\Competition;


use App\Entity\Competition;
use App\Entity\Industry;
use App\Exception\CompetitionException;
use App\Parser\Parser;
use App\Service\DataLoadService;
use Doctrine\ORM\EntityManagerInterface;

abstract class BaseService
{
    protected DataLoadService          $dataLoadService;
    protected Parser                   $parser;
    protected EntityManagerInterface   $entityManager;

    public function __construct(
        Parser $parser,
        DataLoadService $dataLoadService,
        EntityManagerInterface $entityManager
    ) {
        $this->parser          = $parser;
        $this->dataLoadService = $dataLoadService;
        $this->entityManager   = $entityManager;
    }

    /**
     * @param string|null $url
     *
     * @throws CompetitionException
     */
    public function addCompetitionByURL(?string $url)
    {
//        $data = $this->dataLoadService->loadFromURL($url);
        $data = $this->dataLoadService->getHTML();

        $competition = $this->parser->parse($data);

//        if ($this->entityManager->getRepository(Competition::class)->findOneBy([
//                'requirements' => $competition->getRequirements(),
//            ]) === null) {
            var_dump($competition);

//            $industry = $this->entityManager->getRepository(Industry::class)->findOneBy([
//                'id' => 1,
//            ]);
//            $competition->setIndustry($industry);
//
//            $this->entityManager->persist($competition);
//            $this->entityManager->flush();
//        }
    }
}