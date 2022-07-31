<?php

declare(strict_types=1);

namespace Tests\Unit;

class GeneresTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Generes::class, new \Generes());
    }
}
