<?php

class Config
{
    public const LT_USERNAME = 'madeludmila';
    public const LT_ACCESS_KEY = 'aW00OrcRJPxjLBUICMghKjbogTsqPMpmisGPkL5jHYidp2iUxs';
    public const LT_GRID_URL = 'https://hub.lambdatest.com/wd/hub';

    public static function getCapabilities()
    {
        return [
            "browseName" => "chrome",
            "browserVersion" => "latest",
            "platform" => "win10",
        ];
    }
}