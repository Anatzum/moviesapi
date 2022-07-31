<?php

declare(strict_types=1);

namespace Tests\Unit;

class CrewControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\CrewController::class, new \CrewController());
    }
}
