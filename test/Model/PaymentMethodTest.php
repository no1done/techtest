<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\PaymentMethod;
use Application\Enum\PaymentMethod as PaymentMethodEnum;

class PaymentMethodTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new PaymentMethod();
        $this->assertInstanceOf(PaymentMethod::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new PaymentMethod();
        $model->set(PaymentMethodEnum::cash);
        $this->assertEquals('cash', $model->get());
    }

    public function testTypeErrorIsThrownIfNonEnumValueSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new PaymentMethod();
        $model->set("cash");
    }

}