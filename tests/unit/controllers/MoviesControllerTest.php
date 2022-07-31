<?php

declare(strict_types=1);

namespace Tests\Unit;

class MoviesControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\MoviesController::class, new \MoviesController());
    }
}
