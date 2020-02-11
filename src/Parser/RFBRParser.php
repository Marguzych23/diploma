<?php


namespace App\Parser;

use App\Entity\Competition;
use DateTime;
use Exception;
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
        $crawler->addHtmlContent($this->convertToUTF8($data));

        $competition->setName($crawler->filterXPath('.//h1[@class="title js-print-title title"]')->text());

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
                && $this->isGrantSize($item->textContent)) {
                $childText = $item->textContent . (strpos($item->textContent, ':') !== false ? '' : ':');
                $competition->setGrantSize(trim(str_replace($childText, '', $item->parentNode->textContent)));
            } else {
                var_dump($item->textContent);
            }

        }

//        $industry        = '';
//        $resultsDate     = '';
//        $applicationForm = '';
//        $requirements    = '';
        $competition->setResultsDate(new DateTime());
        $competition->setApplicationForm('');
        $competition->setRequirements('');

        return $competition;
    }

    /**
     * @param string $data
     *
     * @return false|string|string[]|null
     */
    protected function convertToUTF8(string $data)
    {
        return mb_convert_encoding($data, "UTF-8");
    }

    /**
     * @param string $data
     *
     * @return bool
     */
    protected function isGrantSize(string $data)
    {
        foreach (self::GRANT_SIZE_KEYS as $GRANT_SIZE_KEY) {
            if (strpos($data, $GRANT_SIZE_KEY) !== false) {
                return true;
            }
        }

        return false;
    }
}