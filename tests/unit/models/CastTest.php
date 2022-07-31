<?php

declare(strict_types=1);

namespace Tests\Unit;

class CastTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Cast::class, new \Cast());
    }
}
