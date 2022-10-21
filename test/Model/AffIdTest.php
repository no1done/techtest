<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\AffId;

class AffIdTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new AffId();
        $this->assertInstanceOf(AffId::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new AffId();
        $model->set(123);
        $this->assertEquals(123, $model->get());
    }

    public function testExceptionIsThrownIfZeroSet(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new AffId();
        $model->set(0);
    }

    public function testExceptionIsThrownIfNegativeValueSet(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new AffId();
        $model->set(-123);
    }

    public function testExceptionIsThrownIfStringValueSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new AffId();
        $model->set("this is a string");
    }
}