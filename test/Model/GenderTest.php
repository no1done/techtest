<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\Gender;
use Application\Enum\Gender as GenderEnum;

class GenderTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new Gender();
        $this->assertInstanceOf(Gender::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new Gender();
        $model->set(GenderEnum::male);
        $this->assertEquals('male', $model->get());
    }

    public function testExceptionIsThrownWhenEnumNotSetAsValue(): void
    {
        $this->expectException(\TypeError::class);
        $model = new Gender();
        $model->set("male");
    }

}