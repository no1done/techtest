<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\LoanTerm;

class LoanTermTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new LoanTerm();
        $this->assertInstanceOf(LoanTerm::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new LoanTerm();
        $model->set(12.5);
        $this->assertEquals(12, $model->get());
    }

    public function testExceptionIsThrownIfNegativeValue(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new LoanTerm();
        $model->set(-12);
    }

    public function testExceptionIsThrownIfZero(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new LoanTerm();
        $model->set(0);
    }

}