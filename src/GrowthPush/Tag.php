<?php

namespace GrowthBeatUnOfficial\GrowthPush;

class Tag
{
    /** @var \GrowthPush\Tag $_tag */
    private $_tag = null;

    public function __construct($arg0, $arg1 = null, $arg2 = null)
    {
        $this->_tag = new \GrowthPush\Tag($arg0, $arg1, $arg2);
    }

    public function getName()
    {
        return $this->_tag->getName();
    }

    public function getTagId()
    {
        return $this->_tag->getTagId();
    }

    public function getClientId()
    {
        return $this->_tag->getClientId();
    }

    public function getValue()
    {
        return $this->_tag->getValue();
    }

    /**
     * @param \GrowthBeatUnOfficial\GrowthPush\GrowthPush $growthPush
     * @param                                             $tagId
     * @param null                                        $exclusiveClientId
     * @param string                                      $order
     * @param int                                         $limit
     *
     * @return array
     * @throws \GrowthPush\GrowthPushException
     */
    public static function fetch(
        $growthPush,
        $tagId,
        $exclusiveClientId = null,
        $order = \GrowthPush::ORDER_ASCENDING,
        $limit = 1000
    ) {
        return \GrowthPush\Tag::fetch($growthPush, $tagId, $exclusiveClientId, $order, $limit);
    }

    /**
     * @param \GrowthPush $growthPush
     *
     * @return \GrowthBeatUnOfficial\GrowthPush\Tag
     */
    public function save($growthPush)
    {
        $this->_tag = $this->_tag->save($growthPush);

        return $this;
    }

    public function getGrowthPushTag()
    {
        return $this->_tag;
    }
}
