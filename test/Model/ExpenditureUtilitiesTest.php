<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ExpenditureUtilities;

class ExpenditureUtilitiesTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ExpenditureUtilities();
        $this->assertInstanceOf(ExpenditureUtilities::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ExpenditureUtilities();
        $model->set(100);
        $this->assertEquals(100, $model->get());
    }

}