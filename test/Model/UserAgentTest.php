<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\UserAgent;

class UserAgentTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new UserAgent();
        $this->assertInstanceOf(UserAgent::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new UserAgent();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}