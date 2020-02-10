<?php


namespace App\Parser;


use App\Entity\Competition;

abstract class Parser
{
    abstract public function parse(string $data): Competition;
}