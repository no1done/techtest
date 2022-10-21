<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ConsentEmail;

class ConsentEmailTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ConsentEmail();
        $this->assertInstanceOf(ConsentEmail::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ConsentEmail();
        $model->set(true);
        $this->assertEquals(true, $model->get());
    }

}