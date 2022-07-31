<?php

declare(strict_types=1);

namespace Tests\Unit;

class MoviesTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Movies::class, new \Movies());
    }
}
