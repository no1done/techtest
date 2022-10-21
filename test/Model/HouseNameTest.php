<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\HouseName;

class HouseNameTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new HouseName();
        $this->assertInstanceOf(HouseName::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new HouseName();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}