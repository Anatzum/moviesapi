<?php

declare(strict_types=1);

namespace Tests\Unit;

class MovieGenereTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\MovieGenere::class, new \MovieGenere());
    }
}