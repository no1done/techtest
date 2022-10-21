<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ConsentCreditSearch;

class ConsentCreditSearchTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ConsentCreditSearch();
        $this->assertInstanceOf(ConsentCreditSearch::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ConsentCreditSearch();
        $model->set(true);
        $this->assertEquals(true, $model->get());
    }

}