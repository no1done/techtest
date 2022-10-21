<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ExpenditureHousing;

class ExpenditureHousingTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ExpenditureHousing();
        $this->assertInstanceOf(ExpenditureHousing::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ExpenditureHousing();
        $model->set(100);
        $this->assertEquals(100, $model->get());
    }

}