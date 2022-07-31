<?php

declare(strict_types=1);

namespace Tests\Unit;

class GeneresControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\GeneresController::class, new \GeneresController());
    }
}
