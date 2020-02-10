<?php


namespace App\Service;


use App\Parser\Parser;

class CompetitionService
{
    protected Loader $loader;
    protected Parser $parser;

    public function __construct(Loader $loader, Parser $parser)
    {
        $this->loader = $loader;
        $this->parser = $parser;
    }

}