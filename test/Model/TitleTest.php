<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\Title;
use Application\Enum\Title as TitleEnum;

class TitleTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new Title();
        $this->assertInstanceOf(Title::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new Title();
        $model->set(TitleEnum::mr);
        $this->assertEquals('mr', $model->get());
    }

    public function testTypeErrorIsThrownWhenNonEnumSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new Title();
        $model->set("mr");
    }

}