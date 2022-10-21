<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\MobilePhoneType;
use Application\Enum\MobilePhoneType as MobilePhoneTypeEnum;

class MobilePhoneTypeTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new MobilePhoneType();
        $this->assertInstanceOf(MobilePhoneType::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new MobilePhoneType();
        $model->set(MobilePhoneTypeEnum::payge);
        $this->assertEquals('payge', $model->get());
    }

    public function testExceptionIsThrownIfNonEnumTypeSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new MobilePhoneType();
        $model->set("payge");
    }

}