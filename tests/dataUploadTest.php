<?php

use Facebook\WebDriver\Remote\RemoteWebDriver;
use PHPUnit\Framework\TestCase;

class DataUploadTest extends TestCase{
    public function testUpload(){
        $driver = RemoteWebDriver::create(Config::LT_GRID_URL, Config::getCapabilities());
        $dataUpload = new DataUpload($driver);
        $this->assertTrue($dataUpload->uploadFile("/path/to/tdbank-example.tsv"));
    }
}