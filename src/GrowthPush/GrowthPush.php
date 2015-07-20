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
     * @param string $token
     * @param string $os
     *
     * @return \GrowthPush\Client
     */
    public function createClient($token, $os)
    {
        /** @var \GrowthBeatUnOfficial\GrowthPush\Client $client */
        $client = new \GrowthBeatUnOfficial\GrowthPush\Client($token, $os);

        return $client->save($this->_growthPush);
    }

    /**
     * @param \GrowthPush\Client|string $client string の場合はtoken
     * @param string                    $name
     * @param string                    $value
     *
     * @return \GrowthBeatUnOfficial\GrowthPush\Tag
     */
    public function createTag($client, $name, $value = null)
    {
        $tag = new \GrowthBeatUnOfficial\GrowthPush\Tag($client, $name, $value);

        return $tag->save($this->_growthPush);
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
