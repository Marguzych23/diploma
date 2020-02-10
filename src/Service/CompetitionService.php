<?php


namespace App\Service;


use App\Parser\Parser;

class CompetitionService
{
    protected DataService $dataService;
    protected Parser      $parser;

    public function __construct(DataService $dataService, Parser $parser)
    {
        $this->dataService = $dataService;
        $this->parser      = $parser;
    }

}