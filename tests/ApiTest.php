<?php

use Cedric\OssTd2\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetRandomNumber(){
        $api = new Api();
        $this->assertIsInt(0, $api->getRandomNumber());
        $this->assertGreaterThanOrEqual(0, $api->getRandomNumber());
        $this->assertLessThanOrEqual(100 , $api->getRandomNumber());
    }
}


