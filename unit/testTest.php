<?php

namespace Unit;

use PHPUnit\Framework\TestCase;

class testTest extends TestCase {

    private $service;

    public function setUp() :void
    {
        parent::setUp();
        $this->service = new \Test();
    }

    public function testCanGetTest()
    {
        $this->assertEquals(1, $this->service->getTest());

    }
}