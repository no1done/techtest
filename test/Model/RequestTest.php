<?php

namespace ApplicationTest\Model;

use Application\Model\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase {

    public function testRequestModelStaticClassStringCorrect(): void
    {
        $this->assertEquals("Application\Model\Request", Request::class);
    }

    public function testRequestObjectCanBeCreated(): void
    {
        $request = new Request();
        $this->assertInstanceOf(Request::class, $request);
    }

}