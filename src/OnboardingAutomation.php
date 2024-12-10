<?php

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\Remote\DesiredCapabilities;

require_once 'Config.php';

class OnboardingAutomation
{
    private $driver;

    public function __construct()
    {
        $this->driver = RemoteWebDriver::create(Config::LT_GRID_URL, DesiredCapabilities::chrome());
    }

    public function startOnboarding()
    {
        $this->driver->get("https://codelosophy.com/demo-bfore/");

        $this->driver->findElement(WebDriverBy::cssSelector("selector_type"))->click();
        $this->driver->findElement(WebDriverBy::cssSelector("selector_size"))->click();
        $this->driver->findElement(WebDriverBy::cssSelector("selector_team"))->click();
    }

    public function cancelOnboarding()
    {
        $this->driver->findElement(WebDriverBy::cssSelector("cancel_button"))->click();
    }

}