<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\FlatNumber;

class FlatNumberTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new FlatNumber();
        $this->assertInstanceOf(FlatNumber::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new FlatNumber();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}