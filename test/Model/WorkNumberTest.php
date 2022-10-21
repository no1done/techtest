<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\WorkNumber;

class WorkNumberTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new WorkNumber();
        $this->assertInstanceOf(WorkNumber::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new WorkNumber();
        $model->set('01611234567');
        $this->assertEquals('01611234567', $model->get());
    }

    public function testRuntimeExceptionThrownIfMobileNumber(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new WorkNumber();
        $model->set('07611234567');
    }

    public function testRuntimeExceptionThrownIfTooShort(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new WorkNumber();
        $model->set('0161123');
    }

    public function testRuntimeExceptionThrownIfTooLong(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new WorkNumber();
        $model->set('0161123456789');
    }

}