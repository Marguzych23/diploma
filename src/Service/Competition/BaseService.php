<?php


namespace App\Service\Competition;


use App\Entity\Competition;
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
        $data = $this->dataLoadService->loadFromURL($url);

        $competition = $this->parser->parse($data);

        if ($this->entityManager->getRepository(Competition::class)->findOneBy([
                'hash' => $this->generateCompetitionHash($competition),
            ]) === null) {
            $this->entityManager->persist($competition);
        }
    }

    /**
     * @param Competition $competition
     *
     * @return string
     */
    public function generateCompetitionHash(Competition $competition)
    {
        return md5(serialize($competition));
    }
}