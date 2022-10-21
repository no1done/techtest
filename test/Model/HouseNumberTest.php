<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\HouseNumber;

class HouseNumberTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new HouseNumber();
        $this->assertInstanceOf(HouseNumber::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new HouseNumber();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}