<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\NumberOfDependents;

class NumberOfDependentsTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new NumberOfDependents();
        $this->assertInstanceOf(NumberOfDependents::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new NumberOfDependents();
        $model->set(4);
        $this->assertEquals(4, $model->get());
    }

    public function testDependentsSetsTo9IfGreaterThan9(): void
    {
        $model = new NumberOfDependents();
        $model->set(50);
        $this->assertEquals(9, $model->get());
    }

    public function testTypeErrorIsThrownIfWrongTypeSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new NumberOfDependents();
        $model->set("fifty");
    }
}