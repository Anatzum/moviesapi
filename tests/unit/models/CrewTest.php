<?php

declare(strict_types=1);

namespace Tests\Unit;

class CrewTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Crew::class, new \Crew());
    }
}
