<?php


namespace App\Service;


class Loader
{
    /**
     * @param string $url
     * @return string
     */
    public function loadHTML(string $url): string
    {
        $optionsArray = array(
            CURLOPT_AUTOREFERER => true,
            CURLOPT_COOKIESESSION => false,
            CURLOPT_HTTPGET => true,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_BINARYTRANSFER => true,
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, $optionsArray);

        $result = curl_exec($ch);
        curl_close($ch);

        if ($result === false) {
            throw new \InvalidArgumentException('Cant load HTML');
        } else {
            return $result;
        }
    }
}