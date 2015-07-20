<?php

namespace GrowthBeatUnOfficial\GrowthAnalytics;

class ClientTags extends \GrowthBeatUnOfficial\GrowthAnalytics\Base
{
    const BASE_URL = 'https://api.analytics.growthbeat.com/1/client_tags';

    private $_clientId     = null;
    private $_tagId        = null;
    private $_value        = null;
    private $_credentialId = null;

    public function __construct($clientId, $tagId, $value, $credentialId)
    {
        $this->_clientId     = $clientId;
        $this->_tagId        = $tagId;
        $this->_value        = $value;
        $this->_credentialId = $credentialId;
    }

    /**
     * @return string[]
     */
    protected function getParams()
    {
        $params = [
            'clientId'     => $this->_clientId,
            'tagId'        => $this->_tagId,
            'value'        => $this->_value,
            'credentialId' => $this->_credentialId,
        ];

        return $params;
    }
}
