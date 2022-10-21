<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ReferringWebsite;

class ReferringWebsiteTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ReferringWebsite();
        $this->assertInstanceOf(ReferringWebsite::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ReferringWebsite();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}