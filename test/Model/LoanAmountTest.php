<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\LoanAmount;

class LoanAmountTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new LoanAmount();
        $this->assertInstanceOf(LoanAmount::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new LoanAmount();
        $model->set(123.45);
        $this->assertEquals(123.45, $model->get());
    }

    public function testExceptionIsThrownIfNegativeValueSet(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new LoanAmount();
        $model->set(-123.45);
    }

    public function testExceptionIsThrownIfZeroSet(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new LoanAmount();
        $model->set(0);
    }

    public function testExceptionIsThrownIfWrongType(): void
    {
        $this->expectException(\TypeError::class);
        $model = new LoanAmount();
        $model->set("foobar");
    }

}