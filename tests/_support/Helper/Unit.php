<?php

namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Module;

class Unit extends Module
{
    public function assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message = '')
    {
        \PHPUnit_Framework_Assert::assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message = '');
    }
}
