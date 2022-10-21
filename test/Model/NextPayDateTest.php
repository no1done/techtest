<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\NextPayDate;

class NextPayDateTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new NextPayDate();
        $this->assertInstanceOf(NextPayDate::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new NextPayDate();
        $model->set(new \DateTime("01-01-2030"));
        $this->assertInstanceOf(\DateTime::class, $model->get());
        $this->assertEquals("2030-01-01", $model->get()->format("Y-m-d"));
    }

    public function testExceptionIsThrownIfNotOnAWeekDay(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new NextPayDate();
        $model->set(new \DateTime("01-12-2030"));
    }

    public function testExceptionIsThrownIfDateInPast(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new NextPayDate();
        $model->set(new \DateTime("01-12-2020"));
    }
}