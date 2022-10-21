<?php

namespace ApplicationTest\Model;

use Application\Model\BankCardType;
use PHPUnit\Framework\TestCase;
use Application\Enum\BankCardType as BankCardTypeEnum;

class BankCardTypeTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new BankCardType();
        $this->assertInstanceOf(BankCardType::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new BankCardType();
        $model->set(BankCardTypeEnum::visa);
        $this->assertEquals('visa', $model->get());
    }

    public function testExceptionIsThrownWhenInvalidType(): void
    {
        $this->expectException(\TypeError::class);
        $model = new BankCardType();
        $model->set("visa");
    }

}