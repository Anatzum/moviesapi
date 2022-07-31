<?php

declare(strict_types=1);

namespace Tests\Unit;

class LanguagesTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Languages::class, new \Languages());
    }
}
