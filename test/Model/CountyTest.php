<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\County;

class CountyTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new County();
        $this->assertInstanceOf(County::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new County();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

    public function testRuntimeExceptionIsThrownIfLessThanTwoChar(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new County();
        $model->set('f');
    }

}