<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\PaymentFrequency;
use Application\Enum\PaymentFrequency as PaymentFrequencyEnum;

class PaymentFrequencyTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new PaymentFrequency();
        $this->assertInstanceOf(PaymentFrequency::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new PaymentFrequency();
        $model->set(PaymentFrequencyEnum::bi_weekly);
        $this->assertEquals('bi_weekly', $model->get());
    }

    public function testTypeErrorIsThrownIfNonEnumValueSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new PaymentFrequency();
        $model->set("bi_weekly");
    }
}