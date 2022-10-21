<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\MaritalStatus;
use Application\Enum\MartialStatus as MartialStatusEnum;

class MaritalStatusTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new MaritalStatus();
        $this->assertInstanceOf(MaritalStatus::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new MaritalStatus();
        $model->set(MartialStatusEnum::other);
        $this->assertEquals('other', $model->get());
    }

    public function testTypeErrorIsThrownIfNonEnumValueSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new MaritalStatus();
        $model->set("other");
    }

}