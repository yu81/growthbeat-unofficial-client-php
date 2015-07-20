<?php

namespace GrowthBeatUnOfficial\GrowthPush;

class Client
{
    /** @var \GrowthPush\Client $_client */
    private $_client = null;

    public function __construct($token, $os = null)
    {
        $this->_client = new \GrowthPush\Client($token, $os);
    }

    /**
     * @param \GrowthPush $growthPush
     *
     * @throws \GrowthPush\GrowthPushException
     *
     * @return \GrowthBeatUnOfficial\GrowthPush\Client
     */
    public function save($growthPush)
    {
        $this->_client = $this->_client->save($growthPush);

        return $this;
    }

    public function getId()
    {
        return $this->_client->getId();
    }

    public function getApplicationId()
    {
        return $this->_client->getApplicationId();
    }

    public function getCode()
    {
        return $this->_client->getCode();
    }

    public function getToken()
    {
        return $this->_client->getToken();
    }

    public function getOs()
    {
        return $this->_client->getOs();
    }

    public function getEnvironment()
    {
        return $this->_client->getEnvironment();
    }

    public function getStatus()
    {
        return $this->_client->getStatus();
    }

    public function getCreated()
    {
        return $this->_client->getCreated();
    }

    public function getGrowthPushClient()
    {
        return $this->_client;
    }
}
