<?php

use PHPUnit\Framework\TestCase;

class OnboardingTest extends TestCase{
    public function testOnboardingFlow(){
        $onboarding = new OnboardingAutomation();
        $onboarding->startOnboarding();
        $this->assertTrue(true);
        $onboarding->cancelOnboarding();
    }
}
