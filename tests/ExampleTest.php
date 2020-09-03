<?php

namespace PdaApi\PhpClient\Tests;

use PdaApi\PhpClient\Balance\Balance;
use PdaApi\PhpClient\Balance\Properties;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $balance = new Balance();
        $balance->setId('id');
        $properties = new Properties();
        $properties->setAmount(1.1);
        $properties->setCurrency(1);
        $properties->setIsActive(true);
        $properties->setNodeId(1);
        $properties->setUserId(1);
        $balance->setProperties($properties);
        $serialized = $balance->serializeToString();
        $serializedJson = $balance->serializeToJsonString();
        $this->assertEquals('', $serializedJson);
    }
}
