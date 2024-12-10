<?php

use Facebook\WebDriver\WebDriverBy;

class ThreatsValidation
{
    private $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }
    public function countThreats(){
        $this->driver->get("https://codelosophy.com/demo-bfore/threats");
        $elements = $this->driver->findElement(WebDriverBy::className("result-card"));
        return count($elements);
    }

    public function validateThreats($expectedThreat){
        $firstThreat= $this->driver->findElement(WebDriverBy::className("result-card"))->getText();
        return $firstThreat === $expectedThreat;
    }
}