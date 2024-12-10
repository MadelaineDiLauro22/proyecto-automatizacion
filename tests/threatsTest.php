<?php

use Facebook\WebDriver\Remote\RemoteWebDriver;
use PHPUnit\Framework\TestCase;

class ThreatsTest extends TestCase{
    public function testThreatValidation(){
        $driver = RemoteWebDriver::create(Config::LT_GRID_URL, Config::getCapabilities());
        $threats = new ThreatsValidation($driver);
        $this->assertEquals(4,$threats->countThreats());
    }
}