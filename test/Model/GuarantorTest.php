<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\Guarantor;

class GuarantorTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new Guarantor();
        $this->assertInstanceOf(Guarantor::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new Guarantor();
        $model->set(true);
        $this->assertEquals('yes', $model->get());
    }

    public function testFalseSettingReturnsNoString(): void
    {
        $model = new Guarantor();
        $model->set(false);
        $this->assertEquals('no', $model->get());
    }


}