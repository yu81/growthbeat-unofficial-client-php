<?php

namespace GrowthBeatUnOfficial\GrowthAnalytics;

abstract class Base
{
    const BASE_URL = 'https://api.analytics.growthbeat.com/1/';
    const METHOD   = 'POST';

    public function execute()
    {
        $guzzle = new \GuzzleHttp\Client();
        $params = $this->getParams();
        try {
            $guzzleResponse = $guzzle->post($this->getUrl(), ['form_params' => $params]);
            /** @var string $responseBody */
            $responseStatus = $guzzleResponse->getStatusCode();

            return ($responseStatus === 200) ? true : false;
        } catch (\GuzzleHttp\Exception\RequestException $ex) {
            return false;
        }
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        return self::BASE_URL;
    }

    /**
     * @return string[]
     */
    protected abstract function getParams();
}
