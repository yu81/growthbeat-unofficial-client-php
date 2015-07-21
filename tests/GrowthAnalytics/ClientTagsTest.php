<?php

namespace GrowthBeatUnOfficial\Tests\GrowthAnalytics;

class ClientTagsTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
    }

    public function testExecuteFail()
    {
        $clientTags    = new \GrowthBeatUnOfficial\GrowthAnalytics\ClientTags("", "", "", "");
        $executeResult = false;
        try {
            $executeResult = $clientTags->execute();
        } catch (\Exception $ex) {
            $executeResult = false;
        } finally {
            $this->assertFalse($executeResult);
        }
    }
}
