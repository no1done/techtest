<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ExpenditureFood;

class ExpenditureFoodTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ExpenditureFood();
        $this->assertInstanceOf(ExpenditureFood::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ExpenditureFood();
        $model->set(100);
        $this->assertEquals(100, $model->get());
    }

}