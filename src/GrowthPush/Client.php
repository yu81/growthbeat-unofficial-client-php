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
     * @return \GrowthBeatUnOfficial\GrowthPush\Client
     * @throws \GrowthPush\GrowthPushException
     */
    public function save($growthPush)
    {
        $this->_client = $this->_client->save($growthPush);

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getApplicationId()
    {
        return $this->applicationId;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getOs()
    {
        return $this->OS;
    }

    public function getEnvironment()
    {
        return $this->environment;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCreated()
    {
        return $this->created;
    }
}
