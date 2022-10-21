<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\MonthlyIncome;

class MonthlyIncomeTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new MonthlyIncome();
        $this->assertInstanceOf(MonthlyIncome::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new MonthlyIncome();
        $model->set(1234);
        $this->assertEquals(1234, $model->get());
    }

    public function testExceptionIsThrownIfInvalidType(): void
    {
        $this->expectException(\TypeError::class);
        $model = new MonthlyIncome();
        $model->set("foobar");
    }

    public function testExceptionIsThrownIfValueIsZero(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new MonthlyIncome();
        $model->set(0);
    }

}