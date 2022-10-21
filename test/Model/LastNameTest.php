<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\LastName;

class LastNameTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new LastName();
        $this->assertInstanceOf(LastName::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new LastName();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

    public function testRuntimeExceptionIsThrownIfValueLessThanTwoChar(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new LastName();
        $model->set('f');
    }

}