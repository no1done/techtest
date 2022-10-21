<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\EmploymentStartDate;

class EmploymentStartDateTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new EmploymentStartDate();
        $this->assertInstanceOf(EmploymentStartDate::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new EmploymentStartDate();
        $model->set(new \DateTime("01-01-2020"));
        $this->assertInstanceOf(\DateTime::class, $model->get());
        $this->assertEquals('2020-01-01', $model->get()->format('Y-m-d'));
    }

    public function testExceptionIsThrownIfFutureDateSubmitted(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new EmploymentStartDate();
        $model->set(new \DateTime("01-01-2050"));
    }

}