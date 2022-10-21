<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\City;

class CityTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new City();
        $this->assertInstanceOf(City::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new City();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}