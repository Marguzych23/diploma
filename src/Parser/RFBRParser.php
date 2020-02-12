<?php


namespace App\Parser;

use App\Entity\Competition;
use App\Exception\CompetitionException;
use DateTime;
use Exception;
use InvalidArgumentException;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class RFBRParser
 * @package App\Service
 *
 * Russian Foundation for Basic Research
 */
class RFBRParser extends Parser
{
    const DEADLINE_KEY    = 'Дата и время окончания подачи заявок:';
    const GRANT_SIZE_KEYS = [
        'Максимальный объем финансирования проекта',
        'Максимальный размер гранта',
    ];
    const INDUSTRIES_KEYS = ['(', ')'];

    /**
     * @param string $data
     *
     * @return Competition
     * @throws Exception
     */
    public function parse(string $data) : Competition
    {
        $competition = new Competition();

        $crawler = new Crawler();
        $crawler->addHtmlContent($data, 'windows-1251');

//        Name
        $competition->setName($crawler->filterXPath('.//h1[@class="title js-print-title title"]')->text());

//        Industries
        $tempIndustries = [];
        try {
            $industriesContent = $crawler->filterXPath('.//div[@id="selectable-content"]/ul/li');

            foreach ($industriesContent->getIterator() as $item) {
                $tempIndustries[] = $item->textContent;
            }
        } catch (InvalidArgumentException $exception) {
        }

//        Other
        $selectableContent = $crawler->filterXPath('.//div[@id="selectable-content"]/p/strong');
        foreach ($selectableContent->getIterator() as $item) {
            if ($competition->getDeadline() === null
                && strpos($item->textContent, self::DEADLINE_KEY) !== false
            ) {
                $deadline = substr(
                    trim(str_replace($item->textContent, '', $item->parentNode->textContent)),
                    0, 16
                );
                try {
                    $competition->setDeadline(new DateTime($deadline));
                } catch (Exception $e) {
                }
            } elseif ($competition->getGrantSize() === null
                && $this->isInArray($item->textContent, self::GRANT_SIZE_KEYS)
            ) {
                $childText = $item->textContent . (strpos($item->textContent, ':') !== false ? '' : ':');
                $competition->setGrantSize(trim(str_replace($childText, '', $item->parentNode->textContent)));
            } elseif ($this->isInArray($item->textContent, self::INDUSTRIES_KEYS, true)) {  // industry
                $tempIndustries[] = $item->textContent;
            }
        }

        if (empty($tempIndustries)) {
            throw new CompetitionException();
        } else {
            $industries = [];
            foreach ($tempIndustries as $tempIndustry) {
                foreach ($this->getSupportSiteIndustries() as $supportSiteIndustry) {
                    $isMatch = false;
                    foreach ($supportSiteIndustry->getKeywords() as $keyword) {
                        if (strpos($tempIndustry, $keyword) !== false) {
                            $isMatch = true;
                            break;
                        }
                    }
                    if ($isMatch) {
                        $industries[] = $supportSiteIndustry->getIndustry();
                    }
                }
            }
            $competition->setIndustries($industries);
        }

        return $competition;
    }

    /**
     * @param string $data
     *
     * @param array  $keys
     * @param bool   $fullMatch
     *
     * @return bool
     */
    protected function isInArray(string $data, array $keys = [], bool $fullMatch = false)
    {
        foreach ($keys as $key) {
            if (strpos($data, $key) !== false) {
                if (!$fullMatch) {
                    return true;
                }
            } elseif ($fullMatch) {
                return false;
            }
        }

        return $fullMatch;
    }
}