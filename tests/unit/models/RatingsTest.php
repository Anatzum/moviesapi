<?php

declare(strict_types=1);

namespace Tests\Unit;

class RatingsTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Ratings::class, new \Ratings());
    }
}
