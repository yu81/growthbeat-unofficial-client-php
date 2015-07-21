<?php

namespace GrowthBeatUnOfficial\Tests\GrowthAnalytics;

class ClientTagsTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
    }

    public function testExecuteFail()
    {
        $executeResult = false;
        try {
            $clientTags    = new \GrowthBeatUnOfficial\GrowthAnalytics\ClientTags("", "", "", "");
            $executeResult = $clientTags->execute();
        } catch (\Exception $ex) {
        } finally {
            $this->assertFalse($executeResult);
            return;
        }
    }
}
