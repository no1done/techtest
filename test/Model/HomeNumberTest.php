<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\HomeNumber;

class HomeNumberTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new HomeNumber();
        $this->assertInstanceOf(HomeNumber::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new HomeNumber();
        $model->set('01611234567');
        $this->assertEquals('01611234567', $model->get());
    }

    public function testRuntimeExceptionThrownIfMobileNumberProvided(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new HomeNumber();
        $model->set('07123456789');
    }

    public function testRuntimeExceptionThrownIfInvalidLength(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new HomeNumber();
        $model->set('01234');
    }

    public function testRuntimeExceptionThrownIfAlpha(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new HomeNumber();
        $model->set('01234567foo'); // correct len
    }

}