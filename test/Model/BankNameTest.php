<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\BankName;
use Application\Enum\BankName as BankNameEnum;

class BankNameTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new BankName();
        $this->assertInstanceOf(BankName::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new BankName();
        $model->set(BankNameEnum::barclays);
        $this->assertEquals('barclays', $model->get());
    }

    public function testTypeErrorThrownWhenSettingStringValue(): void
    {
        $this->expectException(\TypeError::class);
        $model = new BankName();
        $model->set("barclays");
    }

}