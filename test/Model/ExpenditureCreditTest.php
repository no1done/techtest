<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ExpenditureCredit;

class ExpenditureCreditTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ExpenditureCredit();
        $this->assertInstanceOf(ExpenditureCredit::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ExpenditureCredit();
        $model->set(100);
        $this->assertEquals(100, $model->get());
    }
}