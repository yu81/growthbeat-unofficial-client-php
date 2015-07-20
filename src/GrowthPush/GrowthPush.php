<?php

namespace GrowthBeatUnOfficial\GrowthPush;

class GrowthPush
{
    /** @var \GrowthPush $_growthPush */
    private $_growthPush = null;

    public function __construct($aplicationId, $secret, $env = \GrowthPush::ENVIRONMENT_PRODUCTION)
    {
        $growthPush        = new \GrowthPush($aplicationId, $secret, $env);
        $this->_growthPush = $growthPush;
    }

    /**
     * @param $token
     * @param $os
     *
     * @return \GrowthPush\Client
     */
    public function createClient($token, $os)
    {
        /** @var \GrowthBeatUnOfficial\GrowthPush\Client $client */
        $client = new \GrowthBeatUnOfficial\GrowthPush\Client($client->getToken(), $client->getOs());

        return $client->save($this->_growthPush);
    }

    public function createTag($name, $value = null)
    {
        return $this->_growthPush->createTag($this->_growthPush, $name, $value);
    }

    public function createEvent($name, $value = null)
    {
        return $this->_growthPush->createEvent($this->_growthPush, $name, $value);
    }

    public function getGrowthPush()
    {
        return $this->_growthPush;
    }
}
