<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\StreetName;

class StreetNameTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new StreetName();
        $this->assertInstanceOf(StreetName::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new StreetName();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}