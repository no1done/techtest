<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\AddressMoveInDate;

class AddressMoveInDateTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new AddressMoveInDate();
        $this->assertInstanceOf(AddressMoveInDate::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new AddressMoveInDate();
        $date = new \DateTime("01-01-2020");
        $model->set($date);
        $this->assertInstanceOf(\DateTime::class, $model->get());
    }

    public function testExceptionThrownIfAddFutureDate(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new AddressMoveInDate();
        $date = new \DateTime("01-01-2030");
        $model->set($date);
    }
}