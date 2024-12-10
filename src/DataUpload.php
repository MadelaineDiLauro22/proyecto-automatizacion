<?php

use Facebook\WebDriver\WebDriverBy;

class DataUpload
{
    private $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    public function uploadFile($filePath)
    {
        $this->driver->get("https://codelosophy.com/demo-bfore/load-data");
        $uploadElement = $this->driver->findElement(WebDriverBy::cssSelector("file_input_selector"));
        $uploadElement->sendKeys($filePath);
        return $this->driver->findElement(WebDriverBy::cssSelector("success_message"))->isDisplayed();
    }
}