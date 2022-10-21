<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\JobTitle;

class JobTitleTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new JobTitle();
        $this->assertInstanceOf(JobTitle::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new JobTitle();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}