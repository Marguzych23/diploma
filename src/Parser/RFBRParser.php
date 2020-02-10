<?php


namespace App\Parser;

use App\Entity\Competition;

/**
 * Class RFBRParser
 * @package App\Service
 *
 * Russian Foundation for Basic Research
 */
class RFBRParser extends Parser
{
    public function parse(string $data) : Competition
    {
        $competition = new Competition();

        $competition->setName('asddsa');

        return $competition;
    }
}