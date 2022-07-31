<?php

declare(strict_types=1);

namespace Tests\Unit;

class KeywordsTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Keywords::class, new \Keywords());
    }
}
