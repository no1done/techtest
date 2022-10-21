<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ConsentFinancial;

class ConsentFinancialTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ConsentFinancial();
        $this->assertInstanceOf(ConsentFinancial::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ConsentFinancial();
        $model->set(true);
        $this->assertEquals(true, $model->get());
    }

}