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

    private function set($attributes)
    {

        if (array_key_exists('id', $attributes)) {
            $this->id = $attributes['id'];
        }
        if (array_key_exists('applicationId', $attributes)) {
            $this->applicationId = $attributes['applicationId'];
        }
        if (array_key_exists('code', $attributes)) {
            $this->code = $attributes['code'];
        }
        if (array_key_exists('token', $attributes)) {
            $this->token = $attributes['token'];
        }
        if (array_key_exists('os', $attributes)) {
            $this->os = $attributes['os'];
        }
        if (array_key_exists('environment', $attributes)) {
            $this->environment = $attributes['environment'];
        }
        if (array_key_exists('status', $attributes)) {
            $this->status = $attributes['status'];
        }
        if (array_key_exists('created', $attributes)) {
            $this->created = $attributes['created'];
        }

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
