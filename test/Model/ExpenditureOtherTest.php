<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ExpenditureOther;

class ExpenditureOtherTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ExpenditureOther();
        $this->assertInstanceOf(ExpenditureOther::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ExpenditureOther();
        $model->set(100);
        $this->assertEquals(100, $model->get());
    }

}