<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\FirstName;

class FirstNameTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new FirstName();
        $this->assertInstanceOf(FirstName::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new FirstName();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

    public function testRuntimeExceptionIsThrownIfNameLessThanTwoChar(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new FirstName();
        $model->set('f');
    }

}