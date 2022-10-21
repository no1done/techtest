<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\IpAddress;

class IpAddressTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new IpAddress();
        $this->assertInstanceOf(IpAddress::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new IpAddress();
        $model->set('192.168.0.1');
        $this->assertEquals('192.168.0.1', $model->get());
    }

    public function testRuntimeExceptionThrownIfInvalidIP(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new IpAddress();
        $model->set('foobar');
    }

}