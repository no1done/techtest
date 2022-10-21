<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\AffPassword;

class AffPasswordTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new AffPassword();
        $this->assertInstanceOf(AffPassword::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new AffPassword();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}