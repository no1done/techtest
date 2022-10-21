<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\PostCode;

class PostCodeTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new PostCode();
        $this->assertInstanceOf(PostCode::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new PostCode();
        $model->set('M41AB');
        $this->assertEquals('M41AB', $model->get());
    }

    public function testRuntimeExceptionThrownIfWrongLength(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new PostCode();
        $model->set('M41ABBBB');
    }

    public function testRuntimeExceptionThrownIfStartWithNum(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new PostCode();
        $model->set('141AB');
    }

}