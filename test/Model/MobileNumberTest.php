<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\MobileNumber;

class MobileNumberTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new MobileNumber();
        $this->assertInstanceOf(MobileNumber::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new MobileNumber();
        $model->set('07123456789');
        $this->assertEquals('07123456789', $model->get());
    }

    public function testExceptionIsThrownIfInvalidStartOfNumber(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new MobileNumber();
        $model->set('01123456789');
    }

    public function testExceptionIsThrownIfInvalidNumberLength(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new MobileNumber();
        $model->set('071234');
    }

    public function testExceptionIsThrownIfAlphaChar(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new MobileNumber();
        $model->set('07123456abc');
    }
}