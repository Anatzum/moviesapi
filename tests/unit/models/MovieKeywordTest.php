<?php

declare(strict_types=1);

namespace Tests\Unit;

class MovieKeywordTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\MovieKeyword::class, new \MovieKeyword());
    }
}
